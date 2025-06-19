@extends('layout.app')
@section('content')
 <!-- Area Konten Halaman -->
  <div class="flex-1 p-6 overflow-y-auto">
    <div class="max-w-4xl mx-auto bg-white p-8 rounded-lg shadow-md">

        <div class="mb-8">
            <h1 class="text-3xl font-bold text-gray-800">Tambah Tanaman Baru</h1>
            <p class="text-gray-500 mt-1">Isi detail di bawah ini untuk menambahkan tanaman baru ke dalam daftar.</p>
        </div>

        <form action="{{ route('crops.store') }}" method="POST">
            @csrf

            <div class="space-y-6">
                {{-- Nama Tanaman --}}
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Nama Tanaman *</label>
                    <input type="text" name="name" id="name" value="{{ old('name') }}" required
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm"
                        placeholder="Contoh: Tomat Ceri Blok A">
                    @error('name')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    {{-- Lahan/Area (dari field_id) --}}
                    <div>
                        <label for="field_id" class="block text-sm font-medium text-gray-700">Pilih Lahan/Area *</label>
                        <select id="field_id" name="field_id" required
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                            <option value="">-- Pilih Lahan --</option>
                            {{-- Loop ini mengambil data dari controller --}}
                            @foreach ($fields as $field)
                                <option value="{{ $field->id }}" {{ old('field_id') == $field->id ? 'selected' : '' }}>
                                    {{ $field->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('field_id')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Luas Area Tanam (dari area) --}}
                    <div>
                        <label for="area" class="block text-sm font-medium text-gray-700">Luas Area Tanam</label>
                         <div class="mt-1 relative rounded-md shadow-sm">
                            <input type="number" step="0.01" name="area" id="area" value="{{ old('area') }}"
                                class="focus:ring-green-500 focus:border-green-500 block w-full pr-12 sm:text-sm border-gray-300 rounded-md"
                                placeholder="0.00">
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                <span class="text-gray-500 sm:text-sm">m²</span>
                            </div>
                        </div>
                        @error('area')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Jenis Varietas Tanaman (dari plant_variety_id) --}}
                    <div>
                        <label for="plant_variety_id" class="block text-sm font-medium text-gray-700">Jenis Varietas Tanaman *</label>
                        <select id="plant_variety_id" name="plant_variety_id" required
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                            <option value="">-- Pilih Varietas --</option>
                            {{-- Loop ini mengambil data dari controller --}}
                            @foreach ($plantVarieties as $variety)
                                <option value="{{ $variety->id }}" {{ old('plant_variety_id') == $variety->id ? 'selected' : '' }}>
                                    {{ $variety->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('plant_variety_id')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Tahap Tumbuh Saat Ini (dari current_stage_id) --}}
                    <div>
                        <label for="current_stage_id" class="block text-sm font-medium text-gray-700">Tahap Tumbuh Awal *</label>
                        <select id="current_stage_id" name="current_stage_id" required
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                            <option value="">-- Pilih Tahap Tumbuh --</option>
                             {{-- Loop ini mengambil data dari controller --}}
                            @foreach ($growthStages as $stage)
                                <option value="{{ $stage->id }}" {{ old('current_stage_id') == $stage->id ? 'selected' : '' }}>
                                    {{ $stage->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('current_stage_id')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Tanggal Tanam (dari planted_date) --}}
                    <div>
                        <label for="planted_date" class="block text-sm font-medium text-gray-700">Tanggal Tanam *</label>
                        <input type="date" name="planted_date" id="planted_date" value="{{ old('planted_date') }}" required
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                        @error('planted_date')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Estimasi Tanggal Panen (dari expected_harvest_date) --}}
                    <div>
                        <label for="expected_harvest_date" class="block text-sm font-medium text-gray-700">Estimasi Tanggal Panen</label>
                        <input type="date" name="expected_harvest_date" id="expected_harvest_date" value="{{ old('expected_harvest_date') }}"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                        @error('expected_harvest_date')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="pt-5 border-t mt-6">
                <div class="flex justify-end gap-3">
                    <a href="{{ route('crops.index') }}" class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                        Batal
                    </a>
                    <button type="submit" class="bg-green-600 py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                        Simpan Tanaman
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection