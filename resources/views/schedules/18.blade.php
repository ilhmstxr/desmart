@extends('layout.app')
@section('content')
    <!-- Area Konten Halaman -->
    <div class="max-w-7xl mx-auto space-y-6">
        <!-- Header -->
        <div class="flex justify-between items-center">
            <h1 class="text-3xl font-bold text-gray-800">Tambah Jadwal Pertanian & Peternakan</h1>
            <a href="#"
                class="inline-flex items-center gap-2 px-4 py-2 border border-gray-300 rounded-lg text-sm font-medium text-gray-700 bg-white hover:bg-gray-50">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                    stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
                Kembali
            </a>
        </div>

        <!-- Main Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Left Column: Form -->
            <div class="lg:col-span-2 bg-white p-8 rounded-xl shadow-md space-y-8">
                <div>
                    <h2 class="text-xl font-semibold text-gray-900">Detail Jadwal</h2>
                    <p class="text-sm text-gray-500 mt-1">Isi informasi jadwal kegiatan pertanian atau peternakan</p>
                </div>

                <!-- Kategori Kegiatan -->
                <div>
                    <h3 class="text-base font-semibold text-gray-800 mb-3">Kategori Kegiatan</h3>
                    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-6 gap-4 text-center">
                        <div class="border-2 border-green-500 bg-green-50 rounded-lg p-4 cursor-pointer">
                            <svg class="mx-auto h-8 w-8 text-green-600 mb-2" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.24a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 008 10.172V5L7 4z" />
                            </svg>
                            <span class="text-sm font-medium text-green-700">Pertanian</span>
                        </div>
                        <div class="border border-gray-200 hover:border-gray-300 rounded-lg p-4 cursor-pointer">
                            <svg class="mx-auto h-8 w-8 text-gray-500 mb-2" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path d="M12 14l9-5-9-5-9 5 9 5z" />
                                <path
                                    d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-5.998 12.078 12.078 0 01.665-6.479L12 14z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 14l9-5-9-5-9 5 9 5z" />
                            </svg>
                            <span class="text-sm font-medium text-gray-600">Peternakan</span>
                        </div>
                        <div class="border border-gray-200 hover:border-gray-300 rounded-lg p-4 cursor-pointer">
                            <svg class="mx-auto h-8 w-8 text-gray-500 mb-2" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.75 15.75l-2.489-2.489m0 0a3.375 3.375 0 10-4.773-4.773 3.375 3.375 0 004.774 4.774zM21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span class="text-sm font-medium text-gray-600">Peralatan</span>
                        </div>
                        <div class="border border-gray-200 hover:border-gray-300 rounded-lg p-4 cursor-pointer">
                            <svg class="mx-auto h-8 w-8 text-gray-500 mb-2" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                            </svg>
                            <span class="text-sm font-medium text-gray-600">Panen</span>
                        </div>
                        <div class="border border-gray-200 hover:border-gray-300 rounded-lg p-4 cursor-pointer">
                            <svg class="mx-auto h-8 w-8 text-gray-500 mb-2" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c.51 0 .962-.344 1.087-.836l1.72-6.452M7.5 14.25L5.106 5.162A4.502 4.502 0 001.34 9H15M2.25 3h19.5v12h-6.75a3 3 0 01-3-3H9a3 3 0 01-3 3H2.25V3z" />
                            </svg>
                            <span class="text-sm font-medium text-gray-600">Pasar</span>
                        </div>
                        <div class="border border-gray-200 hover:border-gray-300 rounded-lg p-4 cursor-pointer">
                            <svg class="mx-auto h-8 w-8 text-gray-500 mb-2" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span class="text-sm font-medium text-gray-600">Lainnya</span>
                        </div>
                    </div>
                </div>

                <!-- Form Inputs -->
                <div class="space-y-6">
                    <div>
                        <label for="judul" class="block text-sm font-medium text-gray-700 mb-1">Judul Jadwal</label>
                        <input type="text" id="judul" value="Penanaman Padi Musim Hujan"
                            class="block w-full border-gray-300 rounded-lg shadow-sm focus:ring-green-500 focus:border-green-500">
                    </div>
                    <div>
                        <label for="lokasi" class="block text-sm font-medium text-gray-700 mb-1">Lokasi</label>
                        <select id="lokasi"
                            class="block w-full border-gray-300 rounded-lg shadow-sm focus:ring-green-500 focus:border-green-500">
                            <option>Pilih Lokasi</option>
                        </select>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div>
                            <label for="tanggal-mulai" class="block text-sm font-medium text-gray-700 mb-1">Tanggal
                                Mulai</label>
                            <input type="date" id="tanggal-mulai"
                                class="block w-full border-gray-300 rounded-lg shadow-sm focus:ring-green-500 focus:border-green-500 text-gray-500">
                        </div>
                        <div>
                            <label for="waktu-mulai" class="block text-sm font-medium text-gray-700 mb-1">Waktu
                                Mulai</label>
                            <input type="time" id="waktu-mulai"
                                class="block w-full border-gray-300 rounded-lg shadow-sm focus:ring-green-500 focus:border-green-500 text-gray-500">
                        </div>
                        <div>
                            <label for="tanggal-selesai" class="block text-sm font-medium text-gray-700 mb-1">Tanggal
                                Selesai</label>
                            <input type="date" id="tanggal-selesai"
                                class="block w-full border-gray-300 rounded-lg shadow-sm focus:ring-green-500 focus:border-green-500 text-gray-500">
                        </div>
                        <div>
                            <label for="waktu-selesai" class="block text-sm font-medium text-gray-700 mb-1">Waktu
                                Selesai</label>
                            <input type="time" id="waktu-selesai"
                                class="block w-full border-gray-300 rounded-lg shadow-sm focus:ring-green-500 focus:border-green-500 text-gray-500">
                        </div>
                    </div>
                    <div class="flex items-center">
                        <input id="sepanjang-hari" name="sepanjang-hari" type="checkbox"
                            class="h-4 w-4 text-green-600 focus:ring-green-500 border-gray-300 rounded">
                        <label for="sepanjang-hari" class="ml-2 block text-sm text-gray-900">Sepanjang Hari</label>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div>
                            <label for="pengulangan"
                                class="block text-sm font-medium text-gray-700 mb-1">Pengulangan</label>
                            <select id="pengulangan"
                                class="block w-full border-gray-300 rounded-lg shadow-sm focus:ring-green-500 focus:border-green-500">
                                <option>Tidak Ada</option>
                            </select>
                        </div>
                        <div>
                            <label for="pengingat" class="block text-sm font-medium text-gray-700 mb-1">Pengingat</label>
                            <select id="pengingat"
                                class="block w-full border-gray-300 rounded-lg shadow-sm focus:ring-green-500 focus:border-green-500">
                                <option>15 menit sebelumnya</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <label for="catatan" class="block text-sm font-medium text-gray-700 mb-1">Catatan</label>
                        <textarea id="catatan" rows="3"
                            class="block w-full border-gray-300 rounded-lg shadow-sm focus:ring-green-500 focus:border-green-500"
                            placeholder="Tambahkan catatan atau instruksi khusus"></textarea>
                    </div>
                    <div>
                        <label for="ditugaskan" class="block text-sm font-medium text-gray-700 mb-1">Ditugaskan
                            Kepada</label>
                        <select id="ditugaskan"
                            class="block w-full border-gray-300 rounded-lg shadow-sm focus:ring-green-500 focus:border-green-500">
                            <option>Pilih Petugas</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Prioritas</label>
                        <div class="mt-2 flex items-center space-x-6">
                            <div class="flex items-center"><input id="rendah" name="prioritas" type="radio"
                                    class="focus:ring-green-500 h-4 w-4 text-green-600 border-gray-300"><label
                                    for="rendah" class="ml-2 block text-sm text-gray-700">Rendah</label></div>
                            <div class="flex items-center"><input id="sedang" name="prioritas" type="radio" checked
                                    class="focus:ring-green-500 h-4 w-4 text-green-600 border-gray-300"><label
                                    for="sedang" class="ml-2 block text-sm text-gray-700">Sedang</label></div>
                            <div class="flex items-center"><input id="tinggi" name="prioritas" type="radio"
                                    class="focus:ring-green-500 h-4 w-4 text-green-600 border-gray-300"><label
                                    for="tinggi" class="ml-2 block text-sm text-gray-700">Tinggi</label></div>
                        </div>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="flex items-center justify-end gap-4 pt-8 mt-8 border-t">
                    <button type="button"
                        class="bg-white px-6 py-2 border border-gray-300 rounded-lg text-sm font-semibold text-gray-700 hover:bg-gray-50">Batal</button>
                    <button type="submit"
                        class="bg-green-600 text-white px-6 py-2 rounded-lg text-sm font-semibold hover:bg-green-700">Simpan
                        Jadwal</button>
                </div>
            </div>

            <!-- Right Column: Info Cards -->
            <div class="space-y-6">
                <!-- Prakiraan Cuaca -->
                <div class="bg-white p-6 rounded-xl shadow-md">
                    <h3 class="font-semibold text-gray-900 mb-4">Prakiraan Cuaca</h3>
                    <div class="bg-blue-50 p-4 rounded-lg">
                        <p class="text-sm text-gray-600">Hari Ini <span class="text-gray-400">Sabtu, 14 Juni 2025</span>
                        </p>
                        <div class="flex justify-between items-center my-2">
                            <div class="flex items-center gap-2">
                                <svg class="w-12 h-12 text-yellow-400" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" />
                                </svg>
                                <p class="text-5xl font-bold text-gray-800">32°C</p>
                            </div>
                            <div class="text-sm text-right text-gray-600 space-y-1">
                                <p>Kelembapan: <strong>65%</strong></p>
                                <p>Angin: <strong>10 km/jam</strong></p>
                                <p>Curah Hujan: <strong>0 mm</strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <p class="text-sm font-medium text-gray-700 mb-2">Prakiraan 5 Hari Kedepan</p>
                        <div class="flex justify-around text-center text-sm">
                            <div>
                                <p class="text-gray-500">Sol</p><svg class="w-6 h-6 mx-auto text-yellow-400 my-1"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" />
                                </svg>
                                <p class="font-medium">31°C</p>
                            </div>
                            <div>
                                <p class="text-gray-500">Rab</p><svg class="w-6 h-6 mx-auto text-yellow-400 my-1"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 15a4.5 4.5 0 004.5 4.5H18a3.75 3.75 0 001.332-7.257 3 3 0 00-2.433-2.433c-.586-.097-1.168-.14-1.751-.14a4.5 4.5 0 00-4.5 4.5 3.75 3.75 0 00-1.332 7.257H2.25z" />
                                </svg>
                                <p class="font-medium">28°C</p>
                            </div>
                            <div>
                                <p class="text-gray-500">Kam</p><svg class="w-6 h-6 mx-auto text-yellow-400 my-1"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 15a4.5 4.5 0 004.5 4.5H18a3.75 3.75 0 001.332-7.257 3 3 0 00-2.433-2.433c-.586-.097-1.168-.14-1.751-.14a4.5 4.5 0 00-4.5 4.5 3.75 3.75 0 00-1.332 7.257H2.25z" />
                                </svg>
                                <p class="font-medium">29°C</p>
                            </div>
                            <div>
                                <p class="text-gray-500">Jum</p><svg class="w-6 h-6 mx-auto text-yellow-400 my-1"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" />
                                </svg>
                                <p class="font-medium">29°C</p>
                            </div>
                            <div>
                                <p class="text-gray-500">Sab</p><svg class="w-6 h-6 mx-auto text-yellow-400 my-1"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" />
                                </svg>
                                <p class="font-medium">29°C</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Kalender Tanam -->
                <div class="bg-white p-6 rounded-xl shadow-md">
                    <h3 class="font-semibold text-gray-900 mb-4">Kalender Tanam</h3>
                    <p class="text-sm text-gray-500 mb-4">Musim tanam optimal</p>
                    <div class="space-y-3 text-sm">
                        <div class="flex justify-between items-center">
                            <p class="flex items-center gap-2"><span
                                    class="w-2.5 h-2.5 bg-green-500 rounded-full"></span>Padi</p>
                            <p class="text-gray-500">Mei - Agustus</p>
                        </div>
                        <div class="flex justify-between items-center">
                            <p class="flex items-center gap-2"><span
                                    class="w-2.5 h-2.5 bg-yellow-400 rounded-full"></span>Jagung</p>
                            <p class="text-gray-500">April - Juli</p>
                        </div>
                        <div class="flex justify-between items-center">
                            <p class="flex items-center gap-2"><span
                                    class="w-2.5 h-2.5 bg-red-500 rounded-full"></span>Cabai</p>
                            <p class="text-gray-500">Maret - Juni</p>
                        </div>
                        <div class="flex justify-between items-center">
                            <p class="flex items-center gap-2"><span
                                    class="w-2.5 h-2.5 bg-orange-500 rounded-full"></span>Kedelai</p>
                            <p class="text-gray-500">Juni - September</p>
                        </div>
                        <div class="flex justify-between items-center">
                            <p class="flex items-center gap-2"><span
                                    class="w-2.5 h-2.5 bg-purple-500 rounded-full"></span>Tomat</p>
                            <p class="text-gray-500">Sepanjang tahun</p>
                        </div>
                    </div>
                    <a href="#"
                        class="inline-flex items-center gap-2 text-sm text-green-600 font-semibold mt-4 hover:text-green-700">Lihat
                        kalender lengkap <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg></a>
                </div>
                <!-- Jadwal Mendatang -->
                <div class="bg-white p-6 rounded-xl shadow-md">
                    <h3 class="font-semibold text-gray-900 mb-4">Jadwal Mendatang</h3>
                    <p class="text-sm text-gray-500 mb-4">Kegiatan yang akan datang</p>
                    <div class="space-y-4">
                        <div class="flex items-start gap-3">
                            <div class="bg-green-100 p-2 rounded-lg mt-1"><svg class="h-5 w-5 text-green-600"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.24a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 008 10.172V5L7 4z" />
                                </svg></div>
                            <div>
                                <p class="font-medium text-gray-800">Penanaman Padi</p>
                                <p class="text-sm text-gray-500">Besok, 08:00 - 12:00 <br> Sawah Blok A</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="bg-yellow-100 p-2 rounded-lg mt-1"><svg class="h-5 w-5 text-yellow-600"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                                </svg></div>
                            <div>
                                <p class="font-medium text-gray-800">Pemberian Pakan Sapi</p>
                                <p class="text-sm text-gray-500">setiap hari, 06:00 & 16:00 <br> Kandang Sapi</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="bg-blue-100 p-2 rounded-lg mt-1"><svg class="h-5 w-5 text-blue-600"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M8.25 18.75a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 01-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h1.125c.621 0 1.125-.504 1.125-1.125V14.25m-17.25 4.5v-1.875a3.375 3.375 0 003.375-3.375h1.5a1.125 1.125 0 011.125 1.125v-1.5c0-.621.504-1.125 1.125-1.125H12M12 15v.01M12 12v.01M12 9v.01M12 6v.01M12 3v.01" />
                                </svg></div>
                            <div>
                                <p class="font-medium text-gray-800">Irigasi Kebun Sayur</p>
                                <p class="text-sm text-gray-500">2 hari sekali, 07:00<br>Kebun Sayur</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="bg-purple-100 p-2 rounded-lg mt-1"><svg class="h-5 w-5 text-purple-600"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m6.75 12l-3-3m0 0l-3 3m3-3v6m-1.5-15l-3-3m0 0l-3 3m3-3V15" />
                                </svg></div>
                            <div>
                                <p class="font-medium text-gray-800">Vaksinasi Ayam</p>
                                <p class="text-sm text-gray-500">Minggu, 18 Juni <br> Kandang Ayam</p>
                            </div>
                        </div>
                    </div>
                    <a href="#"
                        class="inline-flex items-center gap-2 text-sm text-green-600 font-semibold mt-6 hover:text-green-700">Lihat
                        semua jadwal <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg></a>
                </div>
            </div>
        </div>
    </div>
@endsection
