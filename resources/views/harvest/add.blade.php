@extends('layout.app')
@section('content')
  
    <div class="max-w-3xl mx-auto p-6 lg:p-8">
        <div class="text-center mb-8">
             <h1 class="text-3xl font-bold text-gray-800">Add Harvest Record</h1>
             <p class="mt-1 text-gray-600">Document your crop harvesting activities and yields</p>
        </div>

        <div class="bg-white p-8 rounded-lg shadow-md">
            <form action="#" method="POST" class="space-y-8">
                
                <div>
                    <h3 class="text-lg font-semibold text-gray-800 border-b pb-3 mb-6">Basic Information</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="land-plot" class="block text-sm font-medium text-gray-700">Land/Plot *</label>
                            <select id="land-plot" name="land-plot" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                                <option>Select land or plot</option>
                            </select>
                        </div>
                        <div>
                            <label for="crop-type" class="block text-sm font-medium text-gray-700">Crop Type *</label>
                            <select id="crop-type" name="crop-type" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                                <option>Select crop type</option>
                            </select>
                        </div>
                        <div class="relative">
                            <label for="harvest-date" class="block text-sm font-medium text-gray-700">Harvest Date *</label>
                            <input type="text" name="harvest-date" id="harvest-date" value="06/15/2023" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm pr-10">
                            <div class="absolute inset-y-0 right-0 top-6 pr-3 flex items-center pointer-events-none">
                               <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>
                            </div>
                        </div>
                         <div>
                            <label for="harvest-season" class="block text-sm font-medium text-gray-700">Harvest Season</label>
                            <select id="harvest-season" name="harvest-season" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                                <option>Select season</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div>
                    <h3 class="text-lg font-semibold text-gray-800 border-b pb-3 mb-6">Harvest Details</h3>
                     <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                         <div>
                            <label for="total-weight" class="block text-sm font-medium text-gray-700">Total Harvest Weight (kg) *</label>
                            <input type="text" name="total-weight" id="total-weight" placeholder="e.g., 500.5" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                        </div>
                         <div>
                            <label for="harvested-area" class="block text-sm font-medium text-gray-700">Harvested Area (hectares) *</label>
                            <input type="text" name="harvested-area" id="harvested-area" placeholder="e.g., 2.5" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                        </div>
                          <div>
                            <label for="yield" class="block text-sm font-medium text-gray-700">Yield per Hectare (kg/ha)</label>
                            <input type="text" name="yield" id="yield" readonly class="mt-1 block w-full border-gray-300 rounded-md shadow-sm bg-gray-50 text-gray-500 sm:text-sm" placeholder="Calculated automatically">
                        </div>
                         <div>
                            <label for="harvest-quality" class="block text-sm font-medium text-gray-700">Harvest Quality *</label>
                            <select id="harvest-quality" name="harvest-quality" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                                <option>Select quality</option>
                            </select>
                        </div>
                         <div class="md:col-span-2">
                             <label class="block text-sm font-medium text-gray-700">Quality Distribution (optional)</label>
                             <div class="mt-2 grid grid-cols-1 md:grid-cols-2 gap-6 items-center">
                                 <div class="space-y-4">
                                      <div class="grid grid-cols-3 gap-2 items-center">
                                          <label for="grade-a" class="text-sm text-gray-600">Grade A (%)</label>
                                          <input type="text" id="grade-a" placeholder="e.g., 80" class="col-span-2 block w-full border-gray-300 rounded-md shadow-sm sm:text-sm">
                                      </div>
                                       <div class="grid grid-cols-3 gap-2 items-center">
                                          <label for="grade-b" class="text-sm text-gray-600">Grade B (%)</label>
                                          <input type="text" id="grade-b" placeholder="e.g., 10" class="col-span-2 block w-full border-gray-300 rounded-md shadow-sm sm:text-sm">
                                      </div>
                                       <div class="grid grid-cols-3 gap-2 items-center">
                                          <label for="rejected" class="text-sm text-gray-600">Rejected (%)</label>
                                          <input type="text" id="rejected" placeholder="e.g., 0" class="col-span-2 block w-full border-gray-300 rounded-md shadow-sm sm:text-sm">
                                      </div>
                                      <p class="text-xs text-gray-500">Total should equal 100%</p>
                                 </div>
                                 <div class="flex flex-col items-center">
                                     <div class="w-32 h-32 rounded-full bg-gray-200 flex items-center justify-center">
                                        <img src="https://placehold.co/128x128/E2E8F0/4A5568?text=Chart" alt="Pie chart placeholder" class="rounded-full">
                                     </div>
                                     <div class="mt-2 text-xs space-y-1">
                                         <p class="flex items-center"><span class="w-2 h-2 rounded-full bg-blue-500 mr-2"></span>Grade A</p>
                                         <p class="flex items-center"><span class="w-2 h-2 rounded-full bg-green-500 mr-2"></span>Grade B</p>
                                         <p class="flex items-center"><span class="w-2 h-2 rounded-full bg-yellow-500 mr-2"></span>Grade C</p>
                                         <p class="flex items-center"><span class="w-2 h-2 rounded-full bg-red-500 mr-2"></span>Rejected</p>
                                     </div>
                                 </div>
                             </div>
                         </div>
                    </div>
                </div>
                
                 <div>
                    <div class="grid grid-cols-1 gap-6">
                        <div>
                            <label for="weather" class="block text-sm font-medium text-gray-700">Weather Conditions During Harvest</label>
                            <select id="weather" name="weather" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                                <option>Select weather condition</option>
                            </select>
                        </div>
                        <div>
                            <label for="notes" class="block text-sm font-medium text-gray-700">Notes</label>
                            <textarea id="notes" name="notes" rows="3" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm" placeholder="Add any additional observations or notes about this harvest..."></textarea>
                        </div>
                    </div>
                </div>

                <div>
                     <h3 class="text-lg font-semibold text-gray-800 border-b pb-3 mb-6">Market Information</h3>
                     <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                           <label for="market-price" class="block text-sm font-medium text-gray-700">Market Price (per kg)</label>
                           <div class="mt-1 relative rounded-md shadow-sm">
                              <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none"><span class="text-gray-500 sm:text-sm">Rp</span></div>
                              <input type="text" name="market-price" id="market-price" placeholder="e.g., 15000" class="focus:ring-green-500 focus:border-green-500 block w-full pl-8 sm:text-sm border-gray-300 rounded-md">
                          </div>
                       </div>
                        <div>
                           <label for="est-revenue" class="block text-sm font-medium text-gray-700">Estimated Revenue</label>
                           <div class="mt-1 relative rounded-md shadow-sm">
                              <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none"><span class="text-gray-500 sm:text-sm">Rp</span></div>
                              <input type="text" name="est-revenue" id="est-revenue" readonly class="focus:ring-green-500 focus:border-green-500 block w-full pl-8 sm:text-sm border-gray-300 rounded-md bg-gray-50 text-gray-500" placeholder="Calculated automatically">
                          </div>
                       </div>
                       <div>
                           <label for="buyer" class="block text-sm font-medium text-gray-700">Buyer/Customer</label>
                           <input type="text" name="buyer" id="buyer" placeholder="e.g., PT Agro Makmur" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                       </div>
                       <div>
                           <label for="sales-status" class="block text-sm font-medium text-gray-700">Sales Status</label>
                           <select id="sales-status" name="sales-status" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                               <option>Select status</option>
                           </select>
                       </div>
                    </div>
                </div>

                <div>
                     <h3 class="text-lg font-semibold text-gray-800 border-b pb-3 mb-6">Photos (Optional)</h3>
                     <div>
                        <label class="block text-sm font-medium text-gray-700">Upload Harvest Photos</label>
                        <div class="mt-1 flex justify-center px-6 pt-8 pb-8 border-2 border-gray-300 border-dashed rounded-md">
                           <div class="space-y-1 text-center"><svg class="mx-auto h-12 w-12 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5m-13.5-9L12 3m0 0l4.5 4.5M12 3v13.5" /></svg>
                               <div class="flex text-sm text-gray-600"><label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-green-600 hover:text-green-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-green-500"><span>Click to upload</span><input id="file-upload" name="file-upload" type="file" class="sr-only" multiple></label><p class="pl-1">or drag and drop</p></div>
                               <p class="text-xs text-gray-500">PNG, JPG up to 5MB</p>
                           </div>
                       </div>
                   </div>
                </div>
                <div>
                     <h3 class="text-lg font-semibold text-gray-800 border-b pb-3 mb-6">Personnel</h3>
                     <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                           <label for="harvest-manager" class="block text-sm font-medium text-gray-700">Harvest Manager *</label>
                           <input type="text" name="harvest-manager" id="harvest-manager" placeholder="Enter name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                       </div>
                        <div>
                           <label for="workers" class="block text-sm font-medium text-gray-700">Number of Workers *</label>
                           <input type="text" name="workers" id="workers" placeholder="e.g., 10" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                       </div>
                    </div>
                </div>


                <div class="pt-5">
                    <div class="flex justify-end">
                        <button type="submit" class="bg-green-600 py-2 px-6 border border-transparent rounded-md shadow-sm text-sm font-medium text-white hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                            Save Harvest Record
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
@endsection