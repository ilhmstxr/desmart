<?php

namespace App\Http\Controllers\farms;

use App\Http\Controllers\Controller;
use App\Models\Schedule;
use App\Models\farms\Field;
use App\Models\farms\Crop;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     * READ: Menampilkan semua jadwal.
     */
    public function index(Request $request)
    {
        // Eager load relasi untuk performa
        $query = Schedule::with(['assignedTo', 'createdBy', 'crop', 'field']);

        // Contoh fitur filter
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }
        if ($request->filled('priority')) {
            $query->where('priority', $request->priority);
        }

        $schedules = $query->oldest('scheduled_at')->paginate(15);

        // Anda perlu membuat view: resources/views/schedules/index.blade.php
        return view('schedules.index', compact('schedules'));
    }

    /**
     * Show the form for creating a new resource.
     * CREATE: Menampilkan form untuk membuat jadwal baru.
     */
    public function create()
    {
        // Mengambil data untuk mengisi dropdown di form
        $users = User::orderBy('name')->get();
        $crops = Crop::orderBy('name')->get();
        $fields = Field::orderBy('name')->get();

        // Anda perlu membuat view: resources/views/schedules/create.blade.php
        return view('schedules.create', compact('users', 'crops', 'fields'));
    }

    /**
     * Store a newly created resource in storage.
     * CREATE: Menyimpan jadwal baru ke database.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'type' => ['required', Rule::in(['planting', 'irrigation', 'fertilizing', 'harvesting', 'maintenance', 'inspection'])],
            'scheduled_at' => 'required|date',
            'priority' => ['required', Rule::in(['low', 'medium', 'high', 'urgent'])],
            'assigned_to' => 'nullable|exists:users,id',
            'crop_id' => 'nullable|exists:crops,id',
            'field_id' => 'nullable|exists:fields,id',
            'notes' => 'nullable|json',
        ]);

        $validatedData['created_by'] = Auth::id();

        // Sekarang, $validatedData sudah berisi semua kolom yang dibutuhkan.
        Schedule::create($validatedData);

        return redirect()->route('schedules.index')->with('success', 'Jadwal baru berhasil dibuat.');
    }

    /**
     * Display the specified resource.
     * READ: Menampilkan detail satu jadwal.
     */
    public function show(Schedule $schedule)
    {
        // Memuat relasi untuk ditampilkan di detail
        $schedule->load(['assignedTo', 'createdBy', 'crop', 'field']);

        // Anda perlu membuat view: resources/views/schedules/show.blade.php
        return view('schedules.show', compact('schedule'));
    }

    /**
     * Show the form for editing the specified resource.
     * UPDATE: Menampilkan form untuk mengedit jadwal.
     */
    public function edit(Schedule $schedule)
    {
        // Mengambil data untuk mengisi dropdown di form
        $users = User::orderBy('name')->get();
        $crops = Crop::orderBy('name')->get();
        $fields = Field::orderBy('name')->get();

        // Anda perlu membuat view: resources/views/schedules/edit.blade.php
        return view('schedules.edit', compact('schedule', 'users', 'crops', 'fields'));
    }

    /**
     * Update the specified resource in storage.
     * UPDATE: Memperbarui jadwal di database.
     */
    public function update(Request $request, Schedule $schedule)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'type' => ['required', Rule::in(['planting', 'irrigation', 'fertilizing', 'harvesting', 'maintenance', 'inspection'])],
            'scheduled_at' => 'required|date',
            'status' => ['required', Rule::in(['pending', 'in_progress', 'completed', 'cancelled'])],
            'priority' => ['required', Rule::in(['low', 'medium', 'high', 'urgent'])],
            'assigned_to' => 'nullable|exists:users,id',
            'crop_id' => 'nullable|exists:crops,id',
            'field_id' => 'nullable|exists:fields,id',
            'notes' => 'nullable|json',
        ]);

        // Logika tambahan: isi 'completed_at' jika status diubah menjadi 'completed'
        if ($validatedData['status'] == 'completed' && is_null($schedule->completed_at)) {
            $validatedData['completed_at'] = now();
        } elseif ($validatedData['status'] != 'completed') {
            $validatedData['completed_at'] = null;
        }

        $schedule->update($validatedData);

        return redirect()->route('schedules.index')->with('success', 'Jadwal berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     * DELETE: Menghapus jadwal.
     */
    public function destroy(Schedule $schedule)
    {
        $schedule->delete();

        return redirect()->route('schedules.index')->with('success', 'Jadwal berhasil dihapus.');
    }
}
