<?php

namespace App\Http\Controllers\farms;

use App\Http\Controllers\Controller;
use App\Models\farms\Farm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class FarmController extends Controller
{
   
    public function index()
    {
        // Mengambil semua data pertanian milik user yang sedang terautentikasi
        $farms = Farm::where('owner_id', Auth::id())->latest()->paginate(10);

        // Menampilkan view 'farms.index' dan meneruskan data pertanian
        return view('farms.index', compact('farms'));
    }

    /**
     * Menampilkan form untuk membuat pertanian baru.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        // Menampilkan view 'farms.create'
        return view('farms.create');
    }

    /**
     * Menyimpan data pertanian baru ke dalam database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Validasi data yang masuk dari form
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'description' => 'nullable|string',
            'total_area' => 'required|numeric|min:0',
            'status' => 'required|in:active,inactive,archived',
            'farm_photo_path' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi file gambar
            'boundary' => 'nullable|string', // Validasi untuk boundary, bisa disesuaikan
        ]);

        // Mengambil ID pengguna yang sedang login sebagai pemilik
        $validatedData['owner_id'] = Auth::id();

        // Menangani unggahan file foto
        if ($request->hasFile('farm_photo_path')) {
            $path = $request->file('farm_photo_path')->store('farm_photos', 'public');
            $validatedData['farm_photo_path'] = $path;
        }

        // Membuat record baru di database
        Farm::create($validatedData);

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('farms.index')->with('success', 'Pertanian berhasil ditambahkan.');
    }

    /**
     * Menampilkan detail dari satu pertanian spesifik.
     *
     * @param  \App\Models\farms\Farm  $farm
     * @return \Illuminate\View\View
     */
    public function show(Farm $farm)
    {
        // Memastikan pengguna hanya bisa melihat pertanian miliknya
        $this->authorize('view', $farm);

        // Menampilkan view 'farms.show' dan meneruskan data pertanian
        return view('farms.show', compact('farm'));
    }

    /**
     * Menampilkan form untuk mengedit data pertanian.
     *
     * @param  \App\Models\farms\Farm  $farm
     * @return \Illuminate\View\View
     */
    public function edit(Farm $farm)
    {
        // Memastikan pengguna hanya bisa mengedit pertanian miliknya
        $this->authorize('update', $farm);

        // Menampilkan view 'farms.edit' dan meneruskan data pertanian
        return view('farms.edit', compact('farm'));
    }

    /**
     * Memperbarui data pertanian di database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\farms\Farm  $farm
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Farm $farm)
    {
        // Memastikan pengguna hanya bisa memperbarui pertanian miliknya
        $this->authorize('update', $farm);

        // Validasi data yang masuk dari form
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'description' => 'nullable|string',
            'total_area' => 'required|numeric|min:0',
            'status' => 'required|in:active,inactive,archived',
            'farm_photo_path' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'boundary' => 'nullable|string',
        ]);

        // Menangani unggahan file foto baru
        if ($request->hasFile('farm_photo_path')) {
            // Hapus foto lama jika ada
            if ($farm->farm_photo_path) {
                Storage::disk('public')->delete($farm->farm_photo_path);
            }
            // Simpan foto baru
            $path = $request->file('farm_photo_path')->store('farm_photos', 'public');
            $validatedData['farm_photo_path'] = $path;
        }

        // Memperbarui record di database
        $farm->update($validatedData);

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('farms.index')->with('success', 'Data pertanian berhasil diperbarui.');
    }

    /**
     * Menghapus data pertanian dari database.
     *
     * @param  \App\Models\farms\Farm  $farm
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Farm $farm)
    {
        // Memastikan pengguna hanya bisa menghapus pertanian miliknya
        $this->authorize('delete', $farm);

        // Hapus foto dari storage jika ada
        if ($farm->farm_photo_path) {
            Storage::disk('public')->delete($farm->farm_photo_path);
        }

        // Hapus record dari database
        $farm->delete();

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('farms.index')->with('success', 'Data pertanian berhasil dihapus.');
    }
}
