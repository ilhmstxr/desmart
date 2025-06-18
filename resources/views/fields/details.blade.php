@extends('layout.app')
@section('content')
    <div class="p-4 sm:p-6 lg:p-8">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div class="flex justify-between items-start mb-6">
                        <div>
                            <h2 class="text-2xl font-bold text-gray-900">{{ $field->name }}</h2>
                            <p class="mt-1 text-sm text-gray-600">
                                Bagian dari Pertanian:
                                <a href="{{ route('farms.show', $farm->id) }}"
                                    class="font-semibold text-indigo-600 hover:text-indigo-800">
                                    {{ $farm->name }}
                                </a>
                            </p>
                        </div>
                        <a href="{{ route('farms.show', $farm->id) }}"
                            class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50">
                            Kembali ke Pertanian
                        </a>
                    </div>

                    <div class="border-t border-gray-200">
                        <dl class="divide-y divide-gray-200">
                            <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4">
                                <dt class="text-sm font-medium text-gray-500">Luas Lahan</dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    {{ number_format($field->size, 2) }} m²</dd>
                            </div>
                            <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4">
                                <dt class="text-sm font-medium text-gray-500">Tipe Tanah</dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $field->soil_type }}</dd>
                            </div>
                            <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4">
                                <dt class="text-sm font-medium text-gray-500">pH Tanah</dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    {{ $field->ph_level ?? 'Belum diukur' }}</dd>
                            </div>
                            <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4">
                                <dt class="text-sm font-medium text-gray-500">Status Irigasi</dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full 
                                    @switch($field->irrigation_status)
                                        @case('active') bg-blue-100 text-blue-800 @break
                                        @case('scheduled') bg-yellow-100 text-yellow-800 @break
                                        @default bg-gray-100 text-gray-800
                                    @endswitch
                                ">
                                        {{ ucfirst($field->irrigation_status) }}
                                    </span>
                                </dd>
                            </div>
                            <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4">
                                <dt class="text-sm font-medium text-gray-500">Ketinggian</dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    {{ $field->altitude ? number_format($field->altitude, 2) . ' mdpl' : 'Tidak ada data' }}
                                </dd>
                            </div>
                            <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4">
                                <dt class="text-sm font-medium text-gray-500">Pemeriksaan Terakhir</dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    {{ $field->last_tested ? \Carbon\Carbon::parse($field->last_tested)->format('d F Y') : 'Belum pernah' }}
                                </dd>
                            </div>
                            <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4">
                                <dt class="text-sm font-medium text-gray-500">Koordinat</dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    {{ $field->coordinates ?? 'Tidak ada data' }}</dd>
                            </div>
                        </dl>
                    </div>
                    <div class="mt-6">
                        <a href="{{ route('fields.edit', $field->id) }}"
                            class="inline-flex items-center px-4 py-2 bg-yellow-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-yellow-600">
                            Edit Lahan Ini
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
