@extends('layouts.app')

@section('content')
<div class="p-8">
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-900">Create Schedule</h1>
        <p class="text-gray-600">Add a new task or activity to the schedule</p>
    </div>

    <div class="bg-white rounded-lg shadow overflow-hidden">
        <form action="{{ route('schedules.store') }}" method="POST">
            @csrf
            <div class="p-6 space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Title</label>
                        <input type="text" id="title" name="title" value="{{ old('title') }}" required
                               class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500">
                        @error('title')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="type" class="block text-sm font-medium text-gray-700 mb-1">Type</label>
                        <select id="type" name="type" required
                                class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500">
                            <option value="">Select Type</option>
                            <option value="planting" {{ old('type') == 'planting' ? 'selected' : '' }}>Planting</option>
                            <option value="irrigation" {{ old('type') == 'irrigation' ? 'selected' : '' }}>Irrigation</option>
                            <option value="fertilizing" {{ old('type') == 'fertilizing' ? 'selected' : '' }}>Fertilizing</option>
                            <option value="harvesting" {{ old('type') == 'harvesting' ? 'selected' : '' }}>Harvesting</option>
                            <option value="maintenance" {{ old('type') == 'maintenance' ? 'selected' : '' }}>Maintenance</option>
                            <option value="inspection" {{ old('type') == 'inspection' ? 'selected' : '' }}>Inspection</option>
                        </select>
                        @error('type')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="scheduled_at" class="block text-sm font-medium text-gray-700 mb-1">Schedule Date & Time</label>
                        <input type="datetime-local" id="scheduled_at" name="scheduled_at" value="{{ old('scheduled_at') }}" required
                               class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500">
                        @error('scheduled_at')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="priority" class="block text-sm font-medium text-gray-700 mb-1">Priority</label>
                        <select id="priority" name="priority" required
                                class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500">
                            <option value="low" {{ old('priority') == 'low' ? 'selected' : '' }}>Low</option>
                            <option value="medium" {{ old('priority') == 'medium' ? 'selected' : '' }} selected>Medium</option>
                            <option value="high" {{ old('priority') == 'high' ? 'selected' : '' }}>High</option>
                            <option value="urgent" {{ old('priority') == 'urgent' ? 'selected' : '' }}>Urgent</option>
                        </select>
                        @error('priority')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="field_id" class="block text-sm font-medium text-gray-700 mb-1">Field (Optional)</label>
                        <select id="field_id" name="field_id"
                                class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500">
                            <option value="">Select Field</option>
                            @foreach($fields as $field)
                                <option value="{{ $field->id }}" {{ old('field_id') == $field->id ? 'selected' : '' }}>
                                    {{ $field->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('field_id')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="crop_id" class="block text-sm font-medium text-gray-700 mb-1">Crop (Optional)</label>
                        <select id="crop_id" name="crop_id"
                                class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500">
                            <option value="">Select Crop</option>
                            @foreach($crops as $crop)
                                <option value="{{ $crop->id }}" {{ old('crop_id') == $crop->id ? 'selected' : '' }}>
                                    {{ $crop->name }} - {{ $crop->variety }}
                                </option>
                            @endforeach
                        </select>
                        @error('crop_id')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="assigned_to" class="block text-sm font-medium text-gray-700 mb-1">Assign To (Optional)</label>
                        <select id="assigned_to" name="assigned_to"
                                class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500">
                            <option value="">Select User</option>
                            @foreach($users as $user)
                                <option value="{{ $user->id }}" {{ old('assigned_to') == $user->id ? 'selected' : '' }}>
                                    {{ $user->name }} ({{ ucfirst($user->role) }})
                                </option>
                            @endforeach
                        </select>
                        @error('assigned_to')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div>
                    <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                    <textarea id="description" name="description" rows="4"
                              class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500">{{ old('description') }}</textarea>
                    @error('description')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="px-6 py-4 bg-gray-50 flex justify-end">
                <a href="{{ route('schedules.index') }}" class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 mr-2">
                    Cancel
                </a>
                <button type="submit" class="px-4 py-2 text-sm font-medium text-white bg-green-600 border border-transparent rounded-md shadow-sm hover:bg-green-700">
                    Create Schedule
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
