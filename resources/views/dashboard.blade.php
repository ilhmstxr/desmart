<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgriTech Dashboard</title>
    <!-- Memuat Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Memuat Font Inter dari Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        /* Menggunakan font Inter sebagai default */
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-50">
    <div class="flex h-screen">
        <!-- === Sidebar === -->
        <aside class="w-64 flex-shrink-0 bg-[#1E4D45] text-white flex flex-col">
            <!-- Logo -->
            <div class="h-16 flex items-center justify-center px-4 border-b border-gray-700">
                <h1 class="text-2xl font-bold">AgriTech</h1>
            </div>

            <!-- Menu Navigasi -->
            <nav class="flex-1 px-4 py-6 space-y-2">
                <a href="#" class="flex items-center px-4 py-2.5 bg-[#2A655A] rounded-lg text-sm font-semibold">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                        </path>
                    </svg>
                    Dashboard
                </a>
                <a href="#"
                    class="flex items-center px-4 py-2.5 hover:bg-[#2A655A] rounded-lg text-sm font-medium text-gray-300 hover:text-white transition-colors">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l5.447 2.724A1 1 0 0021 16.382V5.618a1 1 0 00-1.447-.894L15 7m-6 13v-6-3m6 3V7m-6 6h6">
                        </path>
                    </svg>
                    Pemetaan Lahan
                </a>
                <a href="#"
                    class="flex items-center px-4 py-2.5 hover:bg-[#2A655A] rounded-lg text-sm font-medium text-gray-300 hover:text-white transition-colors">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                        </path>
                    </svg>
                    Manajemen Tanaman
                </a>
                <a href="#"
                    class="flex items-center px-4 py-2.5 hover:bg-[#2A655A] rounded-lg text-sm font-medium text-gray-300 hover:text-white transition-colors">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm0 2c-2.21 0-4 1.79-4 4v1h8v-1c0-2.21-1.79-4-4-4z">
                        </path>
                    </svg>
                    Manajemen Ternak
                </a>
                <a href="#"
                    class="flex items-center px-4 py-2.5 hover:bg-[#2A655A] rounded-lg text-sm font-medium text-gray-300 hover:text-white transition-colors">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                        </path>
                    </svg>
                    Penjadwalan
                </a>
                <a href="#"
                    class="flex items-center px-4 py-2.5 hover:bg-[#2A655A] rounded-lg text-sm font-medium text-gray-300 hover:text-white transition-colors">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                        </path>
                    </svg>
                    Perlengkapan
                </a>

                <div class="pt-4">
                    <p class="px-4 text-xs font-semibold text-gray-400 uppercase">Keuangan & Pasar</p>
                </div>

                <a href="#"
                    class="flex items-center px-4 py-2.5 mt-2 hover:bg-[#2A655A] rounded-lg text-sm font-medium text-gray-300 hover:text-white transition-colors">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z">
                        </path>
                    </svg>
                    Keuangan
                </a>
                <a href="#"
                    class="flex items-center px-4 py-2.5 hover:bg-[#2A655A] rounded-lg text-sm font-medium text-gray-300 hover:text-white transition-colors">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z">
                        </path>
                    </svg>
                    Pasar
                </a>
            </nav>

            <div class="p-4 border-t border-gray-700 mt-auto">
                <div class="flex items-center">
                    <div
                        class="w-10 h-10 rounded-full bg-green-700 flex items-center justify-center font-bold text-white">
                        BP
                    </div>
                    <div class="ml-3">
                        <p class="text-sm font-semibold">Budi Petani</p>
                        <p class="text-xs text-gray-400">Akun Premium</p>
                    </div>
                </div>
            </div>
        </aside>

        <!-- === Konten Utama === -->
        <main class="flex-1 flex flex-col overflow-hidden">
            <!-- === Appbar / Header === -->
            <header
                class="h-16 bg-white border-b border-gray-200 flex-shrink-0 flex items-center justify-between px-6">
                <div>
                    <h2 class="text-xl font-bold text-gray-800">Dashboard</h2>
                    <p class="text-sm text-gray-500">Senin, 15 Mei 2023</p>
                </div>

                <div class="flex items-center space-x-5">
                    <button class="relative text-gray-600 hover:text-gray-800 focus:outline-none">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9">
                            </path>
                        </svg>
                        <span class="absolute top-0 right-0 h-2 w-2 bg-red-500 rounded-full"></span>
                    </button>
                    <button class="text-gray-600 hover:text-gray-800 focus:outline-none">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z">
                            </path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </button>
                    <div class="w-9 h-9 rounded-full bg-gray-200">
                        <img src="https://placehold.co/36x36/E2E8F0/4A5568?text=U" alt="User Avatar"
                            class="rounded-full">
                    </div>
                </div>
            </header>

            <!-- Area Konten Halaman -->
            <div class="flex-1 p-6 overflow-y-auto">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                    <!-- Kolom Kiri & Tengah -->
                    <div class="lg:col-span-2 space-y-6">
                        <!-- Kartu Ringkasan -->
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                            <!-- Total Lahan -->
                            <div class="bg-white p-4 rounded-lg shadow-sm flex items-start justify-between">
                                <div>
                                    <p class="text-sm text-gray-500">Total Lahan</p>
                                    <p class="text-2xl font-bold text-gray-800">5.2 Ha</p>
                                    <p class="text-xs text-green-500 mt-1">+0.5 Ha dari bulan lalu</p>
                                </div>
                                <div class="bg-green-100 text-green-600 p-2 rounded-lg">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4.871 14.893l3.637-3.637a1 1 0 011.414 0l2.586 2.586a1 1 0 001.414 0l4.343-4.343m2.122 2.121l-2.121-2.121">
                                        </path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                </div>
                            </div>
                            <!-- Total Ternak -->
                            <div class="bg-white p-4 rounded-lg shadow-sm flex items-start justify-between">
                                <div>
                                    <p class="text-sm text-gray-500">Total Ternak</p>
                                    <p class="text-2xl font-bold text-gray-800">124 Ekor</p>
                                    <p class="text-xs text-green-500 mt-1">+12 Ekor dari bulan lalu</p>
                                </div>
                                <div class="bg-blue-100 text-blue-600 p-2 rounded-lg">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                                        <path
                                            d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-5.998 12.078 12.078 0 01.665-6.479L12 14z">
                                        </path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 14l9-5-9-5-9 5 9 5z"></path>
                                    </svg>
                                </div>
                            </div>
                            <!-- Hasil Panen -->
                            <div class="bg-white p-4 rounded-lg shadow-sm flex items-start justify-between">
                                <div>
                                    <p class="text-sm text-gray-500">Hasil Panen</p>
                                    <p class="text-2xl font-bold text-gray-800">2.4 Ton</p>
                                    <p class="text-xs text-green-500 mt-1">+0.2 Ton dari bulan lalu</p>
                                </div>
                                <div class="bg-yellow-100 text-yellow-600 p-2 rounded-lg">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M20 12V8a2 2 0 00-2-2H6a2 2 0 00-2 2v4m16 0v4a2 2 0 01-2 2H6a2 2 0 01-2-2v-4m16 0l-8 5-8-5">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                            <!-- Pendapatan -->
                            <div class="bg-white p-4 rounded-lg shadow-sm flex items-start justify-between">
                                <div>
                                    <p class="text-sm text-gray-500">Pendapatan</p>
                                    <p class="text-2xl font-bold text-gray-800">Rp 24.5 Jt</p>
                                    <p class="text-xs text-red-500 mt-1">-1.2 Jt dari bulan lalu</p>
                                </div>
                                <div class="bg-purple-100 text-purple-600 p-2 rounded-lg">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 8c2.21 0 4 1.79 4 4s-1.79 4-4 4-4-1.79-4-4 1.79-4 4-4zm0 0v-2m0 12v2m-8-6h2m12 0h2">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <!-- Cuaca & Peta Lahan -->
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                            <!-- Prakiraan Cuaca -->
                            <div class="bg-white p-4 rounded-lg shadow-sm">
                                <h3 class="font-semibold text-gray-800 mb-2">Prakiraan Cuaca</h3>
                                <div class="bg-blue-500 text-white rounded-lg p-4 flex justify-between items-center bg-cover"
                                    style="background-image: url('https://placehold.co/600x400/3B82F6/FFFFFF?text=')">
                                    <div>
                                        <p class="text-sm">Kecamatan Sukorejo</p>
                                        <p class="text-4xl font-bold">28°C</p>
                                        <p class="text-sm">Cerah Berawan</p>
                                    </div>
                                    <div class="space-y-2 text-center text-sm">
                                        <div>
                                            <p>Selasa</p>
                                            <p>29°C</p>
                                        </div>
                                        <div>
                                            <p>Rabu</p>
                                            <p>30°C</p>
                                        </div>
                                        <div>
                                            <p>Kamis</p>
                                            <p>28°C</p>
                                        </div>
                                        <div>
                                            <p>Jumat</p>
                                            <p>27°C</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Peta Lahan -->
                            <div class="bg-white p-4 rounded-lg shadow-sm">
                                <div class="flex justify-between items-center mb-2">
                                    <h3 class="font-semibold text-gray-800">Peta Lahan</h3>
                                    <a href="#" class="text-sm text-blue-600 hover:underline">Lihat Detail</a>
                                </div>
                                <div class="grid grid-cols-2 gap-2">
                                    <div class="bg-green-200 h-20 rounded-lg"></div>
                                    <div
                                        class="bg-yellow-200 h-20 rounded-lg flex items-center justify-center text-sm text-gray-600">
                                        Perkiraan: 1.2 Ton</div>
                                    <div
                                        class="bg-blue-200 h-20 rounded-lg flex flex-col items-center justify-center text-xs text-gray-700">
                                        <p>Padi</p>
                                        <p>Jagung</p>
                                        <p>Kolam</p>
                                    </div>
                                    <div class="bg-gray-200 h-20 rounded-lg"></div>
                                </div>
                            </div>
                        </div>

                        <!-- Statistik Hasil Panen -->
                        <div class="bg-white p-4 rounded-lg shadow-sm">
                            <h3 class="font-semibold text-gray-800 mb-4">Statistik Hasil Panen</h3>
                            <canvas id="harvestChart" height="120"></canvas>
                        </div>
                    </div>

                    <!-- Kolom Kanan -->
                    <div class="lg:col-span-1 space-y-6">
                        <!-- Aktivitas Mendatang -->
                        <div class="bg-white p-4 rounded-lg shadow-sm">
                            <div class="flex justify-between items-center mb-4">
                                <h3 class="font-semibold text-gray-800">Aktivitas Mendatang</h3>
                                <a href="#" class="text-sm text-blue-600 hover:underline">Lihat Semua</a>
                            </div>
                            <div class="space-y-4">
                                <div class="flex items-start">
                                    <div class="bg-green-100 text-green-600 p-2 rounded-lg mr-4"><svg class="w-5 h-5"
                                            fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.24a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 008 10.172V5L7 4z">
                                            </path>
                                        </svg></div>
                                    <div>
                                        <p class="font-medium text-sm">Panen Padi Blok A</p>
                                        <p class="text-xs text-gray-500">Kamis, 18 Mei 2023</p>
                                        <p class="text-xs text-gray-500 font-semibold mt-1">Perkiraan: 1.2 Ton</p>
                                    </div>
                                </div>
                                <div class="flex items-start">
                                    <div class="bg-blue-100 text-blue-600 p-2 rounded-lg mr-4"><svg class="w-5 h-5"
                                            fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M8 3H5a2 2 0 00-2 2v3m18 0V5a2 2 0 00-2-2h-3m0 18h3a2 2 0 002-2v-3M3 16v3a2 2 0 002 2h3">
                                            </path>
                                        </svg></div>
                                    <div>
                                        <p class="font-medium text-sm">Vaksinasi Ternak</p>
                                        <p class="text-xs text-gray-500">Kamis, 18 Mei 2023</p>
                                        <p
                                            class="text-xs text-blue-600 bg-blue-100 rounded-full px-2 py-0.5 inline-block mt-1">
                                            45 Ekor</p>
                                    </div>
                                </div>
                                <div class="flex items-start">
                                    <div class="bg-yellow-100 text-yellow-600 p-2 rounded-lg mr-4"><svg
                                            class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                            </path>
                                        </svg></div>
                                    <div>
                                        <p class="font-medium text-sm">Pengiriman Pupuk</p>
                                        <p class="text-xs text-gray-500">Jumat, 19 Mei 2023</p>
                                        <p
                                            class="text-xs text-yellow-700 bg-yellow-100 rounded-full px-2 py-0.5 inline-block mt-1">
                                            200 Kg</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Status Perlengkapan -->
                        <div class="bg-white p-4 rounded-lg shadow-sm">
                            <div class="flex justify-between items-center mb-4">
                                <h3 class="font-semibold text-gray-800">Status Perlengkapan</h3>
                                <a href="#" class="text-sm text-blue-600 hover:underline">Kelola</a>
                            </div>
                            <div class="space-y-3">
                                <div>
                                    <div class="flex justify-between text-sm mb-1">
                                        <p>Pupuk NPK</p>
                                        <p class="text-gray-500">75%</p>
                                    </div>
                                    <div class="w-full bg-gray-200 rounded-full h-1.5">
                                        <div class="bg-green-500 h-1.5 rounded-full" style="width: 75%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between text-sm mb-1">
                                        <p>Pakan Ternak</p>
                                        <p class="text-gray-500">45%</p>
                                    </div>
                                    <div class="w-full bg-gray-200 rounded-full h-1.5">
                                        <div class="bg-yellow-500 h-1.5 rounded-full" style="width: 45%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between text-sm mb-1">
                                        <p>Obat Hama</p>
                                        <p class="text-gray-500">20%</p>
                                    </div>
                                    <div class="w-full bg-gray-200 rounded-full h-1.5">
                                        <div class="bg-red-500 h-1.5 rounded-full" style="width: 20%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between text-sm mb-1">
                                        <p>Bibit Padi</p>
                                        <p class="text-gray-500">90%</p>
                                    </div>
                                    <div class="w-full bg-gray-200 rounded-full h-1.5">
                                        <div class="bg-blue-500 h-1.5 rounded-full" style="width: 90%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Harga Pasar -->
                        <div class="bg-white p-4 rounded-lg shadow-sm">
                            <div class="flex justify-between items-center mb-4">
                                <h3 class="font-semibold text-gray-800">Harga Pasar</h3>
                                <a href="#" class="text-sm text-blue-600 hover:underline">Lihat Pasar</a>
                            </div>
                            <ul class="space-y-3">
                                <li class="flex justify-between items-center">
                                    <div class="flex items-center">
                                        <span class="w-2 h-2 rounded-full bg-red-500 mr-3"></span>
                                        <p class="text-sm">Beras</p>
                                    </div>
                                    <div>
                                        <p class="text-sm font-medium">Rp 12.500/kg</p>
                                        <p class="text-xs text-green-500 text-right">+ 2.4%</p>
                                    </div>
                                </li>
                                <li class="flex justify-between items-center">
                                    <div class="flex items-center">
                                        <span class="w-2 h-2 rounded-full bg-yellow-500 mr-3"></span>
                                        <p class="text-sm">Jagung</p>
                                    </div>
                                    <div>
                                        <p class="text-sm font-medium">Rp 8.200/kg</p>
                                        <p class="text-xs text-red-500 text-right">- 1.1%</p>
                                    </div>
                                </li>
                                <li class="flex justify-between items-center">
                                    <div class="flex items-center">
                                        <span class="w-2 h-2 rounded-full bg-red-500 mr-3"></span>
                                        <p class="text-sm">Tomat</p>
                                    </div>
                                    <div>
                                        <p class="text-sm font-medium">Rp 15.000/kg</p>
                                        <p class="text-xs text-gray-500 text-right">+ 0%</p>
                                    </div>
                                </li>
                                <li class="flex justify-between items-center">
                                    <div class="flex items-center">
                                        <span class="w-2 h-2 rounded-full bg-green-500 mr-3"></span>
                                        <p class="text-sm">Sayur Hijau</p>
                                    </div>
                                    <div>
                                        <p class="text-sm font-medium">Rp 9.800/kg</p>
                                        <p class="text-xs text-green-500 text-right">+ 0.8%</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script>
        const ctx = document.getElementById('harvestChart');

        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun'],
                datasets: [{
                        label: 'Padi (ton)',
                        data: [0.8, 0.4, 1.4, 0.4, 1.6, 1.2],
                        backgroundColor: '#4ade80',
                        borderRadius: 4
                    },
                    {
                        label: 'Jagung (ton)',
                        data: [0.5, 0.6, 0.3, 1.0, 0.5, 0.8],
                        backgroundColor: '#facc15',
                        borderRadius: 4
                    },
                    {
                        label: 'Sayuran (ton)',
                        data: [0.2, 0.3, 0.2, 0.2, 0.3, 0.2],
                        backgroundColor: '#60a5fa',
                        borderRadius: 4
                    }
                ]
            },
            options: {
                plugins: {
                    legend: {
                        position: 'top',
                        align: 'end',
                        labels: {
                            usePointStyle: true,
                            boxWidth: 8,
                        }
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: {
                            drawOnChartArea: false,
                            drawBorder: false,
                        },
                        ticks: {
                            stepSize: 0.2
                        }
                    },
                    x: {
                        grid: {
                            display: false,
                        }
                    }
                }
            }
        });
    </script>
</body>

</html>
