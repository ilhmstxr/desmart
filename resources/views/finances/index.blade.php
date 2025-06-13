@extends('layout.app')

@section('content')
    {{-- versi 1 --}}
    {{-- <div class="p-8">
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-900">Financial Management</h1>
        <p class="text-gray-600">Track revenue, expenses, and marketplace performance</p>
    </div>

    <!-- Financial Overview Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-600">Total Revenue</p>
                    <p class="text-3xl font-bold text-green-600">${{ number_format($totalRevenue, 2) }}</p>
                </div>
                <div class="p-3 bg-green-100 rounded-full">
                    <svg class="h-6 w-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                    </svg>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-600">Total Expenses</p>
                    <p class="text-3xl font-bold text-red-600">${{ number_format($totalExpenses, 2) }}</p>
                </div>
                <div class="p-3 bg-red-100 rounded-full">
                    <svg class="h-6 w-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-600">Net Profit</p>
                    <p class="text-3xl font-bold {{ $netProfit >= 0 ? 'text-green-600' : 'text-red-600' }}">
                        ${{ number_format($netProfit, 2) }}
                    </p>
                </div>
                <div class="p-3 {{ $netProfit >= 0 ? 'bg-green-100' : 'bg-red-100' }} rounded-full">
                    <svg class="h-6 w-6 {{ $netProfit >= 0 ? 'text-green-600' : 'text-red-600' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                    </svg>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-600">Pending Sales</p>
                    <p class="text-3xl font-bold text-yellow-600">{{ $pendingSales }}</p>
                </div>
                <div class="p-3 bg-yellow-100 rounded-full">
                    <svg class="h-6 w-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Actions -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-8">
        <a href="{{ route('products.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white p-4 rounded-lg flex items-center justify-center gap-2 transition-colors">
            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
            </svg>
            Add Product
        </a>
        <a href="{{ route('marketplace.create') }}" class="bg-green-600 hover:bg-green-700 text-white p-4 rounded-lg flex items-center justify-center gap-2 transition-colors">
            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4m0 0L7 13m0 0l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17M17 13v6a2 2 0 01-2 2H9a2 2 0 01-2-2v-6m8 0V9a2 2 0 00-2-2H9a2 2 0 00-2 2v4.01"></path>
            </svg>
            List to Market
        </a>
        <a href="{{ route('sales.create') }}" class="bg-purple-600 hover:bg-purple-700 text-white p-4 rounded-lg flex items-center justify-center gap-2 transition-colors">
            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
            </svg>
            Record Sale
        </a>
        <a href="{{ route('expenses.create') }}" class="bg-red-600 hover:bg-red-700 text-white p-4 rounded-lg flex items-center justify-center gap-2 transition-colors">
            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"></path>
            </svg>
            Add Expense
        </a>
    </div>

    <!-- Content Grid -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <!-- Recent Sales -->
        <div class="bg-white rounded-lg shadow">
            <div class="px-6 py-4 border-b border-gray-200 flex justify-between items-center">
                <h3 class="text-lg font-medium text-gray-900">Recent Sales</h3>
                <a href="{{ route('sales.index') }}" class="text-blue-600 hover:text-blue-800 text-sm">View All</a>
            </div>
            <div class="p-6">
                @if ($recentSales->count() > 0)
                    <div class="space-y-4">
                        @foreach ($recentSales as $sale)
                        <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
                            <div>
                                <p class="font-medium text-gray-900">{{ $sale->product->name }}</p>
                                <p class="text-sm text-gray-600">{{ $sale->customer_name }}</p>
                                <p class="text-xs text-gray-500">{{ $sale->sale_date->format('M d, Y') }}</p>
                            </div>
                            <div class="text-right">
                                <p class="font-medium text-gray-900">${{ number_format($sale->total_amount, 2) }}</p>
                                <span class="px-2 py-1 text-xs font-medium rounded-full 
                                    @if ($sale->payment_status === 'paid') bg-green-100 text-green-800
                                    @elseif($sale->payment_status === 'partial') bg-yellow-100 text-yellow-800
                                    @else bg-red-100 text-red-800 @endif">
                                    {{ ucfirst($sale->payment_status) }}
                                </span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                @else
                    <p class="text-gray-500 text-center py-8">No sales recorded yet</p>
                @endif
            </div>
        </div>

        <!-- Low Stock Alert -->
        <div class="bg-white rounded-lg shadow">
            <div class="px-6 py-4 border-b border-gray-200 flex justify-between items-center">
                <h3 class="text-lg font-medium text-gray-900">Low Stock Alert</h3>
                <a href="{{ route('products.index') }}" class="text-blue-600 hover:text-blue-800 text-sm">Manage Products</a>
            </div>
            <div class="p-6">
                @if ($lowStockProducts->count() > 0)
                    <div class="space-y-4">
                        @foreach ($lowStockProducts as $product)
                        <div class="flex items-center justify-between p-4 bg-red-50 rounded-lg border border-red-200">
                            <div>
                                <p class="font-medium text-gray-900">{{ $product->name }}</p>
                                <p class="text-sm text-gray-600">{{ $product->crop->name }}</p>
                                <p class="text-xs text-red-600">Stock: {{ $product->stock_quantity }} {{ $product->unit_type }}</p>
                            </div>
                            <div class="text-right">
                                <span class="px-2 py-1 text-xs font-medium bg-red-100 text-red-800 rounded-full">
                                    Low Stock
                                </span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                @else
                    <p class="text-gray-500 text-center py-8">All products are well stocked</p>
                @endif
            </div>
        </div>
    </div>
</div> --}}

    {{-- versi 2 --}}

    <!-- Area Konten Halaman -->
    <div class="flex-1 p-6 overflow-y-auto">

        <!-- Header Halaman -->
        <div>
            <h2 class="text-2xl font-bold text-gray-800">Manajemen Penjualan</h2>
        </div>

        <!-- Kartu Ringkasan -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Card Total Penjualan -->
            <div class="bg-white p-5 rounded-lg shadow-sm">
                <div class="flex items-start justify-between">
                    <div>
                        <p class="text-sm text-gray-500">Total Penjualan</p>
                        <p class="text-2xl font-bold text-gray-800 mt-1">Rp 45.600.000</p>
                    </div>
                    <div class="bg-green-100 text-green-600 p-2 rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 8c2.21 0 4 1.79 4 4s-1.79 4-4 4-4-1.79-4-4 1.79-4 4-4zm0 0v-2m0 12v2m-8-6h2m12 0h2" />
                        </svg>
                    </div>
                </div>
                <a href="#" class="text-sm font-medium text-gray-500 hover:text-green-600 mt-4 inline-block">Lihat
                    semua</a>
            </div>
            <!-- Card Jumlah Pesanan -->
            <div class="bg-white p-5 rounded-lg shadow-sm">
                <div class="flex items-start justify-between">
                    <div>
                        <p class="text-sm text-gray-500">Jumlah Pesanan</p>
                        <p class="text-2xl font-bold text-gray-800 mt-1">78</p>
                    </div>
                    <div class="bg-blue-100 text-blue-600 p-2 rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                        </svg>
                    </div>
                </div>
                <a href="#" class="text-sm font-medium text-gray-500 hover:text-blue-600 mt-4 inline-block">Lihat
                    semua</a>
            </div>
            <!-- Card Pelanggan -->
            <div class="bg-white p-5 rounded-lg shadow-sm">
                <div class="flex items-start justify-between">
                    <div>
                        <p class="text-sm text-gray-500">Pelanggan</p>
                        <p class="text-2xl font-bold text-gray-800 mt-1">42</p>
                    </div>
                    <div class="bg-purple-100 text-purple-600 p-2 rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M15 21a6 6 0 00-9-5.197" />
                        </svg>
                    </div>
                </div>
                <a href="#" class="text-sm font-medium text-gray-500 hover:text-purple-600 mt-4 inline-block">Lihat
                    semua</a>
            </div>
            <!-- Card Pertumbuhan -->
            <div class="bg-white p-5 rounded-lg shadow-sm">
                <div class="flex items-start justify-between">
                    <div>
                        <p class="text-sm text-gray-500">Pertumbuhan</p>
                        <p class="text-2xl font-bold text-green-600 mt-1">+12.5%</p>
                    </div>
                    <div class="bg-yellow-100 text-yellow-600 p-2 rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                        </svg>
                    </div>
                </div>
                <a href="#" class="text-sm font-medium text-gray-500 hover:text-yellow-600 mt-4 inline-block">Lihat
                    detail</a>
            </div>
        </div>

        <!-- Tombol Aksi -->
        <div class="flex flex-wrap items-center gap-4">
            <button
                class="bg-green-600 text-white px-4 py-2 rounded-lg shadow-sm hover:bg-green-700 flex items-center gap-2 text-sm font-medium">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                        clip-rule="evenodd" />
                </svg>
                Tambah Penjualan
            </button>
            <button
                class="bg-blue-600 text-white px-4 py-2 rounded-lg shadow-sm hover:bg-blue-700 flex items-center gap-2 text-sm font-medium">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z" />
                    <path fill-rule="evenodd"
                        d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3z"
                        clip-rule="evenodd" />
                </svg>
                Laporan Penjualan
            </button>
            <button
                class="bg-purple-600 text-white px-4 py-2 rounded-lg shadow-sm hover:bg-purple-700 flex items-center gap-2 text-sm font-medium">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path
                        d="M9 6a3 3 0 11-6 0 3 3 0 016 0zm-3 2a2 2 0 100-4 2 2 0 000 4zm7 0a2 2 0 100-4 2 2 0 000 4zm-7 1a1 1 0 100 2h6a1 1 0 100-2H6zm7 3a1 1 0 011 1v1h-1v-1a1 1 0 011-1zM4 15a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1z" />
                </svg>
                Kelola Pelanggan
            </button>
        </div>

        <!-- Area Grafik dan Transaksi -->
        <div class="bg-white rounded-lg shadow-sm">
            <!-- Grafik -->
            <div class="p-6 border-b">
                <h3 class="text-lg font-semibold text-gray-800">Grafik Penjualan Bulanan</h3>
                <div class="mt-4 h-64 bg-gray-100 rounded-lg flex items-center justify-center">
                    <p class="text-gray-500">Placeholder untuk Grafik</p>
                    {{-- <canvas id="salesChart"></canvas> --}}
                </div>
            </div>
            <!-- Filter Transaksi -->
            <div class="p-6">
                <div class="flex flex-wrap items-center justify-between gap-4">
                    <div class="flex items-center gap-4 flex-wrap">
                        <div>
                            <label for="rentang-tanggal" class="text-sm text-gray-500 block mb-1">Rentang Tanggal</label>
                            <select id="rentang-tanggal"
                                class="border border-gray-300 rounded-lg py-2 px-3 bg-white text-gray-700 focus:outline-none text-sm">
                                <option>30 Hari Terakhir</option>
                                <option>7 Hari Terakhir</option>
                                <option>Bulan Ini</option>
                            </select>
                        </div>
                        <div>
                            <label for="status-transaksi" class="text-sm text-gray-500 block mb-1">Status</label>
                            <select id="status-transaksi"
                                class="border border-gray-300 rounded-lg py-2 px-3 bg-white text-gray-700 focus:outline-none text-sm">
                                <option>Semua Status</option>
                                <option>Selesai</option>
                                <option>Tertunda</option>
                                <option>Dibatalkan</option>
                            </select>
                        </div>
                        <div>
                            <label for="produk" class="text-sm text-gray-500 block mb-1">Produk</label>
                            <select id="produk"
                                class="border border-gray-300 rounded-lg py-2 px-3 bg-white text-gray-700 focus:outline-none text-sm">
                                <option>Semua Produk</option>
                            </select>
                        </div>
                    </div>
                    <div class="relative">
                        <label for="search-transaksi" class="text-sm text-gray-500 block mb-1">&nbsp;</label>
                        <input id="search-transaksi" type="text" placeholder="Cari transaksi..."
                            class="pl-10 pr-4 py-2 border border-gray-300 rounded-lg w-full md:w-64 focus:outline-none focus:ring-2 focus:ring-green-500">
                        <svg class="w-5 h-5 text-gray-400 absolute top-1/2 left-3 mt-3 -translate-y-1/2"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Tabel Transaksi -->
            <div class="overflow-x-auto">
                <div class="p-6 pt-0">
                    <div class="flex justify-between items-center mb-4">
                        <h4 class="font-semibold text-gray-800">Transaksi Terbaru</h4>
                        <p class="text-sm text-gray-500">Menampilkan 10 dari 78 transaksi</p>
                    </div>
                    <table class="w-full text-sm text-left text-gray-500">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3">ID Transaksi</th>
                                <th scope="col" class="px-6 py-3">Tanggal</th>
                                <th scope="col" class="px-6 py-3">Pelanggan</th>
                                <th scope="col" class="px-6 py-3">Produk</th>
                                <th scope="col" class="px-6 py-3">Total</th>
                                <th scope="col" class="px-6 py-3">Status</th>
                                <th scope="col" class="px-6 py-3 text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white border-b">
                                <td class="px-6 py-4 font-medium text-gray-900">TRX-2023-001</td>
                                <td class="px-6 py-4">15 Mei 2023</td>
                                <td class="px-6 py-4 flex items-center gap-2">
                                    <div
                                        class="w-8 h-8 rounded-full bg-blue-500 text-white flex items-center justify-center text-xs font-bold">
                                        BS</div>
                                    <div>
                                        <p class="font-medium text-gray-900">Budi Santoso</p>
                                        <p class="text-gray-500">budi@example.com</p>
                                    </div>
                                </td>
                                <td class="px-6 py-4">Sayuran Organik (5kg)</td>
                                <td class="px-6 py-4">Rp 750.000</td>
                                <td class="px-6 py-4"><span
                                        class="text-xs font-semibold text-green-800 bg-green-100 px-2 py-1 rounded-full">Selesai</span>
                                </td>
                                <td class="px-6 py-4 text-center"><button class="text-gray-500 hover:text-gray-700"><svg
                                            xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path
                                                d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                                        </svg></button></td>
                            </tr>
                            <tr class="bg-white border-b">
                                <td class="px-6 py-4 font-medium text-gray-900">TRX-2023-002</td>
                                <td class="px-6 py-4">14 Mei 2023</td>
                                <td class="px-6 py-4 flex items-center gap-2">
                                    <div
                                        class="w-8 h-8 rounded-full bg-red-500 text-white flex items-center justify-center text-xs font-bold">
                                        SW</div>
                                    <div>
                                        <p class="font-medium text-gray-900">Siti Wulandari</p>
                                        <p class="text-gray-500">siti@example.com</p>
                                    </div>
                                </td>
                                <td class="px-6 py-4">Susu Segar (10L)</td>
                                <td class="px-6 py-4">Rp 350.000</td>
                                <td class="px-6 py-4"><span
                                        class="text-xs font-semibold text-yellow-800 bg-yellow-100 px-2 py-1 rounded-full">Tertunda</span>
                                </td>
                                <td class="px-6 py-4 text-center"><button class="text-gray-500 hover:text-gray-700"><svg
                                            xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path
                                                d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                                        </svg></button></td>
                            </tr>
                            <tr class="bg-white border-b">
                                <td class="px-6 py-4 font-medium text-gray-900">TRX-2023-003</td>
                                <td class="px-6 py-4">13 Mei 2023</td>
                                <td class="px-6 py-4 flex items-center gap-2">
                                    <div
                                        class="w-8 h-8 rounded-full bg-indigo-500 text-white flex items-center justify-center text-xs font-bold">
                                        AP</div>
                                    <div>
                                        <p class="font-medium text-gray-900">Ahmad Pratama</p>
                                        <p class="text-gray-500">ahmad@example.com</p>
                                    </div>
                                </td>
                                <td class="px-6 py-4">Daging Sapi (3kg)</td>
                                <td class="px-6 py-4">Rp 450.000</td>
                                <td class="px-6 py-4"><span
                                        class="text-xs font-semibold text-green-800 bg-green-100 px-2 py-1 rounded-full">Selesai</span>
                                </td>
                                <td class="px-6 py-4 text-center"><button class="text-gray-500 hover:text-gray-700"><svg
                                            xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path
                                                d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                                        </svg></button></td>
                            </tr>
                            <tr class="bg-white border-b">
                                <td class="px-6 py-4 font-medium text-gray-900">TRX-2023-004</td>
                                <td class="px-6 py-4">12 Mei 2023</td>
                                <td class="px-6 py-4 flex items-center gap-2">
                                    <div
                                        class="w-8 h-8 rounded-full bg-pink-500 text-white flex items-center justify-center text-xs font-bold">
                                        DP</div>
                                    <div>
                                        <p class="font-medium text-gray-900">Dewi Putri</p>
                                        <p class="text-gray-500">dewi@example.com</p>
                                    </div>
                                </td>
                                <td class="px-6 py-4">Telur Ayam (10 kg)</td>
                                <td class="px-6 py-4">Rp 280.000</td>
                                <td class="px-6 py-4"><span
                                        class="text-xs font-semibold text-red-800 bg-red-100 px-2 py-1 rounded-full">Dibatalkan</span>
                                </td>
                                <td class="px-6 py-4 text-center"><button class="text-gray-500 hover:text-gray-700"><svg
                                            xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path
                                                d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                                        </svg></button></td>
                            </tr>
                            <tr class="bg-white">
                                <td class="px-6 py-4 font-medium text-gray-900">TRX-2023-005</td>
                                <td class="px-6 py-4">11 Mei 2023</td>
                                <td class="px-6 py-4 flex items-center gap-2">
                                    <div
                                        class="w-8 h-8 rounded-full bg-yellow-500 text-white flex items-center justify-center text-xs font-bold">
                                        RH</div>
                                    <div>
                                        <p class="font-medium text-gray-900">Rudi Hartono</p>
                                        <p class="text-gray-500">rudi@example.com</p>
                                    </div>
                                </td>
                                <td class="px-6 py-4">Buah-buahan Mix (9kg)</td>
                                <td class="px-6 py-4">Rp 320.000</td>
                                <td class="px-6 py-4"><span
                                        class="text-xs font-semibold text-green-800 bg-green-100 px-2 py-1 rounded-full">Selesai</span>
                                </td>
                                <td class="px-6 py-4 text-center"><button class="text-gray-500 hover:text-gray-700"><svg
                                            xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path
                                                d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                                        </svg></button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Paginasi -->
            <div class="flex flex-col md:flex-row justify-between items-center px-6 pb-6 text-sm">
                <p class="text-gray-700 mb-2 md:mb-0">
                    Menampilkan <span class="font-semibold">1</span> sampai <span class="font-semibold">5</span> dari
                    <span class="font-semibold">78</span> transaksi
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
                    <span class="px-3 py-1 text-gray-500">...</span>
                    <a href="#" class="px-3 py-1 rounded-md font-medium text-gray-700 hover:bg-gray-100">8</a>
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
    </div>
@endsection
