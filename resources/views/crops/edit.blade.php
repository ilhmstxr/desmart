@extends('layout.app')

@section('content')
<div class="flex-1 p-6 overflow-y-auto">
    <div class="max-w-4xl mx-auto bg-white p-8 rounded-lg shadow-md">

        <div class="mb-8">
            <h1 class="text-3xl font-bold text-gray-800">Edit Data Tanaman</h1>
            <p class="text-gray-500 mt-1">Perbarui status dan detail untuk <span class="font-semibold text-green-600">{{ $crop->name }}</span>.</p>
        </div>

        <form action="{{ route('crops.update', $crop->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-6">

                <div class="space-y-6">
                    
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Nama Tanaman</label>
                        <input type="text" name="name" id="name" value="{{ old('name', $crop->name) }}"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                        @error('name')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="plant_variety" class="block text-sm font-medium text-gray-700">Jenis Tanaman</label>
                        <input type="text" id="plant_variety" value="{{ $crop->plantVariety->name ?? 'N/A' }}"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm sm:text-sm bg-gray-100 cursor-not-allowed" disabled>
                        <p class="text-xs text-gray-500 mt-1">Jenis tanaman tidak dapat diubah.</p>
                    </div>
                    
                    <div>
                        <label for="area" class="block text-sm font-medium text-gray-700">Luas Area (m²)</label>
                        <input type="number" step="0.01" name="area" id="area" value="{{ old('area', $crop->area) }}"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                        @error('area')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                     <div>
                        <label for="planted_date" class="block text-sm font-medium text-gray-700">Tanggal Tanam</label>
                        <input type="date" name="planted_date" id="planted_date" value="{{ old('planted_date', $crop->planted_date->format('Y-m-d')) }}"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                        @error('planted_date')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="space-y-6">
                    <div>
                        <label for="current_stage_id" class="block text-sm font-medium text-gray-700">Status Tahap Tumbuh</label>
                        <select id="current_stage_id" name="current_stage_id" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm rounded-md">
                            <option disabled>Pilih status baru...</option>
                            @foreach ($growthStages as $stage)
                                <option value="{{ $stage->id }}" {{ old('current_stage_id', $crop->current_stage_id) == $stage->id ? 'selected' : '' }}>
                                    {{ $stage->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('current_stage_id')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="expected_harvest_date" class="block text-sm font-medium text-gray-700">Estimasi Tanggal Panen</label>
                        <input type="date" name="expected_harvest_date" id="expected_harvest_date" value="{{ old('expected_harvest_date', $crop->expected_harvest_date ? $crop->expected_harvest_date->format('Y-m-d') : '') }}"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                        @error('expected_harvest_date')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        {{-- CATATAN PENTING: Untuk menyimpan catatan perawatan, idealnya Anda membuat tabel baru `maintenance_logs`
                             yang berelasi dengan tabel `crops`. Form di bawah ini adalah UI-nya.
                             Untuk membuatnya berfungsi, Anda perlu menambahkan kolom di database atau membuat tabel baru. --}}
                        <label for="maintenance_notes" class="block text-sm font-medium text-gray-700">Catatan Perawatan (Opsional)</label>
                        <textarea id="maintenance_notes" name="maintenance_notes" rows="4"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm"
                            placeholder="Contoh: Pemupukan NPK 5gr/tanaman pada pagi hari.">{{-- old('maintenance_notes') --}}</textarea>
                        <p class="text-xs text-gray-500 mt-1">Catatan ini tidak tersimpan permanen kecuali backend disesuaikan.</p>
                    </div>
                </div>
            </div>

            <div class="mt-10 pt-6 border-t border-gray-200 flex items-center justify-end gap-4">
                <a href="{{ route('crops.index') }}" class="text-sm font-medium text-gray-700 hover:text-gray-900">
                    Batal
                </a>
                <button type="submit"
                    class="inline-flex justify-center py-2 px-6 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                    Simpan Perubahan
                </button>
            </div>
        </form>

    </div>
</div>
@endsection