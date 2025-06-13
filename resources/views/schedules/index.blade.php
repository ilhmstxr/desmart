@extends('layout.app')

@section('content')
    <!-- Area Konten Halaman -->
    <div class="p-6 space-y-6">
        <!-- Header Halaman dan Aksi -->
        <div class="flex flex-wrap items-center justify-between gap-4">
            <div>
                <h2 class="text-2xl font-bold text-gray-800">Jadwal & Pengingat</h2>
            </div>
            <div class="flex items-center gap-2 flex-wrap">
                <button
                    class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 flex items-center gap-2 text-sm font-medium">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                            clip-rule="evenodd" />
                    </svg>
                    Tambah Jadwal
                </button>
                <button
                    class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 flex items-center gap-2 text-sm font-medium">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path
                            d="M10 2a6 6 0 100 12 6 6 0 000-12zm0 10a4 4 0 110-8 4 4 0 010 8zm-1-4a1 1 0 10-2 0v1a1 1 0 102 0v-1zM10 8a1 1 0 011-1h1a1 1 0 110 2h-1a1 1 0 01-1-1z" />
                    </svg>
                    Atur Pengingat
                </button>
                <button
                    class="bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-purple-700 flex items-center gap-2 text-sm font-medium">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                    Lihat Laporan
                </button>
            </div>
        </div>

        <!-- Kalender -->
        <div class="bg-white rounded-lg shadow-sm p-6">
            <!-- Header Kalender dan Filter -->
            <div class="flex flex-wrap items-center justify-between gap-4 mb-4">
                <div class="flex items-center gap-4">
                    <div>
                        <label for="kategori" class="text-sm text-gray-500">Kategori</label>
                        <select id="kategori"
                            class="w-full md:w-auto mt-1 border border-gray-300 rounded-lg py-2 px-3 bg-white text-gray-700 focus:outline-none text-sm">
                            <option>Semua Kategori</option>
                        </select>
                    </div>
                    <div>
                        <label for="bulan" class="text-sm text-gray-500">Bulan</label>
                        <select id="bulan"
                            class="w-full md:w-auto mt-1 border border-gray-300 rounded-lg py-2 px-3 bg-white text-gray-700 focus:outline-none text-sm">
                            <option>Agustus</option>
                        </select>
                    </div>
                </div>
                <div class="flex items-center gap-1 bg-gray-100 p-1 rounded-lg">
                    <button class="px-3 py-1 text-sm rounded-md text-gray-600 hover:bg-white flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                        </svg>
                        Daftar
                    </button>
                    <button
                        class="px-3 py-1 text-sm rounded-md bg-white text-green-600 font-semibold shadow-sm flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        Kalender
                    </button>
                </div>
            </div>

            <!-- Body Kalender -->
            <div>
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-lg font-semibold text-gray-800">Agustus 2023</h3>
                    <div class="flex items-center gap-2">
                        <button class="p-1.5 text-gray-500 hover:bg-gray-100 rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                        <button class="p-1.5 text-gray-500 hover:bg-gray-100 rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="calendar-grid text-sm">
                    <!-- Day Headers -->
                    <div class="text-center font-semibold text-gray-600 py-2">Min</div>
                    <div class="text-center font-semibold text-gray-600 py-2">Sen</div>
                    <div class="text-center font-semibold text-gray-600 py-2">Sel</div>
                    <div class="text-center font-semibold text-gray-600 py-2">Rab</div>
                    <div class="text-center font-semibold text-gray-600 py-2">Kam</div>
                    <div class="text-center font-semibold text-gray-600 py-2">Jum</div>
                    <div class="text-center font-semibold text-gray-600 py-2">Sab</div>

                    <!-- Dates -->
                    <div class="border p-2 text-gray-400">30</div>
                    <div class="border p-2 text-gray-400">31</div>
                    <div class="border p-2">1<div class="text-xs mt-1 p-1 bg-blue-100 text-blue-800 rounded">Vaksinasi
                            Ternak</div>
                    </div>
                    <div class="border p-2">2</div>
                    <div class="border p-2">3<div class="text-xs mt-1 p-1 bg-teal-100 text-teal-800 rounded">Penyiraman
                        </div>
                    </div>
                    <div class="border p-2">4</div>
                    <div class="border p-2">5</div>
                    <div class="border p-2">6</div>
                    <div class="border p-2">7<div class="text-xs mt-1 p-1 bg-pink-100 text-pink-800 rounded">Pemupukan</div>
                    </div>
                    <div class="border p-2">8</div>
                    <div class="border p-2">9</div>
                    <div class="border p-2">10<div class="text-xs mt-1 p-1 bg-yellow-100 text-yellow-800 rounded">Panen
                            Jagung</div>
                        <div class="text-xs mt-1 p-1 bg-red-100 text-red-800 rounded">Cek Kesehatan</div>
                    </div>
                    <div class="border p-2">11</div>
                    <div class="border p-2">12</div>
                    <div class="border p-2">13</div>
                    <div class="border p-2">14<div class="text-xs mt-1 p-1 bg-indigo-100 text-indigo-800 rounded">
                            Pembayaran</div>
                    </div>
                    <div class="border p-2">15</div>
                    <div class="border p-2">16</div>
                    <div class="border p-2">17<div class="text-xs mt-1 p-1 bg-teal-100 text-teal-800 rounded">Penyiraman
                        </div>
                    </div>
                    <div class="border p-2">18</div>
                    <div class="border p-2">19</div>
                    <div class="border p-2">20<div class="text-xs mt-1 p-1 bg-blue-100 text-blue-800 rounded">Vaksinasi
                            Ternak</div>
                    </div>
                    <div class="border p-2">21</div>
                    <div class="border p-2">22</div>
                    <div class="border p-2">23</div>
                    <div class="border p-2">24<div class="text-xs mt-1 p-1 bg-pink-100 text-pink-800 rounded">Pemupukan
                        </div>
                    </div>
                    <div class="border p-2">25</div>
                    <div class="border p-2">26</div>
                    <div class="border p-2">27</div>
                    <div class="border p-2">28<div class="text-xs mt-1 p-1 bg-yellow-100 text-yellow-800 rounded">Panen
                            Tomat</div>
                    </div>
                    <div class="border p-2">29</div>
                    <div class="border p-2">30</div>
                    <div class="border p-2">31<div class="text-xs mt-1 p-1 bg-teal-100 text-teal-800 rounded">Penyiraman
                        </div>
                    </div>
                    <div class="border p-2 text-gray-400">1</div>
                    <div class="border p-2 text-gray-400">2</div>
                </div>
            </div>
        </div>

        <!-- Jadwal Mendatang -->
        <div class="rounded-lg shadow-sm overflow-hidden">
            <div class="bg-green-600 text-white p-4">
                <h3 class="font-semibold">Jadwal Mendatang</h3>
            </div>
            <div class="bg-white divide-y">
                <!-- Item Jadwal -->
                <div class="p-4 flex items-center justify-between">
                    <div class="flex items-center gap-4">
                        <div class="text-yellow-500"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg></div>
                        <div>
                            <p class="font-medium text-gray-800">Panen Jagung</p>
                            <p class="text-sm text-gray-500">Lahan C3 - Hari ini, 10:00</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3">
                        <button class="text-green-500 hover:text-green-700"><svg xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd" />
                            </svg></button>
                        <button class="text-red-500 hover:text-red-700"><svg xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                    clip-rule="evenodd" />
                            </svg></button>
                    </div>
                </div>
                <!-- Item Jadwal -->
                <div class="p-4 flex items-center justify-between">
                    <div class="flex items-center gap-4">
                        <div class="text-red-500"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg></div>
                        <div>
                            <p class="font-medium text-gray-800">Cek Kesehatan Ternak</p>
                            <p class="text-sm text-gray-500">Kandang B - Hari ini, 14:00</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3">
                        <button class="text-green-500 hover:text-green-700"><svg xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd" />
                            </svg></button>
                        <button class="text-red-500 hover:text-red-700"><svg xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                    clip-rule="evenodd" />
                            </svg></button>
                    </div>
                </div>
                <!-- Item Jadwal -->
                <div class="p-4 flex items-center justify-between">
                    <div class="flex items-center gap-4">
                        <div class="text-indigo-500"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg></div>
                        <div>
                            <p class="font-medium text-gray-800">Pembayaran Supplier Pakan</p>
                            <p class="text-sm text-gray-500">14 Agustus 2023</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3">
                        <button class="text-green-500 hover:text-green-700"><svg xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd" />
                            </svg></button>
                        <button class="text-red-500 hover:text-red-700"><svg xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                    clip-rule="evenodd" />
                            </svg></button>
                    </div>
                </div>
                <!-- Item Jadwal -->
                <div class="p-4 flex items-center justify-between">
                    <div class="flex items-center gap-4">
                        <div class="text-teal-500"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg></div>
                        <div>
                            <p class="font-medium text-gray-800">Penyiraman Tanaman</p>
                            <p class="text-sm text-gray-500">17 Agustus 2023</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3">
                        <button class="text-green-500 hover:text-green-700"><svg xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd" />
                            </svg></button>
                        <button class="text-red-500 hover:text-red-700"><svg xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                    clip-rule="evenodd" />
                            </svg></button>
                    </div>
                </div>
                <!-- Item Jadwal -->
                <div class="p-4 flex items-center justify-between">
                    <div class="flex items-center gap-4">
                        <div class="text-pink-500"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg></div>
                        <div>
                            <p class="font-medium text-gray-800">Pemupukan Tanaman</p>
                            <p class="text-sm text-gray-500">24 Agustus 2023</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3">
                        <button class="text-green-500 hover:text-green-700"><svg xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd" />
                            </svg></button>
                        <button class="text-red-500 hover:text-red-700"><svg xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                    clip-rule="evenodd" />
                            </svg></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .calendar-grid {
            display: grid;
            grid-template-columns: repeat(7, minmax(0, 1fr));
        }
    </style>
@endsection
