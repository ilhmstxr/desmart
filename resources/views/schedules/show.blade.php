@extends('layouts.app')

@section('content')
<div class="p-8">
    <div class="flex justify-between items-center mb-8">
        <div>
            <h1 class="text-3xl font-bold text-gray-900">Schedule Details</h1>
            <p class="text-gray-600">View task information and status</p>
        </div>
        <div class="flex gap-2">
            <a href="{{ route('schedules.edit', $schedule) }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg flex items-center gap-2">
                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                </svg>
                Edit
            </a>
            <a href="{{ route('schedules.index') }}" class="bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded-lg flex items-center gap-2">
                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
                Back
            </a>
        </div>
    </div>

    <div class="bg-white rounded-lg shadow overflow-hidden">
        <div class="px-6 py-4 border-b border-gray-200 flex justify-between items-center">
            <h3 class="text-lg font-medium text-gray-900">{{ $schedule->title }}</h3>
            <span class="px-3 py-1 text-sm font-medium rounded-full 
                @if($schedule->status === 'completed') bg-green-100 text-green-800
                @elseif($schedule->status === 'in_progress') bg-blue-100 text-blue-800
                @elseif($schedule->status === 'cancelled') bg-red-100 text-red-800
                @else bg-yellow-100 text-yellow-800 @endif">
                {{ ucfirst(str_replace('_', ' ', $schedule->status)) }}
            </span>
        </div>
        <div class="p-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div>
                    <h4 class="text-sm font-medium text-gray-500 mb-1">Type</h4>
                    <p class="text-gray-900">{{ ucfirst($schedule->type) }}</p>
                </div>
                <div>
                    <h4 class="text-sm font-medium text-gray-500 mb-1">Priority</h4>
                    <p>
                        <span class="px-2 py-1 text-xs font-medium rounded-full 
                            @if($schedule->priority === 'urgent') bg-red-100 text-red-800
                            @elseif($schedule->priority === 'high') bg-orange-100 text-orange-800
                            @elseif($schedule->priority === 'medium') bg-yellow-100 text-yellow-800
                            @else bg-gray-100 text-gray-800 @endif">
                            {{ ucfirst($schedule->priority) }}
                        </span>
                    </p>
                </div>
                <div>
                    <h4 class="text-sm font-medium text-gray-500 mb-1">Scheduled Date & Time</h4>
                    <p class="text-gray-900">{{ $schedule->scheduled_at->format('M d, Y H:i') }}</p>
                </div>
                <div>
                    <h4 class="text-sm font-medium text-gray-500 mb-1">Completed Date & Time</h4>
                    <p class="text-gray-900">{{ $schedule->completed_at ? $schedule->completed_at->format('M d, Y H:i') : 'Not completed yet' }}</p>
                </div>
                <div>
                    <h4 class="text-sm font-medium text-gray-500 mb-1">Field</h4>
                    <p class="text-gray-900">{{ $schedule->field ? $schedule->field->name : 'Not assigned to a field' }}</p>
                </div>
                <div>
                    <h4 class="text-sm font-medium text-gray-500 mb-1">Crop</h4>
                    <p class="text-gray-900">{{ $schedule->crop ? $schedule->crop->name . ' - ' . $schedule->crop->variety : 'Not assigned to a crop' }}</p>
                </div>
                <div>
                    <h4 class="text-sm font-medium text-gray-500 mb-1">Assigned To</h4>
                    <p class="text-gray-900">{{ $schedule->assignedTo ? $schedule->assignedTo->name : 'Unassigned' }}</p>
                </div>
                <div>
                    <h4 class="text-sm font-medium text-gray-500 mb-1">Created By</h4>
                    <p class="text-gray-900">{{ $schedule->createdBy->name }}</p>
                </div>
            </div>

            <div class="mb-6">
                <h4 class="text-sm font-medium text-gray-500 mb-1">Description</h4>
                <div class="bg-gray-50 p-4 rounded-lg">
                    <p class="text-gray-900 whitespace-pre-line">{{ $schedule->description ?: 'No description provided.' }}</p>
                </div>
            </div>

            @if($schedule->status !== 'completed' && $schedule->status !== 'cancelled')
            <div class="flex justify-end gap-2">
                <form action="{{ route('schedules.update', $schedule) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="title" value="{{ $schedule->title }}">
                    <input type="hidden" name="description" value="{{ $schedule->description }}">
                    <input type="hidden" name="type" value="{{ $schedule->type }}">
                    <input type="hidden" name="scheduled_at" value="{{ $schedule->scheduled_at->format('Y-m-d\TH:i') }}">
                    <input type="hidden" name="priority" value="{{ $schedule->priority }}">
                    <input type="hidden" name="field_id" value="{{ $schedule->field_id }}">
                    <input type="hidden" name="crop_id" value="{{ $schedule->crop_id }}">
                    <input type="hidden" name="assigned_to" value="{{ $schedule->assigned_to }}">
                    <input type="hidden" name="status" value="completed">
                    
                    <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-700">
                        Mark as Completed
                    </button>
                </form>
                
                <form action="{{ route('schedules.update', $schedule) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="title" value="{{ $schedule->title }}">
                    <input type="hidden" name="description" value="{{ $schedule->description }}">
                    <input type="hidden" name="type" value="{{ $schedule->type }}">
                    <input type="hidden" name="scheduled_at" value="{{ $schedule->scheduled_at->format('Y-m-d\TH:i') }}">
                    <input type="hidden" name="priority" value="{{ $schedule->priority }}">
                    <input type="hidden" name="field_id" value="{{ $schedule->field_id }}">
                    <input type="hidden" name="crop_id" value="{{ $schedule->crop_id }}">
                    <input type="hidden" name="assigned_to" value="{{ $schedule->assigned_to }}">
                    <input type="hidden" name="status" value="cancelled">
                    
                    <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded-md hover:bg-red-700">
                        Cancel Task
                    </button>
                </form>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection
