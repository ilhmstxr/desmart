@extends('layout.app')
@section('content')
  <!-- Area Konten Halaman -->
    <div class="max-w-3xl mx-auto p-6 lg:p-8">
        <!-- Header -->
        <div class="text-center mb-8">
             <h1 class="text-3xl font-bold text-gray-800">Add Plant Care Record</h1>
             <p class="mt-1 text-gray-600">Document maintenance activities for your plants</p>
        </div>

        <!-- Form Container -->
        <div class="bg-white p-8 rounded-lg shadow-md">
            <form action="#" method="POST" class="space-y-8">
                
                <!-- Basic Information -->
                <div>
                    <h3 class="text-lg font-semibold text-gray-800 border-b pb-3 mb-6">Basic Information</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="land-plot" class="block text-sm font-medium text-gray-700">Land/Plot</label>
                            <select id="land-plot" name="land-plot" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                                <option>Select land or plot</option>
                            </select>
                        </div>
                        <div>
                            <label for="plant-crop" class="block text-sm font-medium text-gray-700">Plant/Crop Type</label>
                            <select id="plant-crop" name="plant-crop" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                                <option>Select plant or crop</option>
                            </select>
                        </div>
                        <div class="relative">
                            <label for="activity-date" class="block text-sm font-medium text-gray-700">Date of Activity</label>
                            <input type="text" name="activity-date" id="activity-date" value="06/15/2023" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm pr-10">
                            <div class="absolute inset-y-0 right-0 top-6 pr-3 flex items-center pointer-events-none">
                               <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Care Activity -->
                <div>
                    <h3 class="text-lg font-semibold text-gray-800 border-b pb-3 mb-6">Care Activity</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="activity-type" class="block text-sm font-medium text-gray-700">Activity Type</label>
                            <select id="activity-type" name="activity-type" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                                <option>Select activity type</option>
                            </select>
                        </div>
                         <div>
                            <label for="duration" class="block text-sm font-medium text-gray-700">Duration (hours)</label>
                            <input type="text" name="duration" id="duration" placeholder="e.g., 2.5" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                        </div>
                         <div class="md:col-span-2">
                            <label for="weather" class="block text-sm font-medium text-gray-700">Weather Conditions</label>
                            <select id="weather" name="weather" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                                <option>Select weather conditions</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Materials Used -->
                <div>
                    <h3 class="text-lg font-semibold text-gray-800 border-b pb-3 mb-6">Materials Used</h3>
                    <div>
                        <label for="notes" class="block text-sm font-medium text-gray-700">Notes</label>
                        <textarea id="notes" name="notes" rows="4" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm" placeholder="Add any additional observations or notes about this activity..."></textarea>
                    </div>
                </div>

                <!-- Photos -->
                <div>
                    <h3 class="text-lg font-semibold text-gray-800 border-b pb-3 mb-6">Photos (Optional)</h3>
                     <div>
                        <label class="block text-sm font-medium text-gray-700">Upload Photos</label>
                        <div class="mt-1 flex justify-center px-6 pt-8 pb-8 border-2 border-gray-300 border-dashed rounded-md">
                            <div class="space-y-1 text-center">
                                <svg class="mx-auto h-12 w-12 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5m-13.5-9L12 3m0 0l4.5 4.5M12 3v13.5" />
                                </svg>
                                <div class="flex text-sm text-gray-600">
                                    <label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-green-600 hover:text-green-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-green-500">
                                        <span>Click to upload</span>
                                        <input id="file-upload" name="file-upload" type="file" class="sr-only" multiple>
                                    </label>
                                    <p class="pl-1">or drag and drop</p>
                                </div>
                                <p class="text-xs text-gray-500">PNG, JPG, up to 5MB</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Personnel -->
                <div>
                    <h3 class="text-lg font-semibold text-gray-800 border-b pb-3 mb-6">Personnel</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="performed-by" class="block text-sm font-medium text-gray-700">Performed By</label>
                            <input type="text" name="performed-by" id="performed-by" placeholder="Enter name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                        </div>
                        <div>
                            <label for="workers" class="block text-sm font-medium text-gray-700">Number of Workers</label>
                            <input type="text" name="workers" id="workers" placeholder="e.g., 3" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                        </div>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="pt-5">
                    <div class="flex justify-end">
                        <button type="submit" class="bg-green-600 py-2 px-6 border border-transparent rounded-md shadow-sm text-sm font-medium text-white hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                            Save Plant Care Record
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection