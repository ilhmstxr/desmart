@extends('layout.app')
@section('content')
    <div class="p-4 sm:p-6 lg:p-8">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2 class="text-2xl font-semibold text-gray-800">Tambah Lahan Baru</h2>
                    <p class="text-sm text-gray-600 mb-6">Untuk Pertanian: <span class="font-bold">{{ $farm->name }}</span>
                    </p>

                    <!-- PERBAIKAN: Action route & method -->
                    <form action="{{ route('farms.fields.store', $farm->id) }}" method="POST" class="space-y-6">
                        @csrf

                        <!-- PERBAIKAN: Menyesuaikan semua nama input (name) dengan kolom database -->
                        <div>
                            <label for="name" class="block font-medium text-sm text-gray-700">Nama Lahan/Pemetakan
                                *</label>
                            <input id="name" name="name" type="text" value="{{ old('name') }}"
                                placeholder="Contoh: Lahan A1, Blok Utara" required
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            @error('name')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="size" class="block font-medium text-sm text-gray-700">Luas Lahan (m²)
                                    *</label>
                                <input id="size" name="size" type="number" step="0.01"
                                    value="{{ old('size') }}" required
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                @error('size')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="soil_type" class="block font-medium text-sm text-gray-700">Tipe Tanah *</label>
                                <input id="soil_type" name="soil_type" type="text" value="{{ old('soil_type') }}"
                                    placeholder="Contoh: Liat Berpasir" required
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                @error('soil_type')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="ph_level" class="block font-medium text-sm text-gray-700">pH Tanah</label>
                                <input id="ph_level" name="ph_level" type="number" step="0.1"
                                    value="{{ old('ph_level') }}" placeholder="Contoh: 6.5"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                @error('ph_level')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="altitude" class="block font-medium text-sm text-gray-700">Ketinggian
                                    (mdpl)</label>
                                <input id="altitude" name="altitude" type="number" step="0.01"
                                    value="{{ old('altitude') }}"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                @error('altitude')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label for="irrigation_status" class="block font-medium text-sm text-gray-700">Status Irigasi
                                *</label>
                            <select id="irrigation_status" name="irrigation_status" required
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                <option value="off" @if (old('irrigation_status') == 'off') selected @endif>Mati (Off)</option>
                                <option value="scheduled" @if (old('irrigation_status') == 'scheduled') selected @endif>Terjadwal
                                    (Scheduled)</option>
                                <option value="active" @if (old('irrigation_status') == 'active') selected @endif>Aktif (Active)
                                </option>
                            </select>
                            @error('irrigation_status')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="last_tested" class="block font-medium text-sm text-gray-700">Tanggal Pemeriksaan
                                Terakhir</label>
                            <input id="last_tested" name="last_tested" type="date" value="{{ old('last_tested') }}"
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            @error('last_tested')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="coordinates" class="block font-medium text-sm text-gray-700">Koordinat</label>
                            <input id="coordinates" name="coordinates" type="text" value="{{ old('coordinates') }}"
                                placeholder="Contoh: GeoJSON"
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            @error('coordinates')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex items-center justify-end space-x-4 pt-2">
                            <a href="{{ route('farms.show', $farm->id) }}"
                                class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50">
                                Batal
                            </a>
                            <button type="submit"
                                class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700">
                                Simpan Lahan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
