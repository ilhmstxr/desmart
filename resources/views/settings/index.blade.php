@extends('layouts.app')

@section('content')
<div class="p-8">
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-900">System Settings</h1>
        <p class="text-gray-600">Configure system-wide settings and preferences</p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
        <!-- Settings Navigation -->
        <div class="lg:col-span-1">
            <nav class="space-y-2">
                <a href="{{ route('settings.index') }}" class="block px-3 py-2 rounded-lg bg-green-50 text-green-700 border border-green-200">
                    System Settings
                </a>
                <a href="{{ route('settings.profile') }}" class="block px-3 py-2 rounded-lg text-gray-600 hover:bg-gray-50">
                    Profile Settings
                </a>
            </nav>
        </div>

        <!-- Settings Content -->
        <div class="lg:col-span-3">
            <form action="{{ route('settings.update') }}" method="POST">
                @csrf
                @method('PUT')
                
                @foreach($settings as $group => $groupSettings)
                <div class="bg-white rounded-lg shadow mb-6">
                    <div class="px-6 py-4 border-b border-gray-200">
                        <h3 class="text-lg font-medium text-gray-900 capitalize">{{ str_replace('_', ' ', $group) }} Settings</h3>
                    </div>
                    <div class="p-6 space-y-4">
                        @foreach($groupSettings as $setting)
                        <div>
                            <label for="{{ $setting->key }}" class="block text-sm font-medium text-gray-700 mb-1">
                                {{ ucfirst(str_replace('_', ' ', $setting->key)) }}
                            </label>
                            @if($setting->description)
                                <p class="text-xs text-gray-500 mb-2">{{ $setting->description }}</p>
                            @endif
                            
                            @if($setting->type === 'boolean')
                                <div class="flex items-center">
                                    <input type="checkbox" id="{{ $setting->key }}" name="{{ $setting->key }}" 
                                           {{ $setting->value ? 'checked' : '' }}
                                           class="h-4 w-4 text-green-600 focus:ring-green-500 border-gray-300 rounded">
                                    <label for="{{ $setting->key }}" class="ml-2 text-sm text-gray-700">Enable</label>
                                </div>
                            @elseif($setting->type === 'integer')
                                <input type="number" id="{{ $setting->key }}" name="{{ $setting->key }}" 
                                       value="{{ $setting->value }}"
                                       class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500">
                            @else
                                <input type="text" id="{{ $setting->key }}" name="{{ $setting->key }}" 
                                       value="{{ $setting->value }}"
                                       class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500">
                            @endif
                        </div>
                        @endforeach
                    </div>
                </div>
                @endforeach

                <!-- Default Settings if none exist -->
                @if($settings->isEmpty())
                <div class="bg-white rounded-lg shadow">
                    <div class="px-6 py-4 border-b border-gray-200">
                        <h3 class="text-lg font-medium text-gray-900">General Settings</h3>
                    </div>
                    <div class="p-6 space-y-4">
                        <div>
                            <label for="site_name" class="block text-sm font-medium text-gray-700">Site Name</label>
                            <input type="text" id="site_name" name="site_name" value="AgriManager" 
                                   class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500">
                        </div>
                        <div>
                            <label for="default_location" class="block text-sm font-medium text-gray-700">Default Location</label>
                            <input type="text" id="default_location" name="default_location" 
                                   class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500">
                        </div>
                        <div>
                            <label for="weather_update_interval" class="block text-sm font-medium text-gray-700">Weather Update Interval (hours)</label>
                            <input type="number" id="weather_update_interval" name="weather_update_interval" value="6" 
                                   class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500">
                        </div>
                        <div class="flex items-center">
                            <input type="checkbox" id="email_notifications" name="email_notifications" checked
                                   class="h-4 w-4 text-green-600 focus:ring-green-500 border-gray-300 rounded">
                            <label for="email_notifications" class="ml-2 text-sm text-gray-700">Enable Email Notifications</label>
                        </div>
                    </div>
                </div>
                @endif

                <div class="flex justify-end">
                    <button type="submit" class="bg-green-600 hover:bg-green-700 text-white px-6 py-2 rounded-lg">
                        Save Settings
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
