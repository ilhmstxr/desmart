@extends('layout.app')
@section('content')

    <div class="p-6 lg:p-8 space-y-6">
        <nav class="text-sm font-medium text-gray-500" aria-label="Breadcrumb">
            <ol class="list-none p-0 inline-flex">
                <li class="flex items-center">
                    <a href="#" class="hover:text-gray-700">Dashboard</a>
                    <svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569 9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"/></svg>
                </li>
                <li class="flex items-center">
                    <a href="#" class="hover:text-gray-700">Livestock</a>
                    <svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569 9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"/></svg>
                </li>
                <li class="text-gray-400">
                   Add New Livestock
                </li>
            </ol>
        </nav>
        
        <div class="bg-blue-600 text-white p-5 rounded-lg">
            <h2 class="text-lg font-bold">Add New Livestock</h2>
            <p class="text-sm text-blue-200">Select an animal type to begin</p>
            <div id="animal-type-selector" class="mt-4 grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4 text-center">
                {{-- Added data-animal attribute to each div for JS targeting --}}
                <div data-animal="Cattle" class="animal-choice bg-blue-700 hover:bg-blue-800 p-4 rounded-lg cursor-pointer border-2 border-blue-500">
                    <p class="font-semibold">Cattle</p>
                </div>
                 <div data-animal="Pig" class="animal-choice bg-blue-700 hover:bg-blue-800 p-4 rounded-lg cursor-pointer border-2 border-blue-500">
                    <p class="font-semibold">Pig</p>
                </div>
                 <div data-animal="Sheep" class="animal-choice bg-blue-700 hover:bg-blue-800 p-4 rounded-lg cursor-pointer border-2 border-blue-500">
                    <p class="font-semibold">Sheep</p>
                </div>
                 <div data-animal="Goat" class="animal-choice bg-blue-700 hover:bg-blue-800 p-4 rounded-lg cursor-pointer border-2 border-blue-500">
                    <p class="font-semibold">Goat</p>
                </div>
                 <div data-animal="Rabbit" class="animal-choice bg-blue-700 hover:bg-blue-800 p-4 rounded-lg cursor-pointer border-2 border-blue-500">
                    <p class="font-semibold">Rabbit</p>
                </div>
                <div data-animal="Poultry" class="animal-choice bg-blue-700 hover:bg-blue-800 p-4 rounded-lg cursor-pointer border-2 border-blue-500">
                    <p class="font-semibold">Poultry</p>
                </div>
            </div>
        </div>

        {{-- Added id and style="display: none;" to hide the form initially --}}
        <div id="add-livestock-form" style="display: none;">
            <div class="bg-blue-50 p-5 rounded-t-lg flex items-center gap-4">
                {{-- Added id to the h2 for easy content update --}}
                <h2 id="livestock-form-title" class="text-lg font-bold text-blue-800"></h2>
                <p class="text-sm text-blue-700">Fill in the details to add a new animal to your farm inventory</p>
            </div>
            <form action="#" method="POST" class="bg-white p-8 rounded-b-lg shadow-sm space-y-8">
                <div class="border-b pb-8">
                    <h3 class="text-lg font-semibold text-gray-800">Basic Information</h3>
                    <div class="mt-6 grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="animal-id" class="block text-sm font-medium text-gray-700">Animal ID *</label>
                            <input type="text" name="animal-id" id="animal-id" placeholder="Unique identifier for this animal (e.g., ear tag number)" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        </div>
                         <div>
                            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                            <input type="text" name="name" id="name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        </div>
                        <div>
                            <label for="breed" class="block text-sm font-medium text-gray-700">Breed *</label>
                            <select id="breed" name="breed" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                <option>Select breed</option>
                            </select>
                        </div>
                        <div>
                            <label for="gender" class="block text-sm font-medium text-gray-700">Gender *</label>
                             <select id="gender" name="gender" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                <option>Select gender</option>
                            </select>
                        </div>
                         <div class="relative">
                            <label for="dob" class="block text-sm font-medium text-gray-700">Date of Birth</label>
                            <input type="text" name="dob" id="dob" placeholder="dd/mm/yyyy" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm pr-10">
                            <div class="absolute inset-y-0 right-0 top-6 pr-3 flex items-center pointer-events-none">
                               <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>
                            </div>
                        </div>
                        <div>
                            <label for="age" class="block text-sm font-medium text-gray-700">Age</label>
                            <div class="mt-1 relative rounded-md shadow-sm">
                               <input type="text" name="age" id="age" placeholder="Leave empty if birth date is provided" class="focus:ring-blue-500 focus:border-blue-500 block w-full pr-16 sm:text-sm border-gray-300 rounded-md">
                               <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                   <span class="text-gray-500 sm:text-sm">months</span>
                               </div>
                           </div>
                        </div>
                        <div>
                            <label for="weight" class="block text-sm font-medium text-gray-700">Weight</label>
                            <div class="mt-1 relative rounded-md shadow-sm">
                               <input type="text" name="weight" id="weight" class="focus:ring-blue-500 focus:border-blue-500 block w-full pr-12 sm:text-sm border-gray-300 rounded-md">
                               <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                   <span class="text-gray-500 sm:text-sm">kg</span>
                               </div>
                           </div>
                        </div>
                        <div>
                            <label for="markings" class="block text-sm font-medium text-gray-700">Color/Markings</label>
                            <input type="text" name="markings" id="markings" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        </div>
                    </div>
                </div>

                <div class="border-b pb-8">
                    <h3 class="text-lg font-semibold text-gray-800">Origin Information</h3>
                     <div class="mt-6 grid grid-cols-1 md:grid-cols-2 gap-6">
                         <div>
                            <label for="acq-type" class="block text-sm font-medium text-gray-700">Acquisition Type *</label>
                            <select id="acq-type" name="acq-type" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                <option>Select acquisition type</option>
                            </select>
                        </div>
                        <div class="relative">
                            <label for="acq-date" class="block text-sm font-medium text-gray-700">Acquisition Date *</label>
                            <input type="text" name="acq-date" id="acq-date" placeholder="dd/mm/yyyy" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm pr-10">
                            <div class="absolute inset-y-0 right-0 top-6 pr-3 flex items-center pointer-events-none">
                               <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>
                            </div>
                        </div>
                        <div>
                            <label for="source-vendor" class="block text-sm font-medium text-gray-700">Source/Vendor</label>
                            <input type="text" name="source-vendor" id="source-vendor" placeholder="Where the animal was acquired from (if purchased)" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        </div>
                        <div>
                            <label for="acq-cost" class="block text-sm font-medium text-gray-700">Acquisition Cost</label>
                             <div class="mt-1 relative rounded-md shadow-sm">
                               <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                   <span class="text-gray-500 sm:text-sm">$</span>
                               </div>
                               <input type="text" name="acq-cost" id="acq-cost" class="focus:ring-blue-500 focus:border-blue-500 block w-full pl-7 sm:text-sm border-gray-300 rounded-md">
                           </div>
                        </div>
                         <div>
                            <label for="dam-id" class="block text-sm font-medium text-gray-700">Dam ID</label>
                            <input type="text" name="dam-id" id="dam-id" placeholder="Mother's identification number" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        </div>
                         <div>
                            <label for="sire-id" class="block text-sm font-medium text-gray-700">Sire ID</label>
                            <input type="text" name="sire-id" id="sire-id" placeholder="Father's identification number" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        </div>
                     </div>
                </div>

                <div class="border-b pb-8">
                    <h3 class="text-lg font-semibold text-gray-800">Location & Management</h3>
                    <div class="mt-6 grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="location" class="block text-sm font-medium text-gray-700">Current Location *</label>
                            <select id="location" name="location" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"><option>Select location</option></select>
                        </div>
                         <div>
                            <label for="group" class="block text-sm font-medium text-gray-700">Group/Flock</label>
                            <select id="group" name="group" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"><option>Select group</option></select>
                        </div>
                         <div>
                            <label for="purpose" class="block text-sm font-medium text-gray-700">Purpose</label>
                            <select id="purpose" name="purpose" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"><option>Select purpose</option></select>
                        </div>
                         <div>
                            <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                            <select id="status" name="status" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"><option>Select status</option></select>
                        </div>
                    </div>
                </div>
                
                 <div class="border-b pb-8">
                    <h3 class="text-lg font-semibold text-gray-800">Health & Veterinary</h3>
                    <div class="mt-6 grid grid-cols-1 md:grid-cols-2 gap-6">
                         <div>
                            <label for="health-status" class="block text-sm font-medium text-gray-700">Health Status</label>
                            <select id="health-status" name="health-status" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"><option>Select health status</option></select>
                        </div>
                        <div>
                            <label for="vac-status" class="block text-sm font-medium text-gray-700">Vaccination Status</label>
                            <select id="vac-status" name="vac-status" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"><option>Select vaccination status</option></select>
                        </div>
                        <div class="relative">
                            <label for="vet-check" class="block text-sm font-medium text-gray-700">Last Veterinary Check</label>
                            <input type="text" name="vet-check" id="vet-check" placeholder="dd/mm/yyyy" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm pr-10">
                            <div class="absolute inset-y-0 right-0 top-6 pr-3 flex items-center pointer-events-none">
                               <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>
                            </div>
                        </div>
                        <div class="relative">
                            <label for="next-check" class="block text-sm font-medium text-gray-700">Next Schedule Check</label>
                            <input type="text" name="next-check" id="next-check" placeholder="dd/mm/yyyy" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm pr-10">
                            <div class="absolute inset-y-0 right-0 top-6 pr-3 flex items-center pointer-events-none">
                               <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>
                            </div>
                        </div>
                        <div class="md:col-span-2">
                           <label for="med-history" class="block text-sm font-medium text-gray-700">Medical History</label>
                           <textarea id="med-history" name="med-history" rows="3" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" placeholder="Note any relevant medical history or ongoing conditions"></textarea>
                        </div>
                    </div>
                </div>

                 <div class="border-b pb-8">
                    <h3 class="text-lg font-semibold text-gray-800">Additional Information</h3>
                    <div class="mt-6 grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                           <label for="feed-req" class="block text-sm font-medium text-gray-700">Feed Requirements</label>
                           <textarea id="feed-req" name="feed-req" rows="3" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" placeholder="e.g. grass fed, free access to hay"></textarea>
                        </div>
                         <div>
                           <label for="care-req" class="block text-sm font-medium text-gray-700">Special Care Requirements</label>
                           <textarea id="care-req" name="care-req" rows="3" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"></textarea>
                        </div>
                        <div class="md:col-span-2">
                           <label for="notes" class="block text-sm font-medium text-gray-700">Notes</label>
                           <textarea id="notes" name="notes" rows="3" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" placeholder="Add any additional notes or information about this animal"></textarea>
                        </div>
                    </div>
                </div>

                <div>
                    <h3 class="text-lg font-semibold text-gray-800">Animal Image</h3>
                    <div class="mt-4 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                        <div class="space-y-1 text-center">
                            <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true"><path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" /></svg>
                            <div class="flex text-sm text-gray-600">
                                <label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-blue-600 hover:text-blue-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-blue-500">
                                    <span>Upload a file</span>
                                    <input id="file-upload" name="file-upload" type="file" class="sr-only">
                                </label>
                                <p class="pl-1">or drag and drop</p>
                            </div>
                            <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                        </div>
                    </div>
                </div>

                 <div class="pt-5">
                    <div class="flex justify-end gap-3">
                        <button type="button" class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                            Cancel
                        </button>
                        <button type="submit" class="bg-blue-100 py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-blue-700 hover:bg-blue-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-300">
                            Save on Draft
                        </button>
                        <button type="submit" class="bg-blue-600 py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            Add Animal
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const animalChoices = document.querySelectorAll('.animal-choice');
        const livestockForm = document.getElementById('add-livestock-form');
        const formTitle = document.getElementById('livestock-form-title');

        // Define the class lists for active and inactive states based on your TailwindCSS setup
        const activeClasses = ['bg-white', 'text-blue-700', 'border-white'];
        const inactiveClasses = ['bg-blue-700', 'hover:bg-blue-800', 'text-white', 'border-blue-500'];

        animalChoices.forEach(choice => {
            choice.addEventListener('click', function () {
                // Get the selected animal name from the data attribute
                const animalName = this.dataset.animal;

                // Show the form
                livestockForm.style.display = 'block';

                // Update the form title
                formTitle.textContent = `Add New ${animalName}`;

                // Update the styles for all choices
                animalChoices.forEach(c => {
                    // Reset all to inactive state first
                    c.classList.remove(...activeClasses);
                    c.classList.add(...inactiveClasses);
                });

                // Apply active style to the clicked choice
                this.classList.remove(...inactiveClasses);
                this.classList.add(...activeClasses);
                
                // Optional: Scroll to the form for better user experience on small screens
                livestockForm.scrollIntoView({ behavior: 'smooth', block: 'start' });
            });
        });
    });
</script>
@endpush