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
                <!-- Step 1: Active -->
                <div class="flex-1 flex items-center gap-4 border-b-4 border-green-600 pb-4">
                    <div class="w-8 h-8 rounded-full bg-green-600 text-white flex items-center justify-center font-bold">1
                    </div>
                    <span class="font-semibold text-green-600">Basic Info</span>
                </div>
                <!-- Step 2: Inactive -->
                <div class="flex-1 flex items-center gap-4 border-b-4 border-gray-200 pb-4 justify-center">
                    <div class="w-8 h-8 rounded-full bg-gray-200 text-gray-500 flex items-center justify-center font-bold">2
                    </div>
                    <span class="font-medium text-gray-500">Map Location</span>
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
                            d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.428A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z" />
                    </svg>
                </div>
                <div>
                    <h2 class="text-xl font-bold">Add New Land</h2>
                    <p class="text-sm text-green-200">Register a new land parcel to your farm inventory</p>
                </div>
            </div>
            <form action="#" method="POST" class="bg-white p-8 rounded-b-lg shadow-sm">
                <div class="space-y-8">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="land-name" class="block text-sm font-medium text-gray-700">Land Name *</label>
                            <input type="text" name="land-name" id="land-name" placeholder="e.g. North Field"
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                            <p class="mt-1 text-xs text-gray-500">A unique name for this land parcel</p>
                        </div>
                        <div>
                            <label for="land-id" class="block text-sm font-medium text-gray-700">Land ID *</label>
                            <input type="text" name="land-id" id="land-id" placeholder="e.g. FIELD-001"
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                            <p class="mt-1 text-xs text-gray-500">Unique identifier for this land parcel</p>
                        </div>
                        <div>
                            <label for="land-type" class="block text-sm font-medium text-gray-700">Land Type *</label>
                            <select id="land-type" name="land-type"
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                                <option>Select land type</option>
                            </select>
                        </div>
                        <div>
                            <label for="ownership-status" class="block text-sm font-medium text-gray-700">Ownership Status
                                *</label>
                            <select id="ownership-status" name="ownership-status"
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                                <option>Select ownership status</option>
                            </select>
                        </div>
                        <div class="relative">
                            <label for="acq-date" class="block text-sm font-medium text-gray-700">Acquisition Date</label>
                            <input type="text" name="acq-date" id="acq-date" placeholder="mm/dd/yyyy"
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm pr-10">
                            <div class="absolute inset-y-0 right-0 top-6 pr-3 flex items-center pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </div>
                        </div>
                        <div>
                            <label for="acq-cost" class="block text-sm font-medium text-gray-700">Acquisition Cost</label>
                            <div class="mt-1 relative rounded-md shadow-sm">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <span class="text-gray-500 sm:text-sm">$</span>
                                </div>
                                <input type="text" name="acq-cost" id="acq-cost" placeholder="0.00"
                                    class="focus:ring-green-500 focus:border-green-500 block w-full pl-7 sm:text-sm border-gray-300 rounded-md">
                            </div>
                        </div>
                        <div class="md:col-span-2">
                            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                            <textarea id="description" name="description" rows="3"
                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm"
                                placeholder="Brief description of the land parcel"></textarea>
                        </div>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="pt-5">
                    <div class="flex justify-end">
                        <button type="submit"
                            class="bg-green-600 py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 flex items-center gap-2">
                            Next: Map Location
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                            </svg>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
