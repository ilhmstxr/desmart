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
                    <a href="#" class="hover:text-gray-700">Land Management</a>
                    <svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"/></svg>
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
                    <div class="w-8 h-8 rounded-full bg-green-600 text-white flex items-center justify-center font-bold"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" /></svg></div>
                    <span class="font-medium text-gray-600">Basic Info</span>
                </div>
                 <!-- Step 2: Complete -->
                <div class="flex-1 flex items-center gap-4 border-b-4 border-green-600 pb-4 justify-center">
                    <div class="w-8 h-8 rounded-full bg-green-600 text-white flex items-center justify-center font-bold"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" /></svg></div>
                    <span class="font-medium text-gray-600">Map Location</span>
                </div>
                <!-- Step 3: Active -->
                 <div class="flex-1 flex items-center gap-4 border-b-4 border-green-600 pb-4 justify-center">
                    <div class="w-8 h-8 rounded-full bg-green-600 text-white flex items-center justify-center font-bold">3</div>
                    <span class="font-semibold text-green-600">Land Details</span>
                </div>
                <!-- Step 4: Inactive -->
                 <div class="flex-1 flex items-center gap-4 border-b-4 border-gray-200 pb-4 justify-end">
                    <div class="w-8 h-8 rounded-full bg-gray-200 text-gray-500 flex items-center justify-center font-bold">4</div>
                    <span class="font-medium text-gray-500">Review</span>
                </div>
            </div>
        </div>


        <!-- Form -->
        <div>
            <div class="bg-green-600 text-white p-5 rounded-t-lg flex items-center justify-between">
                <div class="flex items-center gap-4">
                     <div class="bg-green-700 p-2 rounded-md">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M4 4a2 2 0 012-2h8a2 2 0 012 2v12a1 1 0 110 2h-3a1 1 0 01-1-1v-2a1 1 0 00-1-1H9a1 1 0 00-1 1v2a1 1 0 01-1 1H4a1 1 0 110-2V4zm3 1h2v2H7V5zm2 4H7v2h2V9zm2-4h2v2h-2V5zm2 4h-2v2h2V9z" clip-rule="evenodd" /></svg>
                     </div>
                    <div>
                        <h2 class="text-xl font-bold">Land Details</h2>
                        <p class="text-sm text-green-200">Provide specific details about your land's soil, water, and current usage.</p>
                    </div>
                </div>
                 <button type="button" class="text-sm font-medium text-white hover:bg-green-700 border border-white rounded-md px-3 py-1">Auto-fill from analysis</button>
            </div>
            <form action="#" method="POST" class="bg-white p-8 rounded-b-lg shadow-sm">
                <div class="space-y-10">
                    
                    <!-- Soil Information -->
                    <div>
                        <h3 class="text-lg font-semibold text-gray-800 border-b pb-3 mb-6">Soil Information</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                            <div>
                                <label for="soil-type" class="block text-sm font-medium text-gray-700">Soil Type</label>
                                <select id="soil-type" name="soil-type" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm"><option>Select soil type</option></select>
                            </div>
                             <div>
                                <label for="soil-texture" class="block text-sm font-medium text-gray-700">Soil Texture</label>
                                <select id="soil-texture" name="soil-texture" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm"><option>Select texture</option></select>
                            </div>
                            <div>
                                <label for="organic-matter" class="block text-sm font-medium text-gray-700">Organic Matter</label>
                                <div class="mt-1 relative rounded-md shadow-sm">
                                   <input type="text" name="organic-matter" id="organic-matter" class="focus:ring-green-500 focus:border-green-500 block w-full pr-12 sm:text-sm border-gray-300 rounded-md">
                                   <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none"><span class="text-gray-500 sm:text-sm">%</span></div>
                               </div>
                            </div>
                            <div>
                                <label for="ph-level" class="block text-sm font-medium text-gray-700">pH Level</label>
                                <input type="text" name="ph-level" id="ph-level" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                            </div>
                             <div>
                                <label for="nitrogen-level" class="block text-sm font-medium text-gray-700">Nitrogen (N) Level</label>
                                <input type="text" name="nitrogen-level" id="nitrogen-level" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                            </div>
                             <div>
                                <label for="phosphorus-level" class="block text-sm font-medium text-gray-700">Phosphorus (P) Level</label>
                                <input type="text" name="phosphorus-level" id="phosphorus-level" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                            </div>
                              <div>
                                <label for="potassium-level" class="block text-sm font-medium text-gray-700">Potassium (K) Level</label>
                                <input type="text" name="potassium-level" id="potassium-level" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                            </div>
                            <div>
                                <label for="ec" class="block text-sm font-medium text-gray-700">EC (Electrical Cond.)</label>
                                <div class="mt-1 relative rounded-md shadow-sm">
                                   <input type="text" name="ec" id="ec" class="focus:ring-green-500 focus:border-green-500 block w-full pr-20 sm:text-sm border-gray-300 rounded-md">
                                   <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none"><span class="text-gray-500 sm:text-sm">mS/cm</span></div>
                               </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Water Source & Irrigation -->
                    <div>
                        <h3 class="text-lg font-semibold text-gray-800 border-b pb-3 mb-6">Water Source & Irrigation</h3>
                         <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                            <div>
                                <label for="water-source" class="block text-sm font-medium text-gray-700">Primary Water Source</label>
                                <select id="water-source" name="water-source" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm"><option>Select water source</option></select>
                            </div>
                             <div>
                                <label for="irrigation" class="block text-sm font-medium text-gray-700">Irrigation System</label>
                                <select id="irrigation" name="irrigation" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm"><option>Select system</option></select>
                            </div>
                             <div>
                                <label for="water-quality" class="block text-sm font-medium text-gray-700">Water Quality</label>
                                <select id="water-quality" name="water-quality" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm"><option>Select quality</option></select>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Current Land Use -->
                    <div>
                        <h3 class="text-lg font-semibold text-gray-800 border-b pb-3 mb-6">Current Land Use</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                             <div>
                                <label for="current-use" class="block text-sm font-medium text-gray-700">Current Use</label>
                                <input type="text" name="current-use" id="current-use" placeholder="e.g. Fallow, Cornfield" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                            </div>
                             <div>
                                <label for="last-crop" class="block text-sm font-medium text-gray-700">Last Crop Grown</label>
                                <input type="text" name="last-crop" id="last-crop" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                            </div>
                             <div class="md:col-span-2">
                                <label for="use-notes" class="block text-sm font-medium text-gray-700">Notes on Current Use</label>
                                <textarea id="use-notes" name="use-notes" rows="3" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm"></textarea>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Land Documents & Attachments -->
                    <div>
                        <h3 class="text-lg font-semibold text-gray-800 border-b pb-3 mb-6">Land Documents & Attachments</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-start">
                            <div class="space-y-6">
                                <div>
                                    <label for="doc-type" class="block text-sm font-medium text-gray-700">Document Type</label>
                                    <select id="doc-type" name="doc-type" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm"><option>Select document type</option></select>
                                </div>
                                <div>
                                    <label for="doc-number" class="block text-sm font-medium text-gray-700">Document Number</label>
                                    <input type="text" name="doc-number" id="doc-number" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                                </div>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Upload Attachments</label>
                                <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                                    <div class="space-y-1 text-center">
                                        <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true"><path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" /></svg>
                                        <div class="flex text-sm text-gray-600">
                                            <label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-green-600 hover:text-green-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-green-500">
                                                <span>Upload files</span>
                                                <input id="file-upload" name="file-upload" type="file" class="sr-only" multiple>
                                            </label>
                                        </div>
                                        <p class="text-xs text-gray-500">PDF, PNG, JPG up to 10MB</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="pt-5 flex justify-between">
                        <button type="button" class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" /></svg>
                            Previous: Map Location
                        </button>
                        <button type="submit" class="bg-green-600 py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 flex items-center gap-2">
                            Next: Review
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" /></svg>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection