<?php

namespace App\Http\Controllers\farms;

use App\Http\Controllers\Controller;
use App\Models\farms\Crop;
use App\Models\farms\Field;
use App\Models\farms\growth_stages;
use App\Models\farms\plant_varieties;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CropController extends Controller
{
    public function index(Request $request)
    {

        // $user = Auth::user();

        // // Mengambil semua tanaman yang berada di lahan milik pengguna
        // $crops = Crop::whereHas('field.farm', function ($query) use ($user) {
        //     $query->where('owner_id', $user->id);
        // })->with(['field', 'plantVariety', 'currentStage'])->latest()->paginate(10);

        // return view('crops.index', compact('crops'));

        // 1. DATA UNTUK KARTU RINGKASAN
        $totalCrops = Crop::count();

        // Asumsi: Status 'Sehat' diambil dari relasi 'currentStage' yang namanya mengandung kata 'Sehat'
        $healthyCrops = Crop::whereHas('currentStage', function ($query) {
            $query->where('name', 'like', '%Sehat%');
        })->count();

        // Asumsi: Status 'Perlu Perhatian' diambil dari relasi 'currentStage' yang namanya mengandung kata 'Perlu'
        $attentionCrops = Crop::whereHas('currentStage', function ($query) {
            $query->where('name', 'like', '%Perlu%');
        })->count();

        // Menghitung total area yang akan panen bulan ini
        $harvestThisMonthArea = Crop::whereMonth('expected_harvest_date', Carbon::now()->month)
            ->whereYear('expected_harvest_date', Carbon::now()->year)
            ->sum('area');
        $harvestThisMonth = number_format($harvestThisMonthArea, 2) . ' m²';


        // 2. DATA UNTUK FILTER DROPDOWN
        $plantVarieties = plant_varieties::orderBy('plant_name')->get(); // Asumsi tabel plant_varieties punya kolom 'name'


        // 3. QUERY UTAMA UNTUK DAFTAR TANAMAN (DENGAN FILTER & PENCARIAN)
        $query = Crop::with(['plantVariety', 'currentStage', 'field']); // Eager loading untuk performa

        // Filter berdasarkan pencarian
        if ($request->filled('search')) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        // Filter berdasarkan Jenis Tanaman
        if ($request->filled('jenis-tanaman')) {
            $query->where('plant_variety_id', $request->input('jenis-tanaman'));
        }

        // Filter berdasarkan Status
        if ($request->filled('status-tanaman')) {
            $status = $request->input('status-tanaman');
            $query->whereHas('currentStage', function ($q) use ($status) {
                $q->where('name', 'like', '%' . $status . '%');
            });
        }

        // Ambil hasil query dengan paginasi
        $crops = $query->latest()->paginate(9)->withQueryString();


        // 4. KIRIM SEMUA DATA KE VIEW
        return view('crops.index', compact(
            'totalCrops',
            'healthyCrops',
            'attentionCrops',
            'harvestThisMonth',
            'plantVarieties',
            'crops'
        ));
    }

    /**
     * Menampilkan form untuk mencatat penanaman baru.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $user = Auth::user();

        // Mengambil data yang diperlukan untuk dropdown pada form
        $fields = Field::whereHas('farm', function ($query) use ($user) {
            $query->where('owner_id', $user->id);
        })->get();

        $plantVarieties = plant_varieties::all();
        $growthStages = growth_stages::all();

        return view('crops.create', compact('fields', 'plantVarieties', 'growthStages'));
    }

    /**
     * Menyimpan catatan tanaman baru ke dalam database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'field_id' => 'required|exists:fields,id',
            'plant_variety_id' => 'required|exists:plant_varieties,id',
            'current_stage_id' => 'required|exists:growth_stages,id',
            'area' => 'nullable|numeric|min:0',
            'planted_date' => 'required|date',
            'expected_harvest_date' => 'nullable|date|after_or_equal:planted_date',
        ]);

        // Otorisasi: Pastikan field yang dipilih adalah milik pengguna
        $field = Field::findOrFail($validatedData['field_id']);
        // $this->authorize('update', $field->farm);

        Crop::create($validatedData);

        return redirect()->route('crops.index')->with('success', 'Catatan tanaman baru berhasil ditambahkan.');
    }

    /**
     * Menampilkan detail dari satu tanaman spesifik.
     *
     * @param  \App\Models\farms\Crop  $crop
     * @return \Illuminate\View\View
     */
    public function show(Crop $crop)
    {
        // Otorisasi: Pastikan pengguna dapat melihat tanaman ini
        // $this->authorize('view', $crop->field->farm);

        // Eager load relasi untuk ditampilkan di view
        $crop->load(['field', 'plantVariety', 'currentStage']);

        return view('crops.show', compact('crop'));
    }

    /**
     * Menampilkan form untuk mengedit catatan tanaman.
     *
     * @param  \App\Models\farms\Crop  $crop
     * @return \Illuminate\View\View
     */
    public function edit(Crop $crop)
    {
        // $this->authorize('update', $crop->field->farm);

        $user = Auth::user();

        // Mengambil data yang diperlukan untuk dropdown pada form
        $fields = Field::whereHas('farm', function ($query) use ($user) {
            $query->where('owner_id', $user->id);
        })->get();

        $plantVarieties = plant_varieties::all();
        $growthStages = growth_stages::all();

        // return $growthStages;

        return view('crops.edit', compact('crop', 'fields', 'plantVarieties', 'growthStages'));
    }

    public function maintenance(Crop $crop)
    {
        // Otorisasi: Pastikan pengguna dapat mengelola tanaman ini
        // $this->authorize('update', $crop->field->farm);

        // Di sini Anda bisa menambahkan logika untuk mengambil data
        // terkait perawatan, misalnya dari tabel 'maintenance_logs'.
        // Untuk saat ini, kita hanya akan menampilkan view dengan data tanaman.

        return view('crops.maintenance', compact('crop'));
    }

    /**
     * Memperbarui data tanaman di database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\farms\Crop  $crop
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Crop $crop)
    {
        // $this->authorize('update', $crop->field->farm);


        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'current_stage_id' => 'required|exists:growth_stages,id',
            'area' => 'nullable|numeric|min:0',
            'planted_date' => 'required|date',
            'expected_harvest_date' => 'nullable|date|after_or_equal:planted_date'
        ]);


        $crop->update($validatedData);

        return redirect()->route('crops.index')->with('success', 'Data tanaman berhasil diperbarui.');
    }

    /**
     * Menghapus catatan tanaman dari database.
     *
     * @param  \App\Models\farms\Crop  $crop
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Crop $crop)
    {
        // $this->authorize('delete', $crop->field->farm);
        // $crop->schedules()->delete();
        $crop->delete();

        return redirect()->route('crops.index')->with('success', 'Catatan tanaman berhasil dihapus.');
    }
}
