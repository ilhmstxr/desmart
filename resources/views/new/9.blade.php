@extends('layout.app')
@section('content')
 <!-- Area Konten Halaman -->
    <div class="p-6 lg:p-8 space-y-6">
        <!-- Breadcrumb -->
        <nav class="text-sm font-medium text-gray-500" aria-label="Breadcrumb">
            <ol class="list-none p-0 inline-flex">
                <li class="flex items-center">
                    <a href="#" class="hover:text-gray-700">Dashboard</a>
                    <svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"/></svg>
                </li>
                <li class="flex items-center">
                    <a href="#" class="hover:text-gray-700">Plants</a>
                    <svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"/></svg>
                </li>
                <li class="text-gray-400">
                   Add New Plant
                </li>
            </ol>
        </nav>
        
        <!-- Header Halaman -->
        <div class="bg-green-600 text-white p-5 rounded-lg flex items-center gap-4">
             <div class="bg-green-700 p-2 rounded-md">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" /></svg>
             </div>
            <div>
                <h2 class="text-xl font-bold">Add New Plant</h2>
                <p class="text-sm text-green-200">Fill in the details to add a new plant to your farm inventory</p>
            </div>
        </div>

        <!-- Form -->
        <form action="#" method="POST" class="bg-white p-8 rounded-lg shadow-sm space-y-8">
            <!-- Basic Information -->
            <div class="border-b pb-8">
                <h3 class="text-lg font-semibold text-gray-800">Basic Information</h3>
                <div class="mt-6 grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="plant-name" class="block text-sm font-medium text-gray-700">Plant Name *</label>
                        <input type="text" name="plant-name" id="plant-name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                    </div>
                    <div>
                        <label for="plant-type" class="block text-sm font-medium text-gray-700">Plant Type</label>
                        <select id="plant-type" name="plant-type" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                            <option>Select plant type</option>
                        </select>
                    </div>
                    <div>
                        <label for="variety" class="block text-sm font-medium text-gray-700">Variety</label>
                        <input type="text" name="variety" id="variety" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                    </div>
                    <div>
                        <label for="scientific-name" class="block text-sm font-medium text-gray-700">Scientific Name</label>
                        <input type="text" name="scientific-name" id="scientific-name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                    </div>
                </div>
            </div>

             <!-- Growing Details -->
            <div class="border-b pb-8">
                <h3 class="text-lg font-semibold text-gray-800">Growing Details</h3>
                <div class="mt-6 grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="relative">
                        <label for="planting-date" class="block text-sm font-medium text-gray-700">Planting Date *</label>
                        <input type="text" name="planting-date" id="planting-date" placeholder="mm/dd/yyyy" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm pr-10">
                        <div class="absolute inset-y-0 right-0 top-6 pr-3 flex items-center pointer-events-none">
                           <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>
                        </div>
                    </div>
                     <div class="relative">
                        <label for="harvest-date" class="block text-sm font-medium text-gray-700">Expected Harvest Date</label>
                        <input type="text" name="harvest-date" id="harvest-date" placeholder="mm/dd/yyyy" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm pr-10">
                         <div class="absolute inset-y-0 right-0 top-6 pr-3 flex items-center pointer-events-none">
                           <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>
                        </div>
                    </div>
                    <div>
                        <label for="growing-season" class="block text-sm font-medium text-gray-700">Growing Season</label>
                        <select id="growing-season" name="growing-season" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                            <option>Select season</option>
                        </select>
                    </div>
                    <div>
                        <label for="growth-stage" class="block text-sm font-medium text-gray-700">Current Growth Stage</label>
                        <select id="growth-stage" name="growth-stage" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                            <option>Select growth stage</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Location Information -->
            <div class="border-b pb-8">
                <h3 class="text-lg font-semibold text-gray-800">Location Information</h3>
                <div class="mt-6 grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="field-area" class="block text-sm font-medium text-gray-700">Field/Area *</label>
                        <select id="field-area" name="field-area" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                            <option>Select field or area</option>
                        </select>
                    </div>
                     <div>
                        <label for="plot-size" class="block text-sm font-medium text-gray-700">Plot Size</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input type="text" name="plot-size" id="plot-size" class="focus:ring-green-500 focus:border-green-500 block w-full pr-12 sm:text-sm border-gray-300 rounded-md">
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                <span class="text-gray-500 sm:text-sm">m²</span>
                            </div>
                        </div>
                    </div>
                     <div>
                        <label for="row-spacing" class="block text-sm font-medium text-gray-700">Row Spacing</label>
                         <div class="mt-1 relative rounded-md shadow-sm">
                            <input type="text" name="row-spacing" id="row-spacing" class="focus:ring-green-500 focus:border-green-500 block w-full pr-12 sm:text-sm border-gray-300 rounded-md">
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                <span class="text-gray-500 sm:text-sm">cm</span>
                            </div>
                        </div>
                    </div>
                     <div>
                        <label for="plant-spacing" class="block text-sm font-medium text-gray-700">Plant Spacing</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input type="text" name="plant-spacing" id="plant-spacing" class="focus:ring-green-500 focus:border-green-500 block w-full pr-12 sm:text-sm border-gray-300 rounded-md">
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                <span class="text-gray-500 sm:text-sm">cm</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

             <!-- Core Requirements -->
            <div class="border-b pb-8">
                <h3 class="text-lg font-semibold text-gray-800">Core Requirements</h3>
                <div class="mt-6 grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="sunlight-req" class="block text-sm font-medium text-gray-700">Sunlight requirements</label>
                        <select id="sunlight-req" name="sunlight-req" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                            <option>Select sunlight requirement</option>
                        </select>
                    </div>
                    <div>
                        <label for="water-req" class="block text-sm font-medium text-gray-700">Water Requirements</label>
                        <select id="water-req" name="water-req" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                            <option>Select water requirement</option>
                        </select>
                    </div>
                     <div>
                        <label for="soil-type" class="block text-sm font-medium text-gray-700">Soil type</label>
                        <select id="soil-type" name="soil-type" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                            <option>Select soil type</option>
                        </select>
                    </div>
                     <div>
                        <label for="optimal-ph" class="block text-sm font-medium text-gray-700">Optimal pH value</label>
                        <input type="text" placeholder="e.g. 6.0 - 6.8" name="optimal-ph" id="optimal-ph" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                    </div>
                </div>
            </div>

            <!-- Additional Information -->
            <div class="border-b pb-8">
                <h3 class="text-lg font-semibold text-gray-800">Additional Information</h3>
                <div class="mt-6 grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="quantity" class="block text-sm font-medium text-gray-700">Quantity</label>
                        <input type="number" name="quantity" id="quantity" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                    </div>
                    <div>
                        <label for="source" class="block text-sm font-medium text-gray-700">Source</label>
                        <input type="text" name="source" id="source" placeholder="e.g. local nursery, own seeds" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                    </div>
                    <div class="md:col-span-2">
                        <label for="notes" class="block text-sm font-medium text-gray-700">Notes</label>
                        <textarea id="notes" name="notes" rows="3" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm" placeholder="Add any additional notes or special care instructions"></textarea>
                    </div>
                </div>
            </div>

            <!-- Plant Image -->
            <div>
                <h3 class="text-lg font-semibold text-gray-800">Plant Image</h3>
                <div class="mt-4 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                    <div class="space-y-1 text-center">
                        <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                            <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <div class="flex text-sm text-gray-600">
                            <label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-green-600 hover:text-green-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-green-500">
                                <span>Upload a file</span>
                                <input id="file-upload" name="file-upload" type="file" class="sr-only">
                            </label>
                            <p class="pl-1">or drag and drop</p>
                        </div>
                        <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                    </div>
                </div>
            </div>

             <!-- Action Buttons -->
            <div class="pt-5">
                <div class="flex justify-end gap-3">
                    <button type="button" class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                        Cancel
                    </button>
                    <button type="submit" class="bg-gray-200 py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-gray-600 hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400">
                        Save as Draft
                    </button>
                    <button type="submit" class="bg-green-600 py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                        Add Plant
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection