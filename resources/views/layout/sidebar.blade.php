        <!-- === Sidebar === -->
        <aside class="w-64 flex-shrink-0 bg-[#1E4D45] text-white flex flex-col">
            <!-- Logo -->
            <div class="h-16 flex items-center justify-center px-4 border-b border-gray-700">
                <h1 class="text-2xl font-bold">DeSmart</h1>
            </div>

            <!-- Menu Navigasi -->
            <nav class="flex-1 px-4 py-6 space-y-2">
                <a href="{{ route('dashboard.index') }}" class="flex items-center px-4 py-2.5 bg-[#2A655A] rounded-lg text-sm font-semibold">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                        </path>
                    </svg>
                    Dashboard
                </a>
                <a href="{{ route('fields.index') }}"
                    class="flex items-center px-4 py-2.5 hover:bg-[#2A655A] rounded-lg text-sm font-medium text-gray-300 hover:text-white transition-colors">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l5.447 2.724A1 1 0 0021 16.382V5.618a1 1 0 00-1.447-.894L15 7m-6 13v-6-3m6 3V7m-6 6h6">
                        </path>
                    </svg>
                    Pemetaan Lahan
                </a>
                <a href="{{ route('crops.index') }}"
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
                <a href="{{ route('schedules.index') }}"
                    class="flex items-center px-4 py-2.5 hover:bg-[#2A655A] rounded-lg text-sm font-medium text-gray-300 hover:text-white transition-colors">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                        </path>
                    </svg>
                    Penjadwalan
                </a>
                <a href="{{ route('tools.index') }}"
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

                <a href="{{ route('finances.index') }}"
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
