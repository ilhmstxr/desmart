@extends('layout.app')
@section('content')
    <div class="p-4 sm:p-6 lg:p-8 space-y-6">
        <!-- Header Halaman -->
        <div class="flex flex-wrap items-center justify-between gap-4">
            <div>
                <h1 class="text-3xl font-bold text-gray-800">Laporan Jadwal</h1>
                <p class="mt-1 text-gray-600">Pantau dan analisa semua jadwal kegiatan pertanian & peternakan Anda.</p>
            </div>
            <div class="flex items-center gap-2">
                <select
                    class="border border-gray-300 rounded-lg py-2 px-3 bg-white text-gray-700 focus:outline-none text-sm">
                    <option>Bulan Ini</option>
                    <option>Bulan Lalu</option>
                    <option>Tahun Ini</option>
                </select>
                <button class="p-2 bg-white border border-gray-300 rounded-lg text-gray-600 hover:bg-gray-50">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M4 2a1 1 0 011 1v2.101a7.002 7.002 0 0111.601 2.566 1 1 0 11-1.885.666A5.002 5.002 0 005.999 7H9a1 1 0 110 2H4a1 1 0 01-1-1V4a1 1 0 011-1zm10 15a1 1 0 01-1-1v-2.101a7.002 7.002 0 01-11.601-2.566 1 1 0 011.885-.666A5.002 5.002 0 0014.001 13H11a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 01-1 1z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
                <button
                    class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 flex items-center gap-2 text-sm font-medium">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M5 4v3H4a2 2 0 00-2 2v3a2 2 0 002 2h1v2a2 2 0 002 2h6a2 2 0 002-2v-2h1a2 2 0 002-2V9a2 2 0 00-2-2h-1V4a2 2 0 00-2-2H7a2 2 0 00-2 2zm8 0H7v3h6V4zm0 8H7v4h6v-4z"
                            clip-rule="evenodd" />
                    </svg>
                    Cetak Laporan
                </button>
            </div>
        </div>

        <!-- Kartu Statistik -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-white p-5 rounded-lg shadow-sm">
                <p class="text-sm text-gray-500">Jadwal Dibuat</p>
                <p class="text-3xl font-bold text-gray-800 mt-2">124</p>
            </div>
            <div class="bg-white p-5 rounded-lg shadow-sm">
                <p class="text-sm text-gray-500">Jadwal Selesai</p>
                <p class="text-3xl font-bold text-gray-800 mt-2">97</p>
                <p class="text-xs text-green-600">+5% dari bulan lalu</p>
            </div>
            <div class="bg-white p-5 rounded-lg shadow-sm">
                <p class="text-sm text-gray-500">Terlambat Dikerjakan</p>
                <p class="text-3xl font-bold text-gray-800 mt-2">18</p>
                <p class="text-xs text-yellow-600">-2% dari bulan lalu</p>
            </div>
            <div class="bg-white p-5 rounded-lg shadow-sm">
                <p class="text-sm text-gray-500">Gagal Dikerjakan</p>
                <p class="text-3xl font-bold text-gray-800 mt-2">9</p>
            </div>
        </div>

        <!-- Grafik -->
        <div class="grid grid-cols-1 lg:grid-cols-5 gap-6">
            <div class="lg:col-span-3 bg-white p-6 rounded-lg shadow-sm">
                <h3 class="font-semibold text-gray-800 mb-4">Penyelesaian Jadwal</h3>
                <canvas id="completionChart"></canvas>
            </div>
            <div class="lg:col-span-2 bg-white p-6 rounded-lg shadow-sm">
                <h3 class="font-semibold text-gray-800 mb-4">Distribusi Kategori</h3>
                <canvas id="categoryChart"></canvas>
            </div>
        </div>

        <!-- Daftar Jadwal -->
        <div class="bg-white p-6 rounded-lg shadow-sm">
            <div class="flex flex-wrap items-center justify-between gap-4 mb-4">
                <h3 class="text-lg font-semibold text-gray-800">Daftar Jadwal</h3>
                <div class="flex items-center gap-4">
                    <select
                        class="border border-gray-300 rounded-lg py-2 px-3 bg-white text-gray-700 focus:outline-none text-sm">
                        <option>Semua Kategori</option>
                    </select>
                    <select
                        class="border border-gray-300 rounded-lg py-2 px-3 bg-white text-gray-700 focus:outline-none text-sm">
                        <option>Semua Status</option>
                    </select>
                </div>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3">Jadwal</th>
                            <th scope="col" class="px-6 py-3">Kategori & Lokasi</th>
                            <th scope="col" class="px-6 py-3">Tanggal</th>
                            <th scope="col" class="px-6 py-3">Status</th>
                            <th scope="col" class="px-6 py-3">Ditugaskan Kepada</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b">
                            <td class="px-6 py-4 font-medium text-gray-900">Memberi Makan Ayam</td>
                            <td class="px-6 py-4">Peternakan<p class="text-xs">Kandang Ayam</p>
                            </td>
                            <td class="px-6 py-4">15 Mei 2025<p class="text-xs">Selesai: 15 Mei 2025</p>
                            </td>
                            <td class="px-6 py-4"><span
                                    class="text-xs font-semibold text-green-800 bg-green-100 px-2 py-1 rounded-full">Selesai</span>
                            </td>
                            <td class="px-6 py-4">Agus Purnomo</td>
                        </tr>
                        <tr class="bg-white border-b">
                            <td class="px-6 py-4 font-medium text-gray-900">Panen Padi Blok B</td>
                            <td class="px-6 py-4">Pertanian<p class="text-xs">Lahan Blok B</p>
                            </td>
                            <td class="px-6 py-4">20 Mei 2025<p class="text-xs">Selesai: 21 Mei 2025</p>
                            </td>
                            <td class="px-6 py-4"><span
                                    class="text-xs font-semibold text-yellow-800 bg-yellow-100 px-2 py-1 rounded-full">Terlambat</span>
                            </td>
                            <td class="px-6 py-4">Agus Purnomo</td>
                        </tr>
                        <tr class="bg-white border-b">
                            <td class="px-6 py-4 font-medium text-gray-900">Mengantar Telur</td>
                            <td class="px-6 py-4">Pemasaran<p class="text-xs">Pasar Induk</p>
                            </td>
                            <td class="px-6 py-4">25 Mei 2025<p class="text-xs">Selesai: -</p>
                            </td>
                            <td class="px-6 py-4"><span
                                    class="text-xs font-semibold text-red-800 bg-red-100 px-2 py-1 rounded-full">Dibatalkan</span>
                            </td>
                            <td class="px-6 py-4">Siti Wulandari</td>
                        </tr>
                        <tr class="bg-white">
                            <td class="px-6 py-4 font-medium text-gray-900">Perbaikan Pagar</td>
                            <td class="px-6 py-4">Perawatan<p class="text-xs">Kandang Sapi</p>
                            </td>
                            <td class="px-6 py-4">10 Mei 2025<p class="text-xs">Selesai: 11 Mei 2025</p>
                            </td>
                            <td class="px-6 py-4"><span
                                    class="text-xs font-semibold text-blue-800 bg-blue-100 px-2 py-1 rounded-full">Tepat
                                    Waktu</span></td>
                            <td class="px-6 py-4">Yohanes</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Jadwal Mendatang -->
        <div class="bg-white p-6 rounded-lg shadow-sm">
            <h3 class="text-lg font-semibold text-gray-800 mb-4">Jadwal Mendatang</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <div class="p-4 bg-gray-50 rounded-lg">
                    <p class="font-medium text-gray-800">Penyemprotan Tanaman Cabai</p>
                    <p class="text-sm text-gray-500">20 Juni 2025 - 08:00</p>
                    <span
                        class="text-xs font-semibold text-blue-800 bg-blue-100 px-2 py-0.5 rounded-full mt-2 inline-block">Pertanian</span>
                </div>
                <div class="p-4 bg-gray-50 rounded-lg">
                    <p class="font-medium text-gray-800">Vaksinasi Ayam</p>
                    <p class="text-sm text-gray-500">21 Juni 2025 - 09:30</p>
                    <span
                        class="text-xs font-semibold text-orange-800 bg-orange-100 px-2 py-0.5 rounded-full mt-2 inline-block">Peternakan</span>
                </div>
                <div class="p-4 bg-gray-50 rounded-lg">
                    <p class="font-medium text-gray-800">Pembersihan Saluran Irigasi</p>
                    <p class="text-sm text-gray-500">22 Juni 2025 - 10:00</p>
                    <span
                        class="text-xs font-semibold text-blue-800 bg-blue-100 px-2 py-0.5 rounded-full mt-2 inline-block">Pertanian</span>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Data dan Konfigurasi untuk Grafik Penyelesaian Jadwal (Line Chart)
        const completionCtx = document.getElementById('completionChart').getContext('2d');
        new Chart(completionCtx, {
            type: 'line',
            data: {
                labels: ['1 Mei', '5 Mei', '10 Mei', '15 Mei', '20 Mei', '25 Mei', '30 Mei'],
                datasets: [{
                    label: 'Jadwal Selesai',
                    data: [10, 15, 25, 40, 55, 70, 97],
                    borderColor: 'rgb(34, 197, 94)',
                    backgroundColor: 'rgba(34, 197, 94, 0.1)',
                    fill: true,
                    tension: 0.4
                }, {
                    label: 'Jadwal Terlambat',
                    data: [2, 3, 5, 6, 9, 12, 18],
                    borderColor: 'rgb(234, 179, 8)',
                    backgroundColor: 'rgba(234, 179, 8, 0.1)',
                    fill: true,
                    tension: 0.4
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top'
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        // Data dan Konfigurasi untuk Grafik Distribusi Kategori (Doughnut Chart)
        const categoryCtx = document.getElementById('categoryChart').getContext('2d');
        new Chart(categoryCtx, {
            type: 'doughnut',
            data: {
                labels: ['Pertanian', 'Peternakan', 'Pemasaran', 'Perawatan'],
                datasets: [{
                    label: 'Distribusi Kategori',
                    data: [60, 45, 12, 7],
                    backgroundColor: [
                        'rgb(34, 197, 94)',
                        'rgb(234, 179, 8)',
                        'rgb(59, 130, 246)',
                        'rgb(168, 85, 247)'
                    ],
                    hoverOffset: 4
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'bottom',
                        labels: {
                            padding: 20
                        }
                    }
                }
            }
        });
    </script>
@endsection
