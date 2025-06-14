@extends('layout.app')
@section('content')
    <div class="min-h-screen">
        <header class="bg-green-600 text-white shadow-md">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between h-16">
                    <div class="flex items-center">
                        <h1 class="text-2xl font-bold">AgriSchedule</h1>
                        <nav class="hidden md:flex ml-10 space-x-4">
                            <a href="#" class="bg-green-700 px-3 py-2 rounded-md text-sm font-medium">Kalender</a>
                            <a href="#" class="hover:bg-green-700 px-3 py-2 rounded-md text-sm font-medium">Jadwal
                                Pengingat</a>
                            <a href="#" class="hover:bg-green-700 px-3 py-2 rounded-md text-sm font-medium">Laporan
                                Bulanan</a>
                        </nav>
                    </div>
                    <div class="flex items-center gap-4">
                        <button class="p-1 rounded-full hover:bg-green-700 focus:outline-none">
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                            </svg>
                        </button>
                        <div class="w-8 h-8 rounded-full bg-green-800"></div>
                    </div>
                </div>
            </div>
        </header>

        <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">

                <div class="lg:col-span-1 space-y-6">
                    <div class="bg-white p-4 rounded-lg shadow">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="font-semibold text-gray-800">Juni 2025</h3>
                            <div class="flex gap-2">
                                <button class="text-gray-400 hover:text-gray-600"><svg xmlns="http://www.w3.org/2000/svg"
                                        class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                            clip-rule="evenodd" />
                                    </svg></button>
                                <button class="text-gray-400 hover:text-gray-600"><svg xmlns="http://www.w3.org/2000/svg"
                                        class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd" />
                                    </svg></button>
                            </div>
                        </div>
                        <div class="grid grid-cols-7 text-center text-sm text-gray-500">
                            <div class="py-1">Min</div>
                            <div class="py-1">Sen</div>
                            <div class="py-1">Sel</div>
                            <div class="py-1">Rab</div>
                            <div class="py-1">Kam</div>
                            <div class="py-1">Jum</div>
                            <div class="py-1">Sab</div>
                            <div class="py-1">1</div>
                            <div>2</div>
                            <div>3</div>
                            <div>4</div>
                            <div>5</div>
                            <div>6</div>
                            <div>7</div>
                            <div>8</div>
                            <div>9</div>
                            <div>10</div>
                            <div>11</div>
                            <div>12</div>
                            <div>13</div>
                            <div
                                class="bg-green-600 text-white rounded-full w-7 h-7 flex items-center justify-center mx-auto">
                                14</div>
                            <div>15</div>
                            <div>16</div>
                            <div>17</div>
                            <div>18</div>
                            <div>19</div>
                            <div>20</div>
                            <div>21</div>
                            <div>22</div>
                            <div>23</div>
                            <div>24</div>
                            <div>25</div>
                            <div>26</div>
                            <div>27</div>
                            <div>28</div>
                            <div>29</div>
                            <div>30</div>
                            <div class="text-gray-300">1</div>
                            <div class="text-gray-300">2</div>
                            <div class="text-gray-300">3</div>
                            <div class="text-gray-300">4</div>
                            <div class="text-gray-300">5</div>
                        </div>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow">
                        <h3 class="font-semibold text-gray-800 mb-4">Kategori</h3>
                        <div class="space-y-3">
                            <a href="#" class="flex justify-between items-center p-2 rounded-lg hover:bg-gray-100">
                                <div class="flex items-center gap-3">
                                    <span class="bg-blue-100 p-2 rounded-full"><svg class="w-5 h-5 text-blue-600"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.24a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 008 10.172V5L7 4z" />
                                        </svg></span>
                                    <span class="font-medium text-sm text-gray-700">Pertanian</span>
                                </div>
                                <span
                                    class="text-xs font-semibold bg-blue-100 text-blue-700 px-2 py-0.5 rounded-full">5</span>
                            </a>
                            <a href="#" class="flex justify-between items-center p-2 rounded-lg hover:bg-gray-100">
                                <div class="flex items-center gap-3">
                                    <span class="bg-orange-100 p-2 rounded-full"><svg class="w-5 h-5 text-orange-600"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor">
                                            <path d="M12 14l9-5-9-5-9 5 9 5z" />
                                            <path
                                                d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-5.998 12.078 12.078 0 01.665-6.479L12 14z" />
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M12 14l9-5-9-5-9 5 9 5z" />
                                        </svg></span>
                                    <span class="font-medium text-sm text-gray-700">Peternakan</span>
                                </div>
                                <span
                                    class="text-xs font-semibold bg-orange-100 text-orange-700 px-2 py-0.5 rounded-full">3</span>
                            </a>
                            <a href="#" class="flex justify-between items-center p-2 rounded-lg hover:bg-gray-100">
                                <div class="flex items-center gap-3">
                                    <span class="bg-purple-100 p-2 rounded-full"><svg class="w-5 h-5 text-purple-600"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c.51 0 .962-.344 1.087-.836l1.72-6.452M7.5 14.25L5.106 5.162A4.502 4.502 0 001.34 9H15M2.25 3h19.5v12h-6.75a3 3 0 01-3-3H9a3 3 0 01-3 3H2.25V3z" />
                                        </svg></span>
                                    <span class="font-medium text-sm text-gray-700">Pemesanan</span>
                                </div>
                                <span
                                    class="text-xs font-semibold bg-purple-100 text-purple-700 px-2 py-0.5 rounded-full">1</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-2 space-y-6">
                    <div class="bg-white p-6 rounded-lg shadow">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="font-semibold text-gray-800">Jadwal Hari Ini</h3>
                            <span class="text-sm text-gray-500">Sabtu, 14 Juni 2025</span>
                        </div>
                        <div class="space-y-4">
                            <div
                                class="flex items-center justify-between p-3 bg-blue-50 border-l-4 border-blue-500 rounded-r-lg">
                                <div class="flex items-center gap-3">
                                    <input type="checkbox"
                                        class="h-5 w-5 rounded border-gray-300 text-green-600 focus:ring-green-500">
                                    <div>
                                        <p class="font-medium text-gray-800">Perawatan Tanaman Tomat</p>
                                        <p class="text-xs text-gray-500">Lahan Blok A2</p>
                                    </div>
                                </div>
                                <span class="text-sm font-medium text-gray-600">07:00</span>
                            </div>
                            <div
                                class="flex items-center justify-between p-3 bg-orange-50 border-l-4 border-orange-500 rounded-r-lg">
                                <div class="flex items-center gap-3">
                                    <input type="checkbox"
                                        class="h-5 w-5 rounded border-gray-300 text-green-600 focus:ring-green-500">
                                    <div>
                                        <p class="font-medium text-gray-800">Memberi Makan Ayam</p>
                                        <p class="text-xs text-gray-500">Kandang Ayam Petelur</p>
                                    </div>
                                </div>
                                <span class="text-sm font-medium text-gray-600">08:00</span>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow">
                        <div class="flex justify-between items-center">
                            <div>
                                <h3 class="font-semibold text-gray-800">Periode Sistem Irigasi</h3>
                                <p class="text-sm text-gray-500">Lahan Jagung Utama</p>
                            </div>
                            <span class="text-sm text-gray-500">sisa 2 jam 15 menit</span>
                        </div>
                        <div class="mt-3 w-full bg-gray-200 rounded-full h-2.5">
                            <div class="bg-blue-600 h-2.5 rounded-full" style="width: 45%"></div>
                        </div>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow">
                        <h3 class="font-semibold text-gray-800 mb-4">Tambah Pengingat Baru</h3>
                        <div class="space-y-4">
                            <div>
                                <label for="task-name" class="block text-sm font-medium text-gray-700 mb-1">Nama
                                    Tugas</label>
                                <input type="text" id="task-name"
                                    class="w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500"
                                    placeholder="Contoh: Cek pH Tanah">
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label for="task-date"
                                        class="block text-sm font-medium text-gray-700 mb-1">Tanggal</label>
                                    <input type="date" id="task-date"
                                        class="w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 text-gray-500">
                                </div>
                                <div>
                                    <label for="task-time"
                                        class="block text-sm font-medium text-gray-700 mb-1">Waktu</label>
                                    <input type="time" id="task-time"
                                        class="w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 text-gray-500">
                                </div>
                            </div>
                            <div>
                                <label for="task-notes"
                                    class="block text-sm font-medium text-gray-700 mb-1">Catatan</label>
                                <textarea id="task-notes" rows="3"
                                    class="w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500"
                                    placeholder="Deskripsi singkat..."></textarea>
                            </div>
                            <div class="space-y-2">
                                <label class="block text-sm font-medium text-gray-700">Pengulangan</label>
                                <div class="flex flex-wrap gap-2">
                                    <button class="text-sm px-3 py-1 bg-gray-200 rounded-full hover:bg-gray-300">Tidak
                                        ada</button>
                                    <button class="text-sm px-3 py-1 bg-gray-200 rounded-full hover:bg-gray-300">Setiap
                                        hari</button>
                                    <button
                                        class="text-sm px-3 py-1 bg-green-100 text-green-800 font-semibold rounded-full">Setiap
                                        minggu</button>
                                    <button class="text-sm px-3 py-1 bg-gray-200 rounded-full hover:bg-gray-300">Setiap
                                        bulan</button>
                                </div>
                            </div>
                            <div class="space-y-2">
                                <label class="block text-sm font-medium text-gray-700">Kategori</label>
                                <div class="flex flex-wrap gap-2">
                                    <button
                                        class="text-sm px-3 py-1 bg-blue-100 text-blue-800 font-semibold rounded-full">Pertanian</button>
                                    <button
                                        class="text-sm px-3 py-1 bg-gray-200 rounded-full hover:bg-gray-300">Peternakan</button>
                                    <button
                                        class="text-sm px-3 py-1 bg-gray-200 rounded-full hover:bg-gray-300">Lainnya</button>
                                </div>
                            </div>
                            <div class="space-y-2">
                                <label class="block text-sm font-medium text-gray-700">Prioritas</label>
                                <div class="flex flex-wrap gap-2">
                                    <button
                                        class="text-sm px-3 py-1 bg-gray-200 rounded-full hover:bg-gray-300">Rendah</button>
                                    <button
                                        class="text-sm px-3 py-1 bg-yellow-100 text-yellow-800 font-semibold rounded-full">Sedang</button>
                                    <button
                                        class="text-sm px-3 py-1 bg-gray-200 rounded-full hover:bg-gray-300">Tinggi</button>
                                </div>
                            </div>
                            <div class="text-right pt-2">
                                <button
                                    class="bg-green-600 text-white font-semibold px-6 py-2 rounded-lg hover:bg-green-700">Simpan
                                    Pengingat</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-1">
                </div>
            </div>
        </main>
    </div>
@endsection
