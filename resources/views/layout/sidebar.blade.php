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
    <style>
        /* Menggunakan font Inter sebagai default */
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-100">
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
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                    Dashboard
                </a>
                <a href="#" class="flex items-center px-4 py-2.5 hover:bg-[#2A655A] rounded-lg text-sm font-medium text-gray-300 hover:text-white transition-colors">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l5.447 2.724A1 1 0 0021 16.382V5.618a1 1 0 00-1.447-.894L15 7m-6 13v- உண்மையில் 6-3m6 3V7m-6 6h6"></path></svg>
                    Pemetaan Lahan
                </a>
                <a href="#" class="flex items-center px-4 py-2.5 hover:bg-[#2A655A] rounded-lg text-sm font-medium text-gray-300 hover:text-white transition-colors">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    Manajemen Tanaman
                </a>
                <a href="#" class="flex items-center px-4 py-2.5 hover:bg-[#2A655A] rounded-lg text-sm font-medium text-gray-300 hover:text-white transition-colors">
                     <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm0 2c-2.21 0-4 1.79-4 4v1h8v-1c0-2.21-1.79-4-4-4z"></path></svg>
                    Manajemen Ternak
                </a>
                <a href="#" class="flex items-center px-4 py-2.5 hover:bg-[#2A655A] rounded-lg text-sm font-medium text-gray-300 hover:text-white transition-colors">
                     <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    Penjadwalan
                </a>
                <a href="#" class="flex items-center px-4 py-2.5 hover:bg-[#2A655A] rounded-lg text-sm font-medium text-gray-300 hover:text-white transition-colors">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                    Perlengkapan
                </a>
                
                <!-- Separator Keuangan & Pasar -->
                <div class="pt-4">
                    <p class="px-4 text-xs font-semibold text-gray-400 uppercase">Keuangan & Pasar</p>
                </div>
                
                <a href="#" class="flex items-center px-4 py-2.5 mt-2 hover:bg-[#2A655A] rounded-lg text-sm font-medium text-gray-300 hover:text-white transition-colors">
                   <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    Keuangan
                </a>
                 <a href="#" class="flex items-center px-4 py-2.5 hover:bg-[#2A655A] rounded-lg text-sm font-medium text-gray-300 hover:text-white transition-colors">
                   <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    Pasar
                </a>
            </nav>

            <!-- Profil Pengguna -->
            <div class="p-4 border-t border-gray-700">
                <div class="flex items-center">
                    <div class="w-10 h-10 rounded-full bg-green-700 flex items-center justify-center font-bold text-white">
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
            <header class="h-16 bg-white border-b border-gray-200 flex items-center justify-between px-6">
                <!-- Judul Halaman -->
                <div>
                    <h2 class="text-xl font-bold text-gray-800">Dashboard</h2>
                    <p class="text-sm text-gray-500">Senin, 15 Mei 2023</p>
                </div>
                
                <!-- Ikon Kanan -->
                <div class="flex items-center space-x-5">
                    <button class="relative text-gray-600 hover:text-gray-800 focus:outline-none">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg>
                        <span class="absolute top-0 right-0 h-2 w-2 bg-red-500 rounded-full"></span>
                    </button>
                    <button class="text-gray-600 hover:text-gray-800 focus:outline-none">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    </button>
                    <div class="w-9 h-9 rounded-full bg-gray-200">
                        <img src="https://placehold.co/36x36/E2E8F0/4A5568?text=U" alt="User Avatar" class="rounded-full">
                    </div>
                </div>
            </header>
            
            <!-- Area Konten Halaman -->
            <div class="flex-1 p-6 overflow-y-auto">
                <div class="flex items-center justify-center h-full border-2 border-dashed border-gray-300 rounded-lg">
                    <p class="text-gray-500">Konten dasbor akan ditampilkan di sini.</p>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
