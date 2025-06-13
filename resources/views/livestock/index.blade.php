@extends('layout.app')
@section('section')
    <!-- Area Konten Halaman -->
    <div class="p-6 space-y-6">
        <!-- Header Halaman -->
        <div class="flex flex-wrap items-center justify-between gap-4">
            <div>
                <h2 class="text-2xl font-bold text-gray-800">Livestock Management</h2>
            </div>
            <div class="flex items-center gap-4">
                <button
                    class="bg-blue-600 text-white px-4 py-2 rounded-lg shadow-sm hover:bg-blue-700 flex items-center gap-2 text-sm font-medium">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                            clip-rule="evenodd" />
                    </svg>
                    Add Livestock
                </button>
                <button
                    class="bg-white border border-gray-300 text-gray-700 px-4 py-2 rounded-lg shadow-sm hover:bg-gray-50 flex items-center gap-2 text-sm font-medium">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
                    </svg>
                    Export Data
                </button>
            </div>
        </div>

        <!-- Livestock Overview -->
        <div>
            <h3 class="text-lg font-semibold text-gray-700">Livestock Overview</h3>
            <p class="text-sm text-gray-500">Manage and monitor your farm animals</p>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mt-4">
                <!-- Card Total -->
                <div class="bg-white p-4 rounded-lg shadow-sm flex items-center gap-4">
                    <div class="bg-blue-100 text-blue-600 p-3 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M17.204 17.204A9 9 0 116.796 6.796a9 9 0 0110.408 10.408z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.204 17.204L21 21" />
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Total Livestock</p>
                        <p class="text-2xl font-bold text-gray-800">248</p>
                        <p class="text-xs text-green-500">↑ 4.3% from last month</p>
                    </div>
                </div>
                <!-- Card Sehat -->
                <div class="bg-white p-4 rounded-lg shadow-sm flex items-center gap-4">
                    <div class="bg-green-100 text-green-600 p-3 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Healthy</p>
                        <p class="text-2xl font-bold text-gray-800">230</p>
                        <p class="text-xs text-green-500">↑ 2.1% from last week</p>
                    </div>
                </div>
                <!-- Card Sakit -->
                <div class="bg-white p-4 rounded-lg shadow-sm flex items-center gap-4">
                    <div class="bg-red-100 text-red-600 p-3 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Sick/treatment</p>
                        <p class="text-2xl font-bold text-gray-800">12</p>
                        <p class="text-xs text-red-500">↓ 1.5% from last week</p>
                    </div>
                </div>
                <!-- Card Hamil -->
                <div class="bg-white p-4 rounded-lg shadow-sm flex items-center gap-4">
                    <div class="bg-purple-100 text-purple-600 p-3 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Pregnant</p>
                        <p class="text-2xl font-bold text-gray-800">18</p>
                        <p class="text-xs text-green-500">↑ 3.2% from last month</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Livestock Records -->
        <div class="bg-white p-4 rounded-lg shadow-sm">
            <h3 class="text-lg font-semibold text-gray-700 mb-4">Livestock Records</h3>
            <div class="flex flex-wrap items-center justify-between gap-4">
                <div class="flex items-center gap-4">
                    <select
                        class="border border-gray-300 rounded-lg py-2 px-3 bg-white text-gray-700 focus:outline-none text-sm">
                        <option>All Categories</option>
                        <option>Cattle</option>
                        <option>Sheep</option>
                        <option>Goat</option>
                        <option>Poultry</option>
                    </select>
                    <select
                        class="border border-gray-300 rounded-lg py-2 px-3 bg-white text-gray-700 focus:outline-none text-sm">
                        <option>All Status</option>
                        <option>Healthy</option>
                        <option>Pregnant</option>
                        <option>Treatment</option>
                        <option>Laying</option>
                    </select>
                </div>
                <div class="relative">
                    <input type="text" placeholder="Search livestock..."
                        class="pl-10 pr-4 py-2 border border-gray-300 rounded-lg w-full md:w-64 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <svg class="w-5 h-5 text-gray-400 absolute top-1/2 left-3 -translate-y-1/2"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
            </div>

            <!-- Tabel Data -->
            <div class="overflow-x-auto mt-6">
                <table class="w-full text-sm text-left text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3">ID</th>
                            <th scope="col" class="px-6 py-3">Type</th>
                            <th scope="col" class="px-6 py-3">Breed</th>
                            <th scope="col" class="px-6 py-3">Age</th>
                            <th scope="col" class="px-6 py-3">Status</th>
                            <th scope="col" class="px-6 py-3">Location</th>
                            <th scope="col" class="px-6 py-3 text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b">
                            <td class="px-6 py-4 font-medium text-gray-900">LV-001</td>
                            <td class="px-6 py-4">Cattle</td>
                            <td class="px-6 py-4">Holstein</td>
                            <td class="px-6 py-4">3 years</td>
                            <td class="px-6 py-4"><span
                                    class="text-xs font-medium text-green-800 bg-green-100 px-2 py-1 rounded-full">Healthy</span>
                            </td>
                            <td class="px-6 py-4">Barn A</td>
                            <td class="px-6 py-4 text-center space-x-2"><a href="#"
                                    class="font-medium text-blue-600 hover:underline">View</a><a href="#"
                                    class="font-medium text-yellow-600 hover:underline">Edit</a><a href="#"
                                    class="font-medium text-red-600 hover:underline">Delete</a></td>
                        </tr>
                        <tr class="bg-white border-b">
                            <td class="px-6 py-4 font-medium text-gray-900">LV-002</td>
                            <td class="px-6 py-4">Cattle</td>
                            <td class="px-6 py-4">Angus</td>
                            <td class="px-6 py-4">2 years</td>
                            <td class="px-6 py-4"><span
                                    class="text-xs font-medium text-purple-800 bg-purple-100 px-2 py-1 rounded-full">Pregnant</span>
                            </td>
                            <td class="px-6 py-4">Barn B</td>
                            <td class="px-6 py-4 text-center space-x-2"><a href="#"
                                    class="font-medium text-blue-600 hover:underline">View</a><a href="#"
                                    class="font-medium text-yellow-600 hover:underline">Edit</a><a href="#"
                                    class="font-medium text-red-600 hover:underline">Delete</a></td>
                        </tr>
                        <tr class="bg-white border-b">
                            <td class="px-6 py-4 font-medium text-gray-900">LV-003</td>
                            <td class="px-6 py-4">Sheep</td>
                            <td class="px-6 py-4">Merino</td>
                            <td class="px-6 py-4">1.5 years</td>
                            <td class="px-6 py-4"><span
                                    class="text-xs font-medium text-red-800 bg-red-100 px-2 py-1 rounded-full">Treatment</span>
                            </td>
                            <td class="px-6 py-4">Pen C</td>
                            <td class="px-6 py-4 text-center space-x-2"><a href="#"
                                    class="font-medium text-blue-600 hover:underline">View</a><a href="#"
                                    class="font-medium text-yellow-600 hover:underline">Edit</a><a href="#"
                                    class="font-medium text-red-600 hover:underline">Delete</a></td>
                        </tr>
                        <tr class="bg-white border-b">
                            <td class="px-6 py-4 font-medium text-gray-900">LV-004</td>
                            <td class="px-6 py-4">Goat</td>
                            <td class="px-6 py-4">Boer</td>
                            <td class="px-6 py-4">2 years</td>
                            <td class="px-6 py-4"><span
                                    class="text-xs font-medium text-green-800 bg-green-100 px-2 py-1 rounded-full">Healthy</span>
                            </td>
                            <td class="px-6 py-4">Field D</td>
                            <td class="px-6 py-4 text-center space-x-2"><a href="#"
                                    class="font-medium text-blue-600 hover:underline">View</a><a href="#"
                                    class="font-medium text-yellow-600 hover:underline">Edit</a><a href="#"
                                    class="font-medium text-red-600 hover:underline">Delete</a></td>
                        </tr>
                        <tr class="bg-white">
                            <td class="px-6 py-4 font-medium text-gray-900">LV-005</td>
                            <td class="px-6 py-4">Poultry</td>
                            <td class="px-6 py-4">Leghorn</td>
                            <td class="px-6 py-4">8 months</td>
                            <td class="px-6 py-4"><span
                                    class="text-xs font-medium text-sky-800 bg-sky-100 px-2 py-1 rounded-full">Laying</span>
                            </td>
                            <td class="px-6 py-4">Coop A</td>
                            <td class="px-6 py-4 text-center space-x-2"><a href="#"
                                    class="font-medium text-blue-600 hover:underline">View</a><a href="#"
                                    class="font-medium text-yellow-600 hover:underline">Edit</a><a href="#"
                                    class="font-medium text-red-600 hover:underline">Delete</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Paginasi -->
            <div class="flex flex-col md:flex-row justify-between items-center mt-6 text-sm">
                <p class="text-gray-700 mb-2 md:mb-0">
                    Showing <span class="font-semibold">1</span> to <span class="font-semibold">5</span> of <span
                        class="font-semibold">42</span> results
                </p>
                <nav class="flex items-center gap-1" aria-label="Pagination">
                    <a href="#" class="p-2 text-gray-500 hover:bg-gray-100 rounded-md">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="#" class="px-3 py-1 rounded-md font-medium bg-blue-600 text-white">1</a>
                    <a href="#" class="px-3 py-1 rounded-md font-medium text-gray-700 hover:bg-gray-100">2</a>
                    <a href="#" class="px-3 py-1 rounded-md font-medium text-gray-700 hover:bg-gray-100">3</a>
                    <span class="px-3 py-1 text-gray-500">...</span>
                    <a href="#" class="px-3 py-1 rounded-md font-medium text-gray-700 hover:bg-gray-100">8</a>
                    <a href="#" class="px-3 py-1 rounded-md font-medium text-gray-700 hover:bg-gray-100">9</a>
                    <a href="#" class="p-2 text-gray-500 hover:bg-gray-100 rounded-md">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </nav>
            </div>
        </div>
    </div>
@endsection
