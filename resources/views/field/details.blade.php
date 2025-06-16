@extends('layout.app')
@section('content')
    <!-- Area Konten Halaman -->
    <div class="p-6 lg:p-8 space-y-6">
        <!-- Breadcrumb -->
        <nav class="text-sm font-medium text-gray-500" aria-label="Breadcrumb">
            <ol class="list-none p-0 inline-flex">
                <li class="flex items-center">
                    <a href="#" class="hover:text-gray-700">Dashboard</a>
                    <svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                        <path
                            d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z" />
                    </svg>
                </li>
                <li class="flex items-center">
                    <a href="#" class="hover:text-gray-700">Land Management</a>
                    <svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                        <path
                            d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z" />
                    </svg>
                </li>
                <li class="text-gray-400">
                    Add New Land
                </li>
            </ol>
        </nav>

        <!-- Stepper -->
        <div class="w-full">
            <div class="flex items-center justify-between">
                <!-- Step 1: Complete -->
                <div class="flex-1 flex items-center gap-4 border-b-4 border-green-600 pb-4">
                    <div class="w-8 h-8 rounded-full bg-green-600 text-white flex items-center justify-center font-bold">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <span class="font-medium text-gray-600">Basic Info</span>
                </div>
                <!-- Step 2: Active -->
                <div class="flex-1 flex items-center gap-4 border-b-4 border-green-600 pb-4 justify-center">
                    <div class="w-8 h-8 rounded-full bg-green-600 text-white flex items-center justify-center font-bold">2
                    </div>
                    <span class="font-semibold text-green-600">Map Location</span>
                </div>
                <!-- Step 3: Inactive -->
                <div class="flex-1 flex items-center gap-4 border-b-4 border-gray-200 pb-4 justify-center">
                    <div class="w-8 h-8 rounded-full bg-gray-200 text-gray-500 flex items-center justify-center font-bold">3
                    </div>
                    <span class="font-medium text-gray-500">Land Details</span>
                </div>
                <!-- Step 4: Inactive -->
                <div class="flex-1 flex items-center gap-4 border-b-4 border-gray-200 pb-4 justify-end">
                    <div class="w-8 h-8 rounded-full bg-gray-200 text-gray-500 flex items-center justify-center font-bold">4
                    </div>
                    <span class="font-medium text-gray-500">Review</span>
                </div>
            </div>
        </div>

        <!-- Form -->
        <div>
            <div class="bg-green-600 text-white p-5 rounded-t-lg flex items-center gap-4">
                <div class="bg-green-700 p-2 rounded-md">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                        <path
                            d="M5.05 4.05a7 7 0 119.9 9.9L10 21l-5-7.05a7 7 0 01.05-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" />
                    </svg>
                </div>
                <div>
                    <h2 class="text-xl font-bold">Define Land Boundaries</h2>
                    <p class="text-sm text-green-200">Use the map to mark the boundaries of your land parcel</p>
                </div>
            </div>
            <form action="#" method="POST" class="bg-white p-8 rounded-b-lg shadow-sm">
                <!-- Map and Info Section -->
                <div class="relative bg-gray-200 rounded-lg h-[450px] lg:h-[500px] w-full mb-6">
                    <!-- Placeholder untuk Peta -->
                    <img src="https://placehold.co/1200x600/e2e8f0/4a5568?text=Map+Placeholder" alt="Map Placeholder"
                        class="w-full h-full object-cover rounded-lg">

                    <!-- Search and Map Type -->
                    <div class="absolute top-4 left-4 right-4 flex justify-between items-start gap-4">
                        <div class="relative flex-1 max-w-sm">
                            <input type="text" placeholder="Search for a location..."
                                class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-green-500">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </div>
                        </div>
                        <div class="flex items-center gap-1 bg-white p-1 rounded-lg shadow-md">
                            <button type="button"
                                class="px-3 py-1 text-sm rounded-md text-gray-600 hover:bg-gray-100">Standard</button>
                            <button type="button"
                                class="px-3 py-1 text-sm rounded-md text-gray-600 hover:bg-gray-100">Satellite</button>
                            <button type="button"
                                class="px-3 py-1 text-sm rounded-md bg-green-600 text-white font-semibold shadow-sm">Hybrid</button>
                        </div>
                    </div>

                    <!-- Map Tools -->
                    <div class="absolute top-1/2 left-4 -translate-y-1/2 bg-white rounded-lg shadow-md divide-y">
                        <button type="button" class="p-3 text-gray-600 hover:bg-gray-100 block"><svg
                                xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                                    clip-rule="evenodd" />
                            </svg></button>
                        <button type="button" class="p-3 text-gray-600 hover:bg-gray-100 block"><svg
                                xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5 10a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1z"
                                    clip-rule="evenodd" />
                            </svg></button>
                        <button type="button" class="p-3 text-gray-600 hover:bg-gray-100 block"><svg
                                xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" />
                            </svg></button>
                        <button type="button" class="p-3 text-gray-600 hover:bg-gray-100 block"><svg
                                xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
                                    clip-rule="evenodd" />
                            </svg></button>
                    </div>

                    <!-- Right Info Panel -->
                    <div class="absolute top-20 right-4 bg-white p-4 rounded-lg shadow-md w-64 space-y-3">
                        <div class="text-right text-sm font-semibold">Land Name: North Field</div>
                        <button type="button"
                            class="w-full flex items-center gap-2 text-sm text-gray-700 hover:text-black"><svg
                                xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M5.05 4.05a7 7 0 119.9 9.9L10 19l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                    clip-rule="evenodd" />
                            </svg> My Location</button>
                        <button type="button"
                            class="w-full flex items-center gap-2 text-sm text-gray-700 hover:text-black"><svg
                                xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-500" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                    clip-rule="evenodd" />
                            </svg> Clear Drawing</button>
                        <button type="button"
                            class="w-full flex items-center gap-2 text-sm text-gray-700 hover:text-black"><svg
                                xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM6.293 6.707a1 1 0 010-1.414l3-3a1 1 0 011.414 0l3 3a1 1 0 01-1.414 1.414L11 5.414V13a1 1 0 11-2 0V5.414L7.707 6.707a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd" />
                            </svg> Import Boundary</button>
                        <hr>
                        <p class="text-xs text-gray-500"><span class="font-bold">1.</span> Complete the shape by clicking
                            on the first point.</p>
                        <p class="text-xs text-gray-500"><span class="font-bold">2.</span> Use the edit tool to adjust
                            points if needed.</p>
                        <a href="#" class="text-xs text-blue-600 hover:underline">Need help?</a>
                    </div>
                    <!-- Bottom Left Info Panel -->
                    <div
                        class="absolute bottom-4 left-4 bg-white/80 backdrop-blur-sm p-4 rounded-lg shadow-md w-64 space-y-2">
                        <div>
                            <p class="text-sm text-gray-600">Land Area</p>
                            <p class="text-lg font-bold text-gray-800">0 hectares</p>
                            <p class="text-xs text-gray-500">Draw a polygon to calculate area</p>
                        </div>
                        <hr>
                        <div>
                            <p class="text-sm text-gray-600">Perimeter</p>
                            <p class="text-lg font-bold text-gray-800">0 meters</p>
                        </div>
                        <hr>
                        <div>
                            <p class="text-sm text-gray-600">Points</p>
                            <p class="text-lg font-bold text-gray-800">0 vertices</p>
                        </div>
                    </div>
                </div>

                <!-- Form Fields -->
                <div class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="coordinates" class="block text-sm font-medium text-gray-700">Coordinates</label>
                            <textarea id="coordinates" name="coordinates" rows="3"
                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm"
                                placeholder="GeoJSON format of your land boundary"></textarea>
                        </div>
                        <div>
                            <label for="area" class="block text-sm font-medium text-gray-700">Area (hectares)</label>
                            <div class="mt-1 relative rounded-md shadow-sm">
                                <input type="text" name="area" id="area"
                                    placeholder="Automatically calculated based on map selection"
                                    class="focus:ring-green-500 focus:border-green-500 block w-full pr-12 sm:text-sm border-gray-300 rounded-md bg-gray-50"
                                    readonly>
                                <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                    <span class="text-gray-500 sm:text-sm">ha</span>
                                </div>
                            </div>
                        </div>
                        <div class="md:col-span-2">
                            <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
                            <div class="mt-1 flex rounded-md shadow-sm">
                                <input type="text" name="address" id="address"
                                    placeholder="Physical address of the land"
                                    class="focus:ring-green-500 focus:border-green-500 flex-1 block w-full rounded-none rounded-l-md sm:text-sm border-gray-300">
                                <button type="button"
                                    class="relative -ml-px inline-flex items-center space-x-2 px-4 py-2 border border-gray-300 text-sm font-medium rounded-r-md text-gray-700 bg-gray-50 hover:bg-gray-100 focus:outline-none focus:ring-1 focus:ring-green-500 focus:border-green-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                    <span>Detect</span>
                                </button>
                            </div>
                        </div>
                        <div>
                            <label for="elevation" class="block text-sm font-medium text-gray-700">Average
                                Elevation</label>
                            <div class="mt-1 relative rounded-md shadow-sm">
                                <input type="text" name="elevation" id="elevation"
                                    placeholder="Estimated average elevation above sea level"
                                    class="focus:ring-green-500 focus:border-green-500 block w-full pr-12 sm:text-sm border-gray-300 rounded-md">
                                <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                    <span class="text-gray-500 sm:text-sm">m</span>
                                </div>
                            </div>
                        </div>
                        <div>
                            <label for="slope" class="block text-sm font-medium text-gray-700">Average Slope</label>
                            <div class="mt-1 relative rounded-md shadow-sm">
                                <input type="text" name="slope" id="slope"
                                    placeholder="Estimated average slope of the land"
                                    class="focus:ring-green-500 focus:border-green-500 block w-full pr-12 sm:text-sm border-gray-300 rounded-md">
                                <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                    <span class="text-gray-500 sm:text-sm">%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="pt-5 flex justify-between">
                    <button type="button"
                        class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                        </svg>
                        Previous: Basic Info
                    </button>
                    <button type="submit"
                        class="bg-green-600 py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 flex items-center gap-2">
                        Next: Land Details
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
