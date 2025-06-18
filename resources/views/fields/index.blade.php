 @extends('layout.app')

 @section('content')
    
<div class="p-4 sm:p-6 lg:p-8">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">

                <!-- Header -->
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-6">
                    <div>
                        <h2 class="text-2xl font-semibold text-gray-800">Manajemen Lahan</h2>
                        <p class="text-sm text-gray-600 mt-1">Untuk Pertanian: 
                            <a href="{{ route('farms.show', $farm->id) }}" class="font-bold text-indigo-600 hover:underline">{{ $farm->name }}</a>
                        </p>
                    </div>
                    <div class="mt-4 sm:mt-0">
                        <!-- PERBAIKAN: Route diarahkan ke farms.fields.create dengan parameter farm -->
                        <a href="{{ route('farms.fields.create', $farm->id) }}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700">
                            Tambah Lahan Baru
                        </a>
                    </div>
                </div>

                @if (session('success'))
                    <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4" role="alert">
                        <p>{{ session('success') }}</p>
                    </div>
                @endif

                <!-- Tabel Lahan -->
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama Lahan</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Luas (m²)</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tipe Tanah</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status Irigasi</th>
                                <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <!-- PERBAIKAN: Menggunakan loop @forelse untuk menampilkan data dinamis -->
                            @forelse ($fields as $field)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $field->name }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ number_format($field->size, 2) }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $field->soil_type }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                         <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full 
                                            @switch($field->irrigation_status)
                                                @case('active') bg-blue-100 text-blue-800 @break
                                                @case('scheduled') bg-yellow-100 text-yellow-800 @break
                                                @default bg-gray-100 text-gray-800
                                            @endswitch
                                        ">
                                            {{ ucfirst($field->irrigation_status) }}
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <!-- PERBAIKAN: Route disesuaikan untuk shallow nesting -->
                                        <a href="{{ route('fields.show', $field->id) }}" class="text-indigo-600 hover:text-indigo-900">Lihat</a>
                                        <a href="{{ route('fields.edit', $field->id) }}" class="ml-4 text-yellow-600 hover:text-yellow-900">Edit</a>
                                        <form action="{{ route('fields.destroy', $field->id) }}" method="POST" class="inline-block ml-4" onsubmit="return confirm('Apakah Anda yakin ingin menghapus lahan ini?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-600 hover:text-red-900">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="px-6 py-4 whitespace-nowrap text-center text-sm text-gray-500">
                                        Belum ada lahan di pertanian ini. Silakan tambahkan lahan baru.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                 <div class="mt-4">
                    {{ $fields->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
 @endsection
