@extends('layout.app')
@section('content')
    <div class="p-8">
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-gray-900">Edit Jadwal</h1>
            <p class="text-gray-600">Perbarui detail tugas atau aktivitas.</p>
        </div>

        <div class="bg-white rounded-lg shadow overflow-hidden">
            {{-- Form diarahkan ke method 'update' dengan metode 'PUT' --}}
            <form action="{{ route('schedules.update', $schedule->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="p-6 space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Judul Tugas *</label>
                            {{-- Mengisi value dengan data lama atau data dari database --}}
                            <input type="text" id="title" name="title" value="{{ old('title', $schedule->title) }}"
                                required
                                class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500">
                            @error('title')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="type" class="block text-sm font-medium text-gray-700 mb-1">Tipe *</label>
                            <select id="type" name="type" required
                                class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500">
                                <option value="">-- Pilih Tipe --</option>
                                {{-- Memeriksa dan memilih opsi yang sesuai dengan data yang ada --}}
                                <option value="planting" {{ old('type', $schedule->type) == 'planting' ? 'selected' : '' }}>
                                    Penanaman</option>
                                <option value="irrigation"
                                    {{ old('type', $schedule->type) == 'irrigation' ? 'selected' : '' }}>Penyiraman</option>
                                <option value="fertilizing"
                                    {{ old('type', $schedule->type) == 'fertilizing' ? 'selected' : '' }}>Pemupukan</option>
                                <option value="harvesting"
                                    {{ old('type', $schedule->type) == 'harvesting' ? 'selected' : '' }}>Panen</option>
                                <option value="maintenance"
                                    {{ old('type', $schedule->type) == 'maintenance' ? 'selected' : '' }}>Perawatan</option>
                                <option value="inspection"
                                    {{ old('type', $schedule->type) == 'inspection' ? 'selected' : '' }}>Inspeksi</option>
                            </select>
                            @error('type')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="scheduled_at" class="block text-sm font-medium text-gray-700 mb-1">Waktu Dijadwalkan
                                *</label>
                            {{-- Format tanggal agar sesuai dengan input datetime-local --}}
                            <input type="datetime-local" id="scheduled_at" name="scheduled_at"
                                value="{{ old('scheduled_at', $schedule->scheduled_at->format('Y-m-d\TH:i')) }}" required
                                class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500">
                            @error('scheduled_at')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="priority" class="block text-sm font-medium text-gray-700 mb-1">Prioritas *</label>
                            <select id="priority" name="priority" required
                                class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500">
                                <option value="low"
                                    {{ old('priority', $schedule->priority) == 'low' ? 'selected' : '' }}>Rendah</option>
                                <option value="medium"
                                    {{ old('priority', $schedule->priority) == 'medium' ? 'selected' : '' }}>Sedang
                                </option>
                                <option value="high"
                                    {{ old('priority', $schedule->priority) == 'high' ? 'selected' : '' }}>Tinggi</option>
                                <option value="urgent"
                                    {{ old('priority', $schedule->priority) == 'urgent' ? 'selected' : '' }}>Mendesak
                                </option>
                            </select>
                            @error('priority')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Input untuk Status, penting untuk form edit --}}
                        <div>
                            <label for="status" class="block text-sm font-medium text-gray-700 mb-1">Status *</label>
                            <select id="status" name="status" required
                                class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500">
                                <option value="pending"
                                    {{ old('status', $schedule->status) == 'pending' ? 'selected' : '' }}>Tertunda</option>
                                <option value="in_progress"
                                    {{ old('status', $schedule->status) == 'in_progress' ? 'selected' : '' }}>Sedang
                                    Dikerjakan</option>
                                <option value="completed"
                                    {{ old('status', $schedule->status) == 'completed' ? 'selected' : '' }}>Selesai
                                </option>
                                <option value="cancelled"
                                    {{ old('status', $schedule->status) == 'cancelled' ? 'selected' : '' }}>Dibatalkan
                                </option>
                            </select>
                            @error('status')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="assigned_to" class="block text-sm font-medium text-gray-700 mb-1">Tugaskan Kepada
                                (Opsional)</label>
                            <select id="assigned_to" name="assigned_to"
                                class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500">
                                <option value="">-- Pilih Pengguna --</option>
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}"
                                        {{ old('assigned_to', $schedule->assigned_to) == $user->id ? 'selected' : '' }}>
                                        {{ $user->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('assigned_to')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="field_id" class="block text-sm font-medium text-gray-700 mb-1">Lahan
                                (Opsional)</label>
                            <select id="field_id" name="field_id"
                                class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500">
                                <option value="">-- Pilih Lahan --</option>
                                @foreach ($fields as $field)
                                    <option value="{{ $field->id }}"
                                        {{ old('field_id', $schedule->field_id) == $field->id ? 'selected' : '' }}>
                                        {{ $field->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('field_id')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="crop_id" class="block text-sm font-medium text-gray-700 mb-1">Tanaman
                                (Opsional)</label>
                            <select id="crop_id" name="crop_id"
                                class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500">
                                <option value="">-- Pilih Tanaman --</option>
                                @foreach ($crops as $crop)
                                    <option value="{{ $crop->id }}"
                                        {{ old('crop_id', $schedule->crop_id) == $crop->id ? 'selected' : '' }}>
                                        {{ $crop->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('crop_id')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div>
                        <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Deskripsi</label>
                        <textarea id="description" name="description" rows="4"
                            class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500">{{ old('description', $schedule->description) }}</textarea>
                        @error('description')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="px-6 py-4 bg-gray-50 flex justify-end">
                    <a href="{{ route('schedules.index') }}"
                        class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 mr-2">
                        Batal
                    </a>
                    <button type="submit"
                        class="px-4 py-2 text-sm font-medium text-white bg-green-600 border border-transparent rounded-md shadow-sm hover:bg-green-700">
                        Simpan Perubahan
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
