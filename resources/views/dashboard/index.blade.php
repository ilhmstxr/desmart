    @extends('layout.app')

    @section('content')
    {{-- <!-- Area Konten Halaman -->
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
                                <div class="bg-green-100 text-green-600 p-2 rounded-lg mr-4"><svg class="w-5 h-5" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
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
                                    <p class="text-xs text-blue-600 bg-blue-100 rounded-full px-2 py-0.5 inline-block mt-1">45
                                        Ekor</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="bg-yellow-100 text-yellow-600 p-2 rounded-lg mr-4"><svg class="w-5 h-5"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24"
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
        </script> --}}

    <div class="flex-1 p-6 overflow-y-auto">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Kolom Kiri & Tengah -->
            <div class="lg:col-span-2 space-y-6">
                <!-- Kartu Ringkasan -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-2">

                    <div class="bg-white p-4 rounded-lg shadow-sm flex items-center justify-between gap-4">
                        <div class="bg-green-100 text-green-600 p-2 rounded-lg">
                            {{-- Icon bisa disesuaikan --}}
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                </path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm text-gray-500">Total Pertanian</p>
                            <p class="text-2xl font-bold text-gray-800">{{ $summary['total_farms'] ?? 'N/A' }}</p>
                            <p
                                class="text-xs {{ ($summary['farm_change'] ?? 0) >= 0 ? 'text-green-500' : 'text-red-500' }} mt-1">
                                {{ ($summary['farm_change'] ?? 0) >= 0 ? '+' : '' }}{{ $summary['farm_change'] ?? 0 }}
                                dari bulan lalu
                            </p>
                        </div>
                        <div class="w-50 h-50 flex-shrink-0">
                            <canvas id="farmAreaDistributionChart"></canvas>
                        </div>
                    </div>

                    <!-- Hasil Panen -->
                    <div class="bg-white p-4 rounded-lg shadow-sm flex items-start justify-between">
                        <div>
                            <p class="text-sm text-gray-500">Hasil Panen</p>
                            <p class="text-2xl font-bold text-gray-800">
                                {{ number_format($summary['total_harvest'] ?? 0, 1) }} Ton
                            </p>
                            <p
                                class="text-xs {{ ($summary['harvest_change'] ?? 0) >= 0 ? 'text-green-500' : 'text-red-500' }} mt-1">
                                {{ ($summary['harvest_change'] ?? 0) >= 0 ? '+' : '' }}{{ $summary['harvest_change'] ?? 0 }}
                                Ton
                            </p>
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

                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-2">
                    {{-- prioritas --}}
                    <div class="bg-white p-6 rounded-xl shadow-lg col-span-1 md:col-span-2">
                        <div class="flex justify-between items-start">
                            <div>
                                <h3 class="text-lg font-semibold text-gray-800">Tugas Berdasarkan Prioritas</h3>
                                <p class="text-sm text-gray-500">Total Tugas Aktif: {{ $summary['total_tasks'] ?? 0 }}
                                </p>
                            </div>
                            <div class="bg-blue-100 text-blue-600 p-3 rounded-full">
                                <!-- Heroicon: Clipboard List -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                                </svg>
                            </div>
                        </div>
                        <!-- Container untuk canvas chart -->
                        <div class="mt-4 h-64">
                            <canvas id="taskPriorityChart"></canvas>
                        </div>
                    </div>
                    <!-- Pendapatan -->
                    <div class="bg-white p-4 rounded-lg shadow-sm flex items-start justify-between">
                        <div>
                            <p class="text-sm text-gray-500">Pendapatan</p>
                            <p class="text-2xl font-bold text-gray-800">Rp
                                {{ number_format($summary['total_revenue'] ?? 0, 0, ',', '.') }}
                            </p>
                            <p
                                class="text-xs {{ ($summary['revenue_change'] ?? 0) >= 0 ? 'text-green-500' : 'text-red-500' }} mt-1">
                                {{ ($summary['revenue_change'] ?? 0) >= 0 ? 'Rp ' : '-Rp ' }}{{ number_format(abs($summary['revenue_change'] ?? 0), 0, ',', '.') }}
                            </p>
                        </div>
                        <div class="bg-purple-100 text-purple-600 p-2 rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v.01" />
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Total Ternak -->
                {{-- <div class="bg-white p-4 rounded-lg shadow-sm flex items-start justify-between">
                            <div>
                                <p class="text-sm text-gray-500">Total Ternak</p>
                                <p class="text-2xl font-bold text-gray-800">{{ $summary['total_livestock'] ?? 'N/A' }} Ekor
                </p>
                <p
                    class="text-xs {{ ($summary['livestock_change'] ?? 0) >= 0 ? 'text-green-500' : 'text-red-500' }} mt-1">
                    {{ ($summary['livestock_change'] ?? 0) >= 0 ? '+' : '' }}{{ $summary['livestock_change'] ?? 0 }}
                    Ekor
                </p>
            </div>
            <div class="bg-blue-100 text-blue-600 p-2 rounded-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                </svg>
            </div>
        </div> --}}

        <!-- Cuaca & Peta Lahan -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <!-- Prakiraan Cuaca -->
            <div class="bg-white p-4 rounded-lg shadow-sm">
                <h3 class="font-semibold text-gray-800 mb-2">Prakiraan Cuaca</h3>
                <div class="bg-blue-500 text-white rounded-lg p-4 flex justify-between items-center bg-cover">
                    <div>
                        <p class="text-sm">{{ $weather['location'] ?? 'N/A' }}</p>
                        <p class="text-4xl font-bold">{{ $weather['temperature'] ?? 'N/A' }}°C</p>
                        <p class="text-sm">{{ $weather['condition'] ?? 'N/A' }}</p>
                    </div>
                    <div class="space-y-2 text-center text-sm">
                        @foreach ($weather['forecast'] ?? [] as $forecast)
                        <div>
                            <p>{{ $forecast['day'] }}</p>
                            <p>{{ $forecast['temp'] }}°C</p>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- Peta Lahan -->
            <div class="bg-white p-4 rounded-lg shadow-sm">
                <div class="flex justify-between items-center mb-2">
                    <h3 class="font-semibold text-gray-800">Peta Lahan</h3>
                    <a href="{{-- route('fields.index') --}}" class="text-sm text-blue-600 hover:underline">Lihat
                        Detail</a>
                </div>
                <div class="aspect-w-16 aspect-h-9 bg-gray-200 rounded-lg flex items-center justify-center">
                    <p class="text-gray-500">Peta akan ditampilkan di sini</p>
                </div>
            </div>
        </div>

        <!-- Statistik Hasil Panen -->
        <div class="bg-white p-4 rounded-lg shadow-sm">
            <h3 class="font-semibold text-gray-800 mb-4">Statistik Hasil Panen (6 Bulan Terakhir)</h3>
            <div class="h-64">
                <canvas id="harvestChart"></canvas>
            </div>
        </div>
    </div>

    <!-- Kolom Kanan -->
    <div class="lg:col-span-1 space-y-6">
        <!-- Aktivitas Mendatang -->
        <div class="bg-white p-4 rounded-lg shadow-sm">
            <div class="flex justify-between items-center mb-4">
                <h3 class="font-semibold text-gray-800">Aktivitas Mendatang</h3>
                <a href="{{ route('schedules.index') }}" class="text-sm text-blue-600 hover:underline">Lihat
                    Semua</a>
            </div>
            <div class="space-y-4">
                @forelse ($upcomingSchedules as $schedule)
                <div class="flex items-start">
                    <div class="bg-green-100 text-green-600 p-2 rounded-lg mr-4"><svg class="w-5 h-5"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                            </path>
                        </svg></div>
                    <div>
                        <p class="font-medium text-sm">{{ $schedule->title }}</p>
                        <p class="text-xs text-gray-500"
                            title="{{ $schedule->scheduled_at->format('d M Y, H:i') }}">
                            {{ $schedule->scheduled_at->diffForHumans() }}
                        </p>
                        <p class="text-xs text-gray-500 font-semibold mt-1">Ditugaskan:
                            {{ $schedule->assignedTo->name ?? 'N/A' }}
                        </p>
                    </div>
                </div>
                @empty
                <p class="text-sm text-gray-500 text-center">Tidak ada aktivitas mendatang.</p>
                @endforelse
            </div>
        </div>

        <!-- Status Perlengkapan -->
        <div class="bg-white p-4 rounded-lg shadow-sm">
            <div class="flex justify-between items-center mb-4">
                <h3 class="font-semibold text-gray-800">Status Perlengkapan</h3>
                <a href="{{-- route('supplies.index') --}}" class="text-sm text-blue-600 hover:underline">Kelola</a>
            </div>
            <div class="space-y-3">
                @forelse ($suppliesStatus as $supply)
                <div>
                    <div class="flex justify-between text-sm mb-1">
                        <p>{{ $supply->name }}</p>
                        <p class="text-gray-500">{{ $supply->percentage }}%</p>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-1.5">
                        <div class="bg-green-500 h-1.5 rounded-full"
                            style="width: {{ $supply->percentage }}%"></div>
                    </div>
                </div>
                @empty
                <p class="text-sm text-gray-500 text-center">Data perlengkapan tidak tersedia.</p>
                @endforelse
            </div>
        </div>

        <!-- Harga Pasar -->
        <div class="bg-white p-4 rounded-lg shadow-sm">
            <div class="flex justify-between items-center mb-4">
                <h3 class="font-semibold text-gray-800">Harga Pasar</h3>
                <a href="#" class="text-sm text-blue-600 hover:underline">Lihat Pasar</a>
            </div>
            <ul class="space-y-3">
                @forelse ($marketPrices as $price)
                <li class="flex justify-between items-center">
                    <div class="flex items-center">
                        <span class="w-2 h-2 rounded-full mr-3 {{ $price->trend_color }}"></span>
                        <p class="text-sm">{{ $price->commodity_name }}</p>
                    </div>
                    <div>
                        <p class="text-sm font-medium">Rp
                            {{ number_format($price->price, 0, ',', '.') }}/kg
                        </p>
                        <p class="text-xs {{ $price->trend_color }} text-right">
                            {{ $price->trend_percentage > 0 ? '+' : '' }}{{ $price->trend_percentage }}%
                        </p>
                    </div>
                </li>
                @empty
                <p class="text-sm text-gray-500 text-center">Data harga tidak tersedia.</p>
                @endforelse
            </ul>
        </div>
    </div>
    </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // DATA FARMS
            const farmsData = @json($farmsData ?? []);

            // 2. Mempersiapkan data untuk Chart.js
            const labels = farmsData.map(farm => farm.name);
            const data = farmsData.map(farm => farm.total_area);

            // 3. Merender Chart jika ada data
            if (data.length > 0) {
                const ctx = document.getElementById('farmAreaDistributionChart').getContext('2d');
                const farmChart = new Chart(ctx, {
                    type: 'pie', // Menggunakan tipe 'pie' untuk chart lingkaran
                    data: {
                        labels: labels,
                        datasets: [{
                            label: 'Luas Lahan (ha)',
                            data: data,
                            backgroundColor: [
                                'rgba(52, 211, 153, 0.9)',
                                'rgba(96, 165, 250, 0.9)',
                                'rgba(251, 191, 36, 0.9)',
                                'rgba(248, 113, 113, 0.9)',
                                'rgba(167, 139, 250, 0.9)',
                                'rgba(251, 146, 60, 0.9)'
                            ],
                            borderColor: '#ffffff',
                            borderWidth: 1.5
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false, // Penting agar chart bisa mengisi divnya
                        plugins: {
                            // Menonaktifkan legenda dan tooltip agar chart tetap bersih di ruang yang kecil
                            legend: {
                                display: false
                            },
                            tooltip: {
                                enabled: true, // Anda bisa set ke `true` jika ingin tooltip tetap ada
                                callbacks: {
                                    label: function(context) {
                                        return ` ${context.label}: ${context.raw.toLocaleString()} ha`;
                                    }
                                }
                            }
                        }
                    }
                });
            }


            // DATA PRIORITAS SCHEDLES
            const taskPriorityData = @json($taskPriorityData ?? ['urgent' => 0, 'medium' => 0, 'low' => 0]);

            // 2. Mempersiapkan data untuk format yang dibutuhkan Chart.js
            const taskLabels = ['Urgent', 'Medium', 'Low'];
            const taskDataPoints = [
                taskPriorityData.urgent,
                taskPriorityData.medium,
                taskPriorityData.low
            ];

            // 3. Merender Bar Chart jika elemen canvas ditemukan
            const ctx = document.getElementById('taskPriorityChart');
            if (ctx) {
                new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: taskLabels,
                        datasets: [{
                            label: 'Jumlah Tugas',
                            data: taskDataPoints,
                            backgroundColor: [
                                'rgba(239, 68, 68, 0.7)', // Merah untuk Urgent
                                'rgba(245, 158, 11, 0.7)', // Oranye untuk Medium
                                'rgba(34, 197, 94, 0.7)' // Hijau untuk Low
                            ],
                            borderColor: [
                                'rgb(239, 68, 68)',
                                'rgb(245, 158, 11)',
                                'rgb(34, 197, 94)'
                            ],
                            borderWidth: 1,
                            borderRadius: 5,
                            barThickness: 40
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        scales: {
                            y: {
                                beginAtZero: true,
                                ticks: {
                                    // Memastikan sumbu Y hanya menampilkan bilangan bulat
                                    stepSize: 1
                                }
                            },
                            x: {
                                grid: {
                                    display: false // Menghilangkan grid vertikal agar lebih bersih
                                }
                            }
                        },
                        plugins: {
                            // Menyembunyikan legenda karena label di bawah sudah cukup jelas
                            legend: {
                                display: false
                            },
                            tooltip: {
                                backgroundColor: '#1f2937', // gray-800
                                titleFont: {
                                    size: 14,
                                    weight: 'bold'
                                },
                                bodyFont: {
                                    size: 12
                                },
                                displayColors: false, // Tidak menampilkan kotak warna di tooltip
                                callbacks: {
                                    label: function(context) {
                                        return `Jumlah: ${context.raw}`;
                                    }
                                }
                            }
                        }
                    }
                });
            }

            // Bar Chart untuk Statistik Panen
            const harvestChartCtx = document.getElementById('harvestChart');
            const harvestChartData = @json($harvestChartData ?? null);
            if (harvestChartCtx && harvestChartData && harvestChartData.labels.length > 0) {
                new Chart(harvestChartCtx.getContext('2d'), {
                    type: 'bar',
                    data: harvestChartData,
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        plugins: {
                            legend: {
                                position: 'top',
                                align: 'end',
                                labels: {
                                    usePointStyle: true,
                                    boxWidth: 8
                                }
                            }
                        },
                        scales: {
                            y: {
                                beginAtZero: true
                            },
                            x: {
                                grid: {
                                    display: false
                                }
                            }
                        }
                    }
                });
            } else if (harvestChartCtx) {
                const ctx = harvestChartCtx.getContext('2d');
                ctx.textAlign = 'center';
                ctx.textBaseline = 'middle';
                ctx.font = '14px "Inter", sans-serif';
                ctx.fillStyle = '#9ca3af';
                ctx.fillText('Data Panen Belum Tersedia', harvestChartCtx.width / 2, harvestChartCtx.height / 2);
            }
        });
    </script>
    @endsection