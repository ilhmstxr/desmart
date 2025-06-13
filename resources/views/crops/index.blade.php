@extends('layout.app')

@section('content')
    <!-- Area Konten Halaman -->
    <div class="flex-1 p-6 overflow-y-auto">
        <!-- Kartu Ringkasan Atas -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Total Tanaman -->
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
                    <p class="text-2xl font-bold text-gray-800">245</p>
                </div>
            </div>
            <!-- Tanaman Sehat -->
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
                    <p class="text-2xl font-bold text-gray-800">210</p>
                </div>
            </div>
            <!-- Perlu Perhatian -->
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
                    <p class="text-2xl font-bold text-gray-800">35</p>
                </div>
            </div>
            <!-- Panen Bulan Ini -->
            <div class="bg-white p-4 rounded-lg shadow-sm flex items-center gap-4 border-l-4 border-purple-500">
                <div class="bg-purple-100 text-purple-600 p-3 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l-1.586-1.586a2 2 0 010-2.828L16 8M9 9l.01.01" />
                    </svg>
                </div>
                <div>
                    <p class="text-sm text-gray-500">Panen Bulan Ini</p>
                    <p class="text-2xl font-bold text-gray-800">2,450 kg</p>
                </div>
            </div>
        </div>

        <!-- Tombol Aksi dan Filter -->
        <div class="bg-white p-4 rounded-lg shadow-sm">
            <div class="flex flex-wrap items-center justify-between gap-4">
                <div class="flex items-center gap-2 flex-wrap">
                    <button
                        class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 flex items-center gap-2 text-sm font-medium">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path
                                d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                        </svg>
                        Tambah Tanaman
                    </button>
                    <button
                        class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 flex items-center gap-2 text-sm font-medium">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z" />
                            <path fill-rule="evenodd"
                                d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3z"
                                clip-rule="evenodd" />
                        </svg>
                        Catat Perawatan
                    </button>
                    <button
                        class="bg-yellow-500 text-white px-4 py-2 rounded-lg hover:bg-yellow-600 flex items-center gap-2 text-sm font-medium">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V4a2 2 0 00-2-2H6zm1 2a1 1 0 00-1 1v2a1 1 0 001 1h6a1 1 0 001-1V5a1 1 0 00-1-1H7z"
                                clip-rule="evenodd" />
                        </svg>
                        Catat Panen
                    </button>
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
            <div class="flex flex-wrap items-center justify-between gap-4 mt-4">
                <div class="flex items-center gap-4">
                    <div>
                        <label for="jenis-tanaman" class="text-sm text-gray-500">Jenis Tanaman</label>
                        <select id="jenis-tanaman"
                            class="w-full md:w-auto border border-gray-300 rounded-lg py-2 px-3 bg-white text-gray-700 focus:outline-none text-sm">
                            <option>Semua Jenis</option>
                            <option>Sayuran</option>
                            <option>Biji-bijian</option>
                        </select>
                    </div>
                    <div>
                        <label for="status-tanaman" class="text-sm text-gray-500">Status</label>
                        <select id="status-tanaman"
                            class="w-full md:w-auto border border-gray-300 rounded-lg py-2 px-3 bg-white text-gray-700 focus:outline-none text-sm">
                            <option>Semua Status</option>
                            <option>Sehat</option>
                            <option>Perlu Air</option>
                            <option>Siap Panen</option>
                        </select>
                    </div>
                </div>
                <div class="relative">
                    <input type="text" placeholder="Cari tanaman..."
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

        <!-- Daftar Kartu Tanaman -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Kartu 1 -->
            <div class="bg-white rounded-lg shadow-sm overflow-hidden">
                <div class="p-4 bg-green-50 border-b-2 border-green-200">
                    <div class="flex justify-between items-center">
                        <h3 class="font-bold text-gray-800">Tomat #TT02</h3>
                        <span class="text-xs font-semibold text-green-700 bg-green-200 px-2 py-1 rounded-full">Sehat</span>
                    </div>
                </div>
                <div class="p-4">
                    <div class="flex gap-4">
                        <div class="bg-gray-100 p-3 rounded-lg flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-green-600" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M5.636 18.364a9 9 0 010-12.728m12.728 0a9 9 0 010 12.728m-9.9-2.829a5 5 0 010-7.07m7.072 0a5 5 0 010 7.07M12 6v6h6" />
                            </svg>
                        </div>
                        <div class="grid grid-cols-2 gap-x-4 text-sm w-full">
                            <p class="text-gray-500">Jenis</p>
                            <p class="font-medium text-gray-800">Sayuran</p>
                            <p class="text-gray-500">Umur</p>
                            <p class="font-medium text-gray-800">45 hari</p>
                            <p class="text-gray-500">Area</p>
                            <p class="font-medium text-gray-800">Lahan A2</p>
                            <p class="text-gray-500">Estimasi</p>
                            <p class="font-medium text-gray-800">15 hari lagi</p>
                        </div>
                    </div>
                    <div class="flex justify-between items-center text-xs text-gray-500 mt-4 pt-4 border-t">
                        <p>Terakhir Disiram: <span class="font-medium text-gray-700">Hari ini</span></p>
                        <div class="flex gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-blue-500 cursor-pointer"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path
                                    d="M10 3.5a1.5 1.5 0 013 0V4a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-.5a1.5 1.5 0 000 3h.5a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 00-1-1v-.5a1.5 1.5 0 01-3 0V15a1 1 0 00-1-1H4a1 1 0 01-1-1v-3a1 1 0 011-1h.5a1.5 1.5 0 000-3H4a1 1 0 01-1-1V4a1 1 0 011-1h3a1 1 0 001-1v-.5z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-red-500 cursor-pointer"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Kartu 2 -->
            <div class="bg-white rounded-lg shadow-sm overflow-hidden">
                <div class="p-4 bg-yellow-50 border-b-2 border-yellow-200">
                    <div class="flex justify-between items-center">
                        <h3 class="font-bold text-gray-800">Cabai #C056</h3>
                        <span class="text-xs font-semibold text-yellow-700 bg-yellow-200 px-2 py-1 rounded-full">Perlu
                            Air</span>
                    </div>
                </div>
                <div class="p-4">
                    <div class="flex gap-4">
                        <div class="bg-gray-100 p-3 rounded-lg flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-yellow-600" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h6" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M17.657 17.657A9.957 9.957 0 0112 21a9.957 9.957 0 01-5.657-3.343m-2.828-2.828A9.957 9.957 0 019 3.043m2.828-2.828A9.957 9.957 0 0121 9" />
                            </svg>
                        </div>
                        <div class="grid grid-cols-2 gap-x-4 text-sm w-full">
                            <p class="text-gray-500">Jenis</p>
                            <p class="font-medium text-gray-800">Sayuran</p>
                            <p class="text-gray-500">Umur</p>
                            <p class="font-medium text-gray-800">60 hari</p>
                            <p class="text-gray-500">Area</p>
                            <p class="font-medium text-gray-800">Lahan B1</p>
                            <p class="text-gray-500">Estimasi</p>
                            <p class="font-medium text-gray-800">30 hari lagi</p>
                        </div>
                    </div>
                    <div class="flex justify-between items-center text-xs text-gray-500 mt-4 pt-4 border-t">
                        <p>Terakhir Disiram: <span class="font-medium text-gray-700">3 hari lalu</span></p>
                        <div class="flex gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-blue-500 cursor-pointer"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path
                                    d="M10 3.5a1.5 1.5 0 013 0V4a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-.5a1.5 1.5 0 000 3h.5a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 00-1-1v-.5a1.5 1.5 0 01-3 0V15a1 1 0 00-1-1H4a1 1 0 01-1-1v-3a1 1 0 011-1h.5a1.5 1.5 0 000-3H4a1 1 0 01-1-1V4a1 1 0 011-1h3a1 1 0 001-1v-.5z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-red-500 cursor-pointer"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Kartu 3 -->
            <div class="bg-white rounded-lg shadow-sm overflow-hidden">
                <div class="p-4 bg-blue-50 border-b-2 border-blue-200">
                    <div class="flex justify-between items-center">
                        <h3 class="font-bold text-gray-800">Jagung #J078</h3>
                        <span class="text-xs font-semibold text-blue-700 bg-blue-200 px-2 py-1 rounded-full">Siap
                            Panen</span>
                    </div>
                </div>
                <div class="p-4">
                    <div class="flex gap-4">
                        <div class="bg-gray-100 p-3 rounded-lg flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-blue-600" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div class="grid grid-cols-2 gap-x-4 text-sm w-full">
                            <p class="text-gray-500">Jenis</p>
                            <p class="font-medium text-gray-800">Biji-bijian</p>
                            <p class="text-gray-500">Umur</p>
                            <p class="font-medium text-gray-800">90 hari</p>
                            <p class="text-gray-500">Area</p>
                            <p class="font-medium text-gray-800">Lahan C3</p>
                            <p class="text-gray-500">Estimasi</p>
                            <p class="font-medium text-gray-800">Siap panen</p>
                        </div>
                    </div>
                    <div class="flex justify-between items-center text-xs text-gray-500 mt-4 pt-4 border-t">
                        <p>Terakhir Disiram: <span class="font-medium text-gray-700">Kemarin</span></p>
                        <div class="flex gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-blue-500 cursor-pointer"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path
                                    d="M10 3.5a1.5 1.5 0 013 0V4a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-.5a1.5 1.5 0 000 3h.5a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 00-1-1v-.5a1.5 1.5 0 01-3 0V15a1 1 0 00-1-1H4a1 1 0 01-1-1v-3a1 1 0 011-1h.5a1.5 1.5 0 000-3H4a1 1 0 01-1-1V4a1 1 0 011-1h3a1 1 0 001-1v-.5z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-red-500 cursor-pointer"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Paginasi -->
        <div class="flex justify-center items-center mt-6">
            <nav class="flex items-center gap-2" aria-label="Pagination">
                <a href="#" class="p-2 text-gray-500 hover:text-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
                <a href="#" class="px-3 py-1 rounded-md text-sm font-medium bg-green-600 text-white">1</a>
                <a href="#" class="px-3 py-1 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-200">2</a>
                <a href="#" class="px-3 py-1 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-200">3</a>
                <a href="#" class="p-2 text-gray-500 hover:text-gray-700">
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
