@extends('layout.app')

@section('content')

    
{{--  --}}

    <div class="flex-1 p-6 overflow-y-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
            <div class="bg-white p-4 rounded-lg shadow-sm flex items-center gap-4 border-l-4 border-green-500">
                <div class="bg-green-100 text-green-600 p-3 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.24a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 008 10.172V5L7 4z" />
                    </svg>
                </div>
                <div>
                    <p class="text-sm text-gray-500">Total Tanaman</p>
                    <p class="text-2xl font-bold text-gray-800">{{ $totalCrops }}</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow-sm flex items-center gap-4 border-l-4 border-blue-500">
                <div class="bg-blue-100 text-blue-600 p-3 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <div>
                    <p class="text-sm text-gray-500">Tanaman Sehat</p>
                    <p class="text-2xl font-bold text-gray-800">{{ $healthyCrops }}</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow-sm flex items-center gap-4 border-l-4 border-yellow-500">
                <div class="bg-yellow-100 text-yellow-600 p-3 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                    </svg>
                </div>
                <div>
                    <p class="text-sm text-gray-500">Perlu Perhatian</p>
                    <p class="text-2xl font-bold text-gray-800">{{ $attentionCrops }}</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow-sm flex items-center gap-4 border-l-4 border-purple-500">
                <div class="bg-purple-100 text-purple-600 p-3 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l-1.586-1.586a2 2 0 010-2.828L16 8M9 9l.01.01" />
                    </svg>
                </div>
                <div>
                    <p class="text-sm text-gray-500">Panen Bulan Ini (Area)</p>
                    <p class="text-2xl font-bold text-gray-800">{{ $harvestThisMonth }}</p>
                </div>
            </div>
        </div>

        <!-- Tombol Aksi dan Filter -->
        <div class="bg-white p-4 rounded-lg shadow-sm mb-6">
            <div class="flex flex-wrap items-center justify-between gap-4">
                <div class="flex items-center gap-2 flex-wrap">
                    <a href="{{ route('crops.create') }}"
                        class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 flex items-center gap-2 text-sm font-medium">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path
                                d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                        </svg>
                        Tambah Tanaman
                    </a>
                    {{-- <a href="{{ route('crops.maintenance') }}"
                        class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 flex items-center gap-2 text-sm font-medium">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z" />
                            <path fill-rule="evenodd"
                                d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3z"
                                clip-rule="evenodd" />
                        </svg>
                        Catat Perawatan
                    </a> --}}
                    {{-- <a href="{{ route('crops.harvest') }}"
                        class="bg-yellow-500 text-white px-4 py-2 rounded-lg hover:bg-yellow-600 flex items-center gap-2 text-sm font-medium">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V4a2 2 0 00-2-2H6zm1 2a1 1 0 00-1 1v2a1 1 0 001 1h6a1 1 0 001-1V5a1 1 0 00-1-1H7z"
                                clip-rule="evenodd" />
                        </svg>
                        Catat Panen
                    </a> --}}
                    <button
                        class="bg-purple-500 text-white px-4 py-2 rounded-lg hover:bg-purple-600 flex items-center gap-2 text-sm font-medium">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path
                                d="M2 6a2 2 0 012-2h12a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM4 8a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm3 0a1 1 0 011-1h4a1 1 0 110 2H8a1 1 0 01-1-1z" />
                        </svg>
                        Laporan
                    </button>
                </div>
            </div>


            <form action="{{ route('crops.index') }}" method="GET">
                <div class="flex flex-wrap items-center justify-between gap-4 mt-4">
                    <div class="flex items-center gap-4">
                        <div>
                            <label for="jenis-tanaman" class="text-sm text-gray-500">Jenis Tanaman</label>
                            <select name="jenis-tanaman" id="jenis-tanaman"
                                class="w-full md:w-auto border border-gray-300 rounded-lg py-2 px-3 bg-white text-gray-700 focus:outline-none text-sm">
                                <option value="">Semua Jenis</option>
                                @foreach ($plantVarieties as $variety)
                                    <option value="{{ $variety->id }}"
                                        {{ request('jenis-tanaman') == $variety->id ? 'selected' : '' }}>
                                        {{ $variety->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label for="status-tanaman" class="text-sm text-gray-500">Status</label>
                            <select name="status-tanaman" id="status-tanaman"
                                class="w-full md:w-auto border border-gray-300 rounded-lg py-2 px-3 bg-white text-gray-700 focus:outline-none text-sm">
                                <option value="">Semua Status</option>
                                <option value="Sehat" {{ request('status-tanaman') == 'Sehat' ? 'selected' : '' }}>Sehat
                                </option>
                                <option value="Perlu" {{ request('status-tanaman') == 'Perlu' ? 'selected' : '' }}>Perlu
                                    Perhatian</option>
                                <option value="Panen" {{ request('status-tanaman') == 'Panen' ? 'selected' : '' }}>Siap
                                    Panen</option>
                            </select>
                        </div>
                        <button type="submit"
                            class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 text-sm">Filter</button>
                    </div>
                    <div class="relative">
                        <input type="text" name="search" placeholder="Cari tanaman..."
                            value="{{ request('search') }}"
                            class="pl-10 pr-4 py-2 border border-gray-300 rounded-lg w-full md:w-64 focus:outline-none focus:ring-2 focus:ring-green-500">
                        <svg class="w-5 h-5 text-gray-400 absolute top-1/2 left-3 -translate-y-1/2"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>
                </div>
            </form>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse ($crops as $crop)
                @php
                    $status = $crop->currentStage->name ?? 'N/A';
                    $statusClass = 'gray'; // Default
                    if (Str::contains(strtolower($status), 'sehat')) {
                        $statusClass = 'green';
                    } elseif (Str::contains(strtolower($status), ['perlu', 'kering'])) {
                        $statusClass = 'yellow';
                    } elseif (Str::contains(strtolower($status), 'panen')) {
                        $statusClass = 'blue';
                    }
                @endphp
                <div class="bg-white rounded-lg shadow-sm overflow-hidden">
                    <div class="p-4 bg-{{ $statusClass }}-50 border-b-2 border-{{ $statusClass }}-200">
                        <div class="flex justify-between items-center">
                            <h3 class="font-bold text-gray-800">{{ $crop->name }}</h3>
                            <span
                                class="text-xs font-semibold text-{{ $statusClass }}-700 bg-{{ $statusClass }}-200 px-2 py-1 rounded-full">{{ $status }}</span>
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="flex gap-4">
                            <div class="grid grid-cols-2 gap-x-4 text-sm w-full">
                                <p class="text-gray-500">Jenis</p>
                                <p class="font-medium text-gray-800">{{ $crop->plantVariety->name ?? 'N/A' }}</p>
                                <p class="text-gray-500">Umur</p>
                                <p class="font-medium text-gray-800">
                                    {{ $crop->planted_date ? $crop->planted_date->diffInDays(now()) . ' hari' : 'N/A' }}
                                </p>
                                <p class="text-gray-500">Area</p>
                                <p class="font-medium text-gray-800">{{ $crop->field->name ?? 'N/A' }}
                                    ({{ $crop->area }} m²)
                                </p>
                                <p class="text-gray-500">Estimasi Panen</p>
                                <p class="font-medium text-gray-800">
                                    {{ $crop->expected_harvest_date ? ($crop->expected_harvest_date->isPast() ? 'Sudah lewat' : $crop->expected_harvest_date->diffForHumans()) : 'N/A' }}
                                </p>
                            </div>
                        </div>
                        <div class="flex justify-between items-center text-xs text-gray-500 mt-4 pt-4 border-t">
                            <p>Tgl Tanam: <span
                                    class="font-medium text-gray-700">{{ $crop->planted_date ? $crop->planted_date->format('d M Y') : 'N/A' }}</span>
                            </p>
                            <div class="flex gap-2">
                                <a href="{{ route('crops.edit', $crop->id) }}"
                                    class="text-blue-500 hover:text-blue-700">Edit</a>
                                <form action="{{ route('crops.destroy', $crop->id) }}" method="POST"
                                    onsubmit="return confirm('Yakin ingin menghapus?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:text-red-700">Hapus</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-span-1 md:col-span-2 lg:col-span-3 text-center py-12 bg-white rounded-lg shadow-sm">
                    <p class="text-gray-500">Tidak ada data tanaman yang cocok dengan filter.</p>
                </div>
            @endforelse
        </div>

        <div class="mt-6">
            {{ $crops->links() }}
        </div>
    </div>
@endsection
