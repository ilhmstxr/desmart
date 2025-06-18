<?php

namespace App\Http\Controllers\farms;

use App\Http\Controllers\Controller;
use App\Models\farms\Farm;
use App\Models\farms\Field;
use Illuminate\Http\Request;

class FieldController extends Controller
{
 /**
     * Menampilkan daftar semua lahan dalam pertanian tertentu.
     *
     * @param  \App\Models\farms\Farm  $farm
     * @return \Illuminate\View\View
     */
    public function index(Farm $farm)
    {
        // Otorisasi: Pastikan pengguna yang login adalah pemilik pertanian
        // $this->authorize('view', $farm);

        // Mengambil semua lahan yang berelasi dengan pertanian ini
        $fields = $farm->fields()->paginate(10);

        // Menampilkan view 'fields.index' dengan data farm dan fields
        return view('fields.index', compact('farm', 'fields'));
    }

    /**
     * Menampilkan form untuk membuat lahan baru dalam pertanian tertentu.
     *
     * @param  \App\Models\farms\Farm  $farm
     * @return \Illuminate\View\View
     */
    public function create(Farm $farm)
    {
        // Otorisasi: Pastikan pengguna boleh memperbarui (menambah lahan) di pertanian ini
        $this->authorize('update', $farm);

        return view('fields.create', compact('farm'));
    }

    /**
     * Menyimpan data lahan baru ke dalam database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\farms\Farm  $farm
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request, Farm $farm)
    {
        // Otorisasi
        $this->authorize('update', $farm);

        // Validasi data yang masuk dari form
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'size' => 'required|numeric|min:0',
            'soil_type' => 'required|string|max:255',
            'ph_level' => 'nullable|numeric|between:0,14',
            'coordinates' => 'nullable|string',
            'irrigation_status' => 'required|in:active,scheduled,off',
            'last_tested' => 'nullable|date',
            'altitude' => 'nullable|numeric',
        ]);

        // Menambahkan farm_id ke data yang tervalidasi
        $validatedData['farm_id'] = $farm->id;

        // Membuat record baru di database
        Field::create($validatedData);

        // Redirect ke halaman detail pertanian dengan pesan sukses
        return redirect()->route('farms.show', $farm->id)->with('success', 'Lahan baru berhasil ditambahkan.');
    }

    /**
     * Menampilkan detail dari satu lahan spesifik.
     *
     * @param  \App\Models\farms\Farm  $farm
     * @param  \App\Models\farms\Field  $field
     * @return \Illuminate\View\View
     */
    public function show(Farm $farm, Field $field)
    {
        // Otorisasi
        $this->authorize('view', $farm);

        // Memastikan lahan yang diakses benar-benar milik pertanian yang bersangkutan
        if ($field->farm_id !== $farm->id) {
            abort(404);
        }

        return view('fields.show', compact('farm', 'field'));
    }

    /**
     * Menampilkan form untuk mengedit data lahan.
     *
     * @param  \App\Models\farms\Farm  $farm
     * @param  \App\Models\farms\Field  $field
     * @return \Illuminate\View\View
     */
    public function edit(Farm $farm, Field $field)
    {
        // Otorisasi
        $this->authorize('update', $farm);

        if ($field->farm_id !== $farm->id) {
            abort(404);
        }

        return view('fields.edit', compact('farm', 'field'));
    }

    /**
     * Memperbarui data lahan di database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\farms\Farm  $farm
     * @param  \App\Models\farms\Field  $field
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Farm $farm, Field $field)
    {
        // Otorisasi
        $this->authorize('update', $farm);

        if ($field->farm_id !== $farm->id) {
            abort(404);
        }

        // Validasi data yang masuk
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'size' => 'required|numeric|min:0',
            'soil_type' => 'required|string|max:255',
            'ph_level' => 'nullable|numeric|between:0,14',
            'coordinates' => 'nullable|string',
            'irrigation_status' => 'required|in:active,scheduled,off',
            'last_tested' => 'nullable|date',
            'altitude' => 'nullable|numeric',
        ]);

        // Memperbarui record di database
        $field->update($validatedData);

        // Redirect ke halaman detail pertanian dengan pesan sukses
        return redirect()->route('farms.show', $farm->id)->with('success', 'Data lahan berhasil diperbarui.');
    }

    /**
     * Menghapus data lahan dari database.
     *
     * @param  \App\Models\farms\Farm  $farm
     * @param  \App\Models\farms\Field  $field
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Farm $farm, Field $field)
    {
        // Otorisasi
        $this->authorize('delete', $farm);
        
        if ($field->farm_id !== $farm->id) {
            abort(404);
        }

        // Hapus record dari database
        $field->delete();

        // Redirect ke halaman detail pertanian dengan pesan sukses
        return redirect()->route('farms.show', $farm->id)->with('success', 'Data lahan berhasil dihapus.');
    }
}
