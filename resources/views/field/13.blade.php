@extends('layout.app')
@section('content')
    <!-- Area Konten Halaman -->
    <div class="p-6 lg:p-8 space-y-6 max-w-4xl mx-auto">
        <!-- Header -->
        <div class="text-center">
            <h1 class="text-3xl font-bold text-gray-800">Add New Land</h1>
            <p class="mt-1 text-gray-600">Review your information before submitting</p>
        </div>

        <!-- Stepper -->
        <div class="w-full">
            <div class="flex items-center justify-between">
                <!-- Step 1: Complete -->
                <div class="flex-1 flex items-center gap-4 border-b-4 border-green-600 pb-4">
                    <div class="w-8 h-8 rounded-full bg-green-600 text-white flex items-center justify-center font-bold"><svg
                            xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                clip-rule="evenodd" />
                        </svg></div>
                    <span class="font-medium text-gray-600">Basic Info</span>
                </div>
                <!-- Step 2: Complete -->
                <div class="flex-1 flex items-center gap-4 border-b-4 border-green-600 pb-4 justify-center">
                    <div class="w-8 h-8 rounded-full bg-green-600 text-white flex items-center justify-center font-bold">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                clip-rule="evenodd" />
                        </svg></div>
                    <span class="font-medium text-gray-600">Map Location</span>
                </div>
                <!-- Step 3: Complete -->
                <div class="flex-1 flex items-center gap-4 border-b-4 border-green-600 pb-4 justify-center">
                    <div class="w-8 h-8 rounded-full bg-green-600 text-white flex items-center justify-center font-bold">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                clip-rule="evenodd" />
                        </svg></div>
                    <span class="font-medium text-gray-600">Land Details</span>
                </div>
                <!-- Step 4: Active -->
                <div class="flex-1 flex items-center gap-4 border-b-4 border-green-600 pb-4 justify-end">
                    <div class="w-8 h-8 rounded-full bg-green-600 text-white flex items-center justify-center font-bold">4
                    </div>
                    <span class="font-semibold text-green-600">Review</span>
                </div>
            </div>
        </div>

        <!-- Review Container -->
        <div class="bg-white p-8 rounded-lg shadow-sm">
            <h2 class="text-xl font-bold text-gray-800 mb-6">Review Your Information</h2>

            <!-- Basic Information Section -->
            <div class="pb-6 border-b">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-lg font-semibold text-gray-700">Basic Information</h3>
                    <a href="#"
                        class="text-sm font-medium text-green-600 hover:text-green-800 flex items-center gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                            <path fill-rule="evenodd"
                                d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                clip-rule="evenodd" />
                        </svg>
                        Edit
                    </a>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-4 text-sm">
                    <div>
                        <p class="text-gray-500">Land Name</p>
                        <p class="font-semibold text-gray-800">Kebun Jagung Utara</p>
                    </div>
                    <div>
                        <p class="text-gray-500">Land Type</p>
                        <p class="font-semibold text-gray-800">Agricultural</p>
                    </div>
                    <div>
                        <p class="text-gray-500">Owner</p>
                        <p class="font-semibold text-gray-800">PT Agro Makmur</p>
                    </div>
                    <div>
                        <p class="text-gray-500">Registration Date</p>
                        <p class="font-semibold text-gray-800">15 June 2023</p>
                    </div>
                </div>
            </div>

            <!-- Map Location Section -->
            <div class="py-6 border-b">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-lg font-semibold text-gray-700">Map Location</h3>
                    <a href="#"
                        class="text-sm font-medium text-green-600 hover:text-green-800 flex items-center gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                            <path fill-rule="evenodd"
                                d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                clip-rule="evenodd" />
                        </svg>
                        Edit
                    </a>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="grid grid-cols-2 gap-x-8 gap-y-4 text-sm">
                        <div>
                            <p class="text-gray-500">Latitude</p>
                            <p class="font-semibold text-gray-800">-7.2575</p>
                        </div>
                        <div>
                            <p class="text-gray-500">Longitude</p>
                            <p class="font-semibold text-gray-800">112.7521</p>
                        </div>
                        <div class="col-span-2">
                            <p class="text-gray-500">Address</p>
                            <p class="font-semibold text-gray-800">Jl. Raya Bogor Km. 30, Cimanggis, Depok</p>
                        </div>
                        <div class="col-span-2">
                            <p class="text-gray-500">Region</p>
                            <p class="font-semibold text-gray-800">West Java</p>
                        </div>
                    </div>
                    <div class="h-48 bg-gray-200 rounded-lg">
                        <img src="https://placehold.co/400x200/e2e8f0/4a5568?text=Map+Preview" alt="Map Preview"
                            class="w-full h-full object-cover rounded-lg">
                    </div>
                </div>
            </div>

            <!-- Land Details Section -->
            <div class="py-6">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-lg font-semibold text-gray-700">Land Details</h3>
                    <a href="#"
                        class="text-sm font-medium text-green-600 hover:text-green-800 flex items-center gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                            <path fill-rule="evenodd"
                                d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                clip-rule="evenodd" />
                        </svg>
                        Edit
                    </a>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-4 text-sm">
                    <div>
                        <p class="text-gray-500">Total Area</p>
                        <p class="font-semibold text-gray-800">5.2 hectares</p>
                    </div>
                    <div>
                        <p class="text-gray-500">Soil Type</p>
                        <p class="font-semibold text-gray-800">Alluvial</p>
                    </div>
                    <div>
                        <p class="text-gray-500">Current Crop</p>
                        <p class="font-semibold text-gray-800">Corn</p>
                    </div>
                    <div>
                        <p class="text-gray-500">Irrigation Type</p>
                        <p class="font-semibold text-gray-800">Drip Irrigation</p>
                    </div>
                    <div class="col-span-2">
                        <p class="text-gray-500">Land Description</p>
                        <p class="font-semibold text-gray-800">This land has been used for corn cultivation for the past 5
                            years. It has good drainage and receives adequate sunlight throughout the year. The soil is
                            fertile and has been enriched with organic fertilizers.</p>
                    </div>
                    <div>
                        <p class="text-gray-500">Land Status</p>
                        <p class="font-semibold text-gray-800 inline-flex items-center gap-2"><span
                                class="w-2 h-2 bg-green-500 rounded-full"></span> Active</p>
                    </div>
                    <div>
                        <p class="text-gray-500">Certificate Number</p>
                        <p class="font-semibold text-gray-800">SHM-12345678</p>
                    </div>
                </div>
            </div>

            <!-- Confirmation & Actions -->
            <div class="pt-8 mt-8 border-t">
                <div class="flex items-start">
                    <div class="flex items-center h-5">
                        <input id="confirmation" name="confirmation" type="checkbox"
                            class="focus:ring-green-500 h-4 w-4 text-green-600 border-gray-300 rounded">
                    </div>
                    <div class="ml-3 text-sm">
                        <label for="confirmation" class="font-medium text-gray-700">I confirm that all the information
                            provided is accurate and complete. I understand that providing false information may result in
                            the rejection of my registration.</label>
                    </div>
                </div>
                <div class="mt-8 flex justify-between">
                    <button type="button"
                        class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                        Previous
                    </button>
                    <button type="submit"
                        class="bg-gray-400 cursor-not-allowed py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white focus:outline-none">
                        Submit Land Registration
                    </button>
                </div>
            </div>

        </div>
    </div>
@endsection
