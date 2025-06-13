 @extends('layout.app')

 @section('content')
     <!-- Area Konten Halaman -->
     <div class="flex-1 p-6 overflow-y-auto">
         <!-- Tombol Aksi dan Filter -->
         <div class="flex flex-wrap items-center justify-between gap-4">
             <div class="flex items-center gap-4">
                 <button
                     class="bg-green-600 text-white px-4 py-2 rounded-lg shadow-sm hover:bg-green-700 flex items-center gap-2 text-sm font-medium">
                     <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                         <path fill-rule="evenodd"
                             d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                             clip-rule="evenodd" />
                     </svg>
                     Tambah Lahan Baru
                 </button>
                 <button
                     class="bg-white border border-gray-300 text-gray-700 px-4 py-2 rounded-lg shadow-sm hover:bg-gray-50 flex items-center gap-2 text-sm font-medium">
                     <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor" stroke-width="2">
                         <path stroke-linecap="round" stroke-linejoin="round"
                             d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
                     </svg>
                     Ekspor Data
                 </button>
             </div>
             <div class="flex items-center gap-4">
                 <div class="relative">
                     <input type="text" placeholder="Cari lahan..."
                         class="pl-10 pr-4 py-2 border border-gray-300 rounded-lg w-64 focus:outline-none focus:ring-2 focus:ring-green-500">
                     <svg class="w-5 h-5 text-gray-400 absolute top-1/2 left-3 -translate-y-1/2"
                         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                         stroke-width="2">
                         <path stroke-linecap="round" stroke-linejoin="round"
                             d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                     </svg>
                 </div>
                 <select class="border border-gray-300 rounded-lg py-2 px-4 bg-white text-gray-700 focus:outline-none">
                     <option>Semua Jenis</option>
                     <option>Sawah</option>
                     <option>Kebun</option>
                     <option>Kolam</option>
                     <option>Kandang</option>
                 </select>
             </div>
         </div>

         <!-- Konten Utama: Peta dan Daftar Lahan -->
         <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
             <!-- Kolom Kiri: Peta -->
             <div class="lg:col-span-2 bg-white p-4 rounded-lg shadow-sm">
                 <div class="flex justify-between items-center mb-4">
                     <h3 class="text-lg font-semibold text-gray-800">Peta Lahan</h3>
                     <div class="flex items-center gap-1 bg-gray-100 p-1 rounded-lg">
                         <button class="px-3 py-1 text-sm rounded-md text-gray-600 hover:bg-white">Peta</button>
                         <button class="px-3 py-1 text-sm rounded-md text-gray-600 hover:bg-white">Satelit</button>
                         <button
                             class="px-3 py-1 text-sm rounded-md bg-white text-green-600 font-semibold shadow-sm">Hybrid</button>
                     </div>
                 </div>
                 <div class="relative h-[450px] lg:h-[calc(100%-120px)] bg-gray-200 rounded-lg">
                     <!-- Placeholder untuk Peta -->
                     <img src="https://placehold.co/800x600/e2e8f0/4a5568?text=Contoh+Peta+Lahan" alt="Peta Lahan"
                         class="w-full h-full object-cover rounded-lg">
                 </div>
                 <div class="flex items-center gap-4 mt-4 text-sm text-gray-600">
                     <a href="#" class="flex items-center gap-2 hover:text-green-600">
                         <span class="w-3 h-3 bg-gray-400 rounded-full"></span> Lihat Semua
                     </a>
                     <a href="#" class="flex items-center gap-2 hover:text-green-600">
                         <span class="w-3 h-3 bg-blue-500 rounded-full"></span> Sawah
                     </a>
                     <a href="#" class="flex items-center gap-2 hover:text-green-600">
                         <span class="w-3 h-3 bg-green-500 rounded-full"></span> Kebun
                     </a>
                     <a href="#" class="flex items-center gap-2 hover:text-green-600">
                         <span class="w-3 h-3 bg-cyan-500 rounded-full"></span> Kolam
                     </a>
                     <a href="#" class="flex items-center gap-2 hover:text-green-600">
                         <span class="w-3 h-3 bg-red-500 rounded-full"></span> Kandang
                     </a>
                 </div>
             </div>

             <!-- Kolom Kanan: Daftar & Cuaca -->
             <div class="space-y-6">
                 <!-- Daftar Lahan -->
                 <div class="bg-white p-4 rounded-lg shadow-sm h-full max-h-[400px] lg:max-h-none lg:h-auto flex flex-col">
                     <h3 class="text-lg font-semibold text-gray-800 mb-4">Daftar Lahan</h3>
                     <div class="flex-1 space-y-4 overflow-y-auto pr-2">
                         <!-- Item Lahan 1 -->
                         <div class="border-b pb-3">
                             <div class="flex justify-between items-start">
                                 <h4 class="font-semibold text-gray-700">Sawah Blok A</h4>
                                 <span
                                     class="text-xs font-semibold text-green-600 bg-green-100 px-2 py-0.5 rounded-full">Aktif</span>
                             </div>
                             <p class="text-xs text-gray-500">Desa Sukamaju, Kec. Cianjur</p>
                             <div class="grid grid-cols-2 gap-x-4 gap-y-1 mt-2 text-sm">
                                 <p class="text-gray-500">Luas</p>
                                 <p class="text-gray-800 font-medium">1.5 Ha</p>
                                 <p class="text-gray-500">Tanaman</p>
                                 <p class="text-gray-800 font-medium">Padi IR64</p>
                                 <p class="text-gray-500">Tgl Tanam</p>
                                 <p class="text-gray-800 font-medium">10 Mar 2023</p>
                                 <p class="text-gray-500">Perkiraan Panen</p>
                                 <p class="text-gray-800 font-medium">20 Jun 2023</p>
                             </div>
                         </div>
                         <!-- Item Lahan 2 -->
                         <div class="border-b pb-3">
                             <div class="flex justify-between items-start">
                                 <h4 class="font-semibold text-gray-700">Kebun Blok B</h4>
                                 <span
                                     class="text-xs font-semibold text-green-600 bg-green-100 px-2 py-0.5 rounded-full">Aktif</span>
                             </div>
                             <p class="text-xs text-gray-500">Desa Sukamaju, Kec. Cianjur</p>
                             <div class="grid grid-cols-2 gap-x-4 gap-y-1 mt-2 text-sm">
                                 <p class="text-gray-500">Luas</p>
                                 <p class="text-gray-800 font-medium">0.8 Ha</p>
                                 <p class="text-gray-500">Tanaman</p>
                                 <p class="text-gray-800 font-medium">Jagung Manis</p>
                                 <p class="text-gray-500">Tgl Tanam</p>
                                 <p class="text-gray-800 font-medium">5 Apr 2023</p>
                                 <p class="text-gray-500">Perkiraan Panen</p>
                                 <p class="text-gray-800 font-medium">15 Jul 2023</p>
                             </div>
                         </div>
                         <!-- Item Lahan 3 -->
                         <div class="border-b pb-3">
                             <div class="flex justify-between items-start">
                                 <h4 class="font-semibold text-gray-700">Kolam Ikan</h4>
                                 <span
                                     class="text-xs font-semibold text-green-600 bg-green-100 px-2 py-0.5 rounded-full">Aktif</span>
                             </div>
                             <p class="text-xs text-gray-500">Desa Sukamaju, Kec. Cianjur</p>
                             <div class="grid grid-cols-2 gap-x-4 gap-y-1 mt-2 text-sm">
                                 <p class="text-gray-500">Luas</p>
                                 <p class="text-gray-800 font-medium">0.3 Ha</p>
                                 <p class="text-gray-500">Jenis</p>
                                 <p class="text-gray-800 font-medium">Ikan Lele</p>
                                 <p class="text-gray-500">Tgl Tebar</p>
                                 <p class="text-gray-800 font-medium">20 Feb 2023</p>
                                 <p class="text-gray-500">Perkiraan Panen</p>
                                 <p class="text-gray-800 font-medium">5 Jun 2023</p>
                             </div>
                         </div>
                         <!-- Item Lahan 4 -->
                         <div>
                             <div class="flex justify-between items-start">
                                 <h4 class="font-semibold text-gray-700">Kandang Ayam</h4>
                                 <span
                                     class="text-xs font-semibold text-green-600 bg-green-100 px-2 py-0.5 rounded-full">Aktif</span>
                             </div>
                             <p class="text-xs text-gray-500">Desa Sukamaju, Kec. Cianjur</p>
                             <div class="grid grid-cols-2 gap-x-4 gap-y-1 mt-2 text-sm">
                                 <p class="text-gray-500">Luas</p>
                                 <p class="text-gray-800 font-medium">0.2 Ha</p>
                                 <p class="text-gray-500">Jenis</p>
                                 <p class="text-gray-800 font-medium">Ayam Broiler</p>
                                 <p class="text-gray-500">Jumlah</p>
                                 <p class="text-gray-800 font-medium">500 Ekor</p>
                                 <p class="text-gray-500">Perkiraan Panen</p>
                                 <p class="text-gray-800 font-medium">10 Jun 2023</p>
                             </div>
                         </div>
                     </div>
                     <a href="#" class="text-sm text-green-600 hover:underline text-center mt-4 font-medium">Lihat
                         Semua Lahan</a>
                 </div>

                 <!-- Prakiraan Cuaca -->
                 <div class="bg-white p-4 rounded-lg shadow-sm">
                     <h3 class="text-lg font-semibold text-gray-800 mb-2">Prakiraan Cuaca</h3>
                     <div class="flex items-center justify-between mb-4">
                         <div>
                             <p class="text-xs text-gray-500">Hari Ini</p>
                             <p class="text-3xl font-bold text-gray-800">28°C</p>
                             <p class="text-sm text-gray-600">Cerah Berawan</p>
                         </div>
                         <svg class="w-12 h-12 text-yellow-400" xmlns="http://www.w3.org/2000/svg" fill="none"
                             viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                             <path stroke-linecap="round" stroke-linejoin="round"
                                 d="M2.25 15a4.5 4.5 0 004.5 4.5H18a3.75 3.75 0 001.332-7.257 3 3 0 00-2.433-2.433c-.586-.097-1.168-.14-1.751-.14a4.5 4.5 0 00-4.5 4.5 3.75 3.75 0 00-1.332 7.257H2.25z" />
                         </svg>
                     </div>
                     <div class="flex justify-around text-center text-sm">
                         <div>
                             <p class="text-gray-500">Selasa</p>
                             <svg class="w-6 h-6 mx-auto text-blue-500 my-1" xmlns="http://www.w3.org/2000/svg"
                                 fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round"
                                     d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" />
                             </svg>
                             <p class="font-medium">29°C</p>
                         </div>
                         <div>
                             <p class="text-gray-500">Rabu</p>
                             <svg class="w-6 h-6 mx-auto text-blue-500 my-1" xmlns="http://www.w3.org/2000/svg"
                                 fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round"
                                     d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" />
                             </svg>
                             <p class="font-medium">30°C</p>
                         </div>
                         <div>
                             <p class="text-gray-500">Kamis</p>
                             <svg class="w-6 h-6 mx-auto text-yellow-400 my-1" xmlns="http://www.w3.org/2000/svg"
                                 fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round"
                                     d="M2.25 15a4.5 4.5 0 004.5 4.5H18a3.75 3.75 0 001.332-7.257 3 3 0 00-2.433-2.433c-.586-.097-1.168-.14-1.751-.14a4.5 4.5 0 00-4.5 4.5 3.75 3.75 0 00-1.332 7.257H2.25z" />
                             </svg>
                             <p class="font-medium">28°C</p>
                         </div>
                         <div>
                             <p class="text-gray-500">Jumat</p>
                             <svg class="w-6 h-6 mx-auto text-yellow-400 my-1" xmlns="http://www.w3.org/2000/svg"
                                 fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round"
                                     d="M2.25 15a4.5 4.5 0 004.5 4.5H18a3.75 3.75 0 001.332-7.257 3 3 0 00-2.433-2.433c-.586-.097-1.168-.14-1.751-.14a4.5 4.5 0 00-4.5 4.5 3.75 3.75 0 00-1.332 7.257H2.25z" />
                             </svg>
                             <p class="font-medium">27°C</p>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 @endsection
