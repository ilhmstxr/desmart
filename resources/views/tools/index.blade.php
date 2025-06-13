@extends('layout.app')

@section('title', 'tools')
    
@section('content')
    
    <!-- Area Konten Halaman -->
    <div class="p-6 space-y-6">
        <!-- Header Halaman -->
        <div>
            <h2 class="text-2xl font-bold text-gray-800">Manajemen Perlengkapan</h2>
        </div>

        <!-- Tombol Aksi & Filter -->
        <div class="bg-white p-4 rounded-lg shadow-sm space-y-4">
            <div class="flex flex-wrap items-center justify-between gap-4">
                <div class="flex items-center gap-2 flex-wrap">
                    <button
                        class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 flex items-center gap-2 text-sm font-medium">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                                clip-rule="evenodd" />
                        </svg>
                        Tambah Perlengkapan
                    </button>
                    <button
                        class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 flex items-center gap-2 text-sm font-medium">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z" />
                            <path fill-rule="evenodd"
                                d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3z"
                                clip-rule="evenodd" />
                        </svg>
                        Catat Peminjaman
                    </button>
                    <button
                        class="bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-purple-700 flex items-center gap-2 text-sm font-medium">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                        Laporan Inventaris
                    </button>
                </div>
            </div>
            <hr>
            <div class="flex flex-wrap items-center justify-between gap-4">
                <div class="flex items-center gap-4">
                    <div>
                        <label for="kategori" class="text-sm text-gray-500">Kategori</label>
                        <select id="kategori"
                            class="w-full md:w-auto mt-1 border border-gray-300 rounded-lg py-2 px-3 bg-white text-gray-700 focus:outline-none text-sm">
                            <option>Semua Kategori</option>
                        </select>
                    </div>
                    <div>
                        <label for="status" class="text-sm text-gray-500">Status</label>
                        <select id="status"
                            class="w-full md:w-auto mt-1 border border-gray-300 rounded-lg py-2 px-3 bg-white text-gray-700 focus:outline-none text-sm">
                            <option>Semua Status</option>
                        </select>
                    </div>
                </div>
                <div class="relative">
                    <input type="text" placeholder="Cari perlengkapan..."
                        class="pl-10 pr-4 py-2 border border-gray-300 rounded-lg w-full md:w-64 focus:outline-none focus:ring-2 focus:ring-green-500">
                    <svg class="w-5 h-5 text-gray-400 absolute top-1/2 left-3 -translate-y-1/2"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
            </div>
        </div>

        <!-- Daftar Kartu Perlengkapan -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Kartu 1: Traktor Mini -->
            <div class="bg-white rounded-lg shadow-sm relative overflow-hidden">
                <div class="absolute top-2 right-2 text-xs font-semibold text-gray-800 bg-gray-200 px-2 py-1 rounded-full">
                    Tersedia</div>
                <div class="p-6">
                    <div class="h-32 bg-gray-100 rounded-lg flex items-center justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-gray-400" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-gray-800">Traktor Mini</h3>
                    <p class="text-sm text-gray-600 mt-1">Mesin pengolah tanah untuk lahan kecil hingga sedang.</p>
                    <div class="text-xs text-gray-500 mt-3">
                        <p>ID: <span class="font-medium text-gray-700">TRK-001</span></p>
                        <p>Lokasi: <span class="font-medium text-gray-700">Gudang Utama</span></p>
                    </div>
                </div>
                <div class="px-6 pb-4 flex justify-between items-center">
                    <div class="flex gap-2">
                        <button
                            class="bg-white border border-gray-300 text-gray-700 px-4 py-1.5 rounded-lg text-sm hover:bg-gray-50">Detail</button>
                        <button
                            class="bg-blue-600 text-white px-4 py-1.5 rounded-lg text-sm hover:bg-blue-700">Pinjam</button>
                    </div>
                    <button class="text-gray-400 hover:text-gray-600"><svg xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path
                                d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                        </svg></button>
                </div>
            </div>
            <!-- Kartu 2: Pompa Air -->
            <div class="bg-white rounded-lg shadow-sm relative overflow-hidden">
                <div class="absolute top-2 right-2 text-xs font-semibold text-blue-800 bg-blue-100 px-2 py-1 rounded-full">
                    Sedang Digunakan</div>
                <div class="p-6">
                    <div class="h-32 bg-gray-100 rounded-lg flex items-center justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-gray-400" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 6.253v11.494m-9-5.747h18M5.464 12.001a9 9 0 1113.072 0M5.464 12.001a9 9 0 1013.072 0" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-gray-800">Pompa Air</h3>
                    <p class="text-sm text-gray-600 mt-1">Pompa irigasi untuk pengairan lahan pertanian.</p>
                    <div class="text-xs text-gray-500 mt-3">
                        <p>ID: <span class="font-medium text-gray-700">PMP-002</span></p>
                        <p>Lokasi: <span class="font-medium text-gray-700">Lahan B2</span></p>
                    </div>
                </div>
                <div class="px-6 pb-4 flex justify-between items-center">
                    <div class="flex gap-2">
                        <button
                            class="bg-white border border-gray-300 text-gray-700 px-4 py-1.5 rounded-lg text-sm hover:bg-gray-50">Detail</button>
                    </div>
                    <button class="text-gray-400 hover:text-gray-600"><svg xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path
                                d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                        </svg></button>
                </div>
            </div>
            <!-- Kartu 3: Mesin Pemerah Susu -->
            <div class="bg-white rounded-lg shadow-sm relative overflow-hidden">
                <div
                    class="absolute top-2 right-2 text-xs font-semibold text-yellow-800 bg-yellow-100 px-2 py-1 rounded-full">
                    Dalam Perawatan</div>
                <div class="p-6">
                    <div class="h-32 bg-gray-100 rounded-lg flex items-center justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-gray-400" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M16 8v8m-3-5v5m-3-8v8m-3-5v5m-3-8v8m6-13h.01M4.93 4.93l-.01.01M2.25 12h.01M4.93 19.07l-.01-.01M12 21.75h.01M19.07 19.07l-.01-.01M21.75 12h.01M19.07 4.93l-.01.01" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-gray-800">Mesin Pemerah Susu</h3>
                    <p class="text-sm text-gray-600 mt-1">Alat untuk memerah susu sapi secara otomatis.</p>
                    <div class="text-xs text-gray-500 mt-3">
                        <p>ID: <span class="font-medium text-gray-700">MPS-003</span></p>
                        <p>Lokasi: <span class="font-medium text-gray-700">Bengkel</span></p>
                    </div>
                </div>
                <div class="px-6 pb-4 flex justify-between items-center">
                    <div class="flex gap-2">
                        <button
                            class="bg-white border border-gray-300 text-gray-700 px-4 py-1.5 rounded-lg text-sm hover:bg-gray-50">Detail</button>
                    </div>
                    <button class="text-gray-400 hover:text-gray-600"><svg xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path
                                d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                        </svg></button>
                </div>
            </div>
            <!-- Kartu 4: Sprayer Elektrik -->
            <div class="bg-white rounded-lg shadow-sm relative overflow-hidden">
                <div class="absolute top-2 right-2 text-xs font-semibold text-gray-800 bg-gray-200 px-2 py-1 rounded-full">
                    Tersedia</div>
                <div class="p-6">
                    <div class="h-32 bg-gray-100 rounded-lg flex items-center justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-gray-400" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M7 11.5V14m0-2.5v-6a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M14 4.5v15m0 0v-6a1.5 1.5 0 013 0v6m-3 0h-3m3 0h3" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-gray-800">Sprayer Elektrik</h3>
                    <p class="text-sm text-gray-600 mt-1">Alat semprot pestisida dan pupuk cair.</p>
                    <div class="text-xs text-gray-500 mt-3">
                        <p>ID: <span class="font-medium text-gray-700">SPR-004</span></p>
                        <p>Lokasi: <span class="font-medium text-gray-700">Gudang Utama</span></p>
                    </div>
                </div>
                <div class="px-6 pb-4 flex justify-between items-center">
                    <div class="flex gap-2">
                        <button
                            class="bg-white border border-gray-300 text-gray-700 px-4 py-1.5 rounded-lg text-sm hover:bg-gray-50">Detail</button>
                        <button
                            class="bg-blue-600 text-white px-4 py-1.5 rounded-lg text-sm hover:bg-blue-700">Pinjam</button>
                    </div>
                    <button class="text-gray-400 hover:text-gray-600"><svg xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path
                                d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                        </svg></button>
                </div>
            </div>
            <!-- Kartu 5: Inkubator Telur -->
            <div class="bg-white rounded-lg shadow-sm relative overflow-hidden">
                <div class="absolute top-2 right-2 text-xs font-semibold text-red-800 bg-red-100 px-2 py-1 rounded-full">
                    Rusak</div>
                <div class="p-6">
                    <div class="h-32 bg-gray-100 rounded-lg flex items-center justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-gray-400" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-gray-800">Inkubator Telur</h3>
                    <p class="text-sm text-gray-600 mt-1">Alat penetas telur otomatis dengan pengatur suhu.</p>
                    <div class="text-xs text-gray-500 mt-3">
                        <p>ID: <span class="font-medium text-gray-700">INK-005</span></p>
                        <p>Lokasi: <span class="font-medium text-gray-700">Gudang Belakang</span></p>
                    </div>
                </div>
                <div class="px-6 pb-4 flex justify-between items-center">
                    <div class="flex gap-2">
                        <button
                            class="bg-white border border-gray-300 text-gray-700 px-4 py-1.5 rounded-lg text-sm hover:bg-gray-50">Detail</button>
                        <button
                            class="bg-red-600 text-white px-4 py-1.5 rounded-lg text-sm hover:bg-red-700">Laporkan</button>
                    </div>
                    <button class="text-gray-400 hover:text-gray-600"><svg xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path
                                d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                        </svg></button>
                </div>
            </div>
            <!-- Kartu 6: Alat Pemotong Rumput -->
            <div class="bg-white rounded-lg shadow-sm relative overflow-hidden">
                <div class="absolute top-2 right-2 text-xs font-semibold text-gray-800 bg-gray-200 px-2 py-1 rounded-full">
                    Tersedia</div>
                <div class="p-6">
                    <div class="h-32 bg-gray-100 rounded-lg flex items-center justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-gray-400" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-gray-800">Alat Pemotong Rumput</h3>
                    <p class="text-sm text-gray-600 mt-1">Mesin pemotong rumput untuk perawatan lahan.</p>
                    <div class="text-xs text-gray-500 mt-3">
                        <p>ID: <span class="font-medium text-gray-700">PMT-006</span></p>
                        <p>Lokasi: <span class="font-medium text-gray-700">Gudang Utama</span></p>
                    </div>
                </div>
                <div class="px-6 pb-4 flex justify-between items-center">
                    <div class="flex gap-2">
                        <button
                            class="bg-white border border-gray-300 text-gray-700 px-4 py-1.5 rounded-lg text-sm hover:bg-gray-50">Detail</button>
                        <button
                            class="bg-blue-600 text-white px-4 py-1.5 rounded-lg text-sm hover:bg-blue-700">Pinjam</button>
                    </div>
                    <button class="text-gray-400 hover:text-gray-600"><svg xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path
                                d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                        </svg></button>
                </div>
            </div>
        </div>

        <!-- Paginasi -->
        <div class="flex flex-col md:flex-row justify-between items-center mt-6 text-sm">
            <p class="text-gray-700 mb-2 md:mb-0">
                Menampilkan <span class="font-semibold">1</span> sampai <span class="font-semibold">6</span> dari <span
                    class="font-semibold">24</span> perlengkapan
            </p>
            <nav class="flex items-center gap-1" aria-label="Pagination">
                <a href="#" class="p-2 text-gray-500 hover:bg-gray-100 rounded-md">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
                <a href="#" class="px-3 py-1 rounded-md font-medium bg-green-600 text-white">1</a>
                <a href="#" class="px-3 py-1 rounded-md font-medium text-gray-700 hover:bg-gray-100">2</a>
                <a href="#" class="px-3 py-1 rounded-md font-medium text-gray-700 hover:bg-gray-100">3</a>
                <a href="#" class="px-3 py-1 rounded-md font-medium text-gray-700 hover:bg-gray-100">4</a>
                <a href="#" class="p-2 text-gray-500 hover:bg-gray-100 rounded-md">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
            </nav>
        </div>
    </div>
@endsection
