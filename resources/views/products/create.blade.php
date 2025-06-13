@extends('layouts.app')

@section('content')
<div class="p-8">
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-900">Create Product</h1>
        <p class="text-gray-600">Add a new product from your crops to inventory</p>
    </div>

    <div class="bg-white rounded-lg shadow overflow-hidden">
        <form action="{{ route('products.store') }}" method="POST">
            @csrf
            <div class="p-6 space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Product Name</label>
                        <input type="text" id="name" name="name" value="{{ old('name') }}" required
                               class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500">
                        @error('name')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="crop_id" class="block text-sm font-medium text-gray-700 mb-1">Source Crop</label>
                        <select id="crop_id" name="crop_id" required
                                class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500">
                            <option value="">Select Crop</option>
                            @foreach($crops as $crop)
                                <option value="{{ $crop->id }}" {{ old('crop_id') == $crop->id ? 'selected' : '' }}>
                                    {{ $crop->name }} - {{ $crop->variety }} ({{ $crop->field->name }})
                                </option>
                            @endforeach
                        </select>
                        @error('crop_id')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="price_per_unit" class="block text-sm font-medium text-gray-700 mb-1">Price per Unit ($)</label>
                        <input type="number" step="0.01" id="price_per_unit" name="price_per_unit" value="{{ old('price_per_unit') }}" required
                               class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500">
                        @error('price_per_unit')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="cost_per_unit" class="block text-sm font-medium text-gray-700 mb-1">Cost per Unit ($) <span class="text-gray-500">(Optional)</span></label>
                        <input type="number" step="0.01" id="cost_per_unit" name="cost_per_unit" value="{{ old('cost_per_unit') }}"
                               class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500">
                        @error('cost_per_unit')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="unit_type" class="block text-sm font-medium text-gray-700 mb-1">Unit Type</label>
                        <select id="unit_type" name="unit_type" required
                                class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500">
                            <option value="kg" {{ old('unit_type') == 'kg' ? 'selected' : '' }}>Kilogram (kg)</option>
                            <option value="lbs" {{ old('unit_type') == 'lbs' ? 'selected' : '' }}>Pounds (lbs)</option>
                            <option value="pieces" {{ old('unit_type') == 'pieces' ? 'selected' : '' }}>Pieces</option>
                            <option value="boxes" {{ old('unit_type') == 'boxes' ? 'selected' : '' }}>Boxes</option>
                            <option value="bags" {{ old('unit_type') == 'bags' ? 'selected' : '' }}>Bags</option>
                        </select>
                        @error('unit_type')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="category" class="block text-sm font-medium text-gray-700 mb-1">Category <span class="text-gray-500">(Optional)</span></label>
                        <input type="text" id="category" name="category" value="{{ old('category') }}"
                               placeholder="e.g., Vegetables, Fruits, Grains"
                               class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500">
                        @error('category')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="stock_quantity" class="block text-sm font-medium text-gray-700 mb-1">Initial Stock Quantity</label>
                        <input type="number" id="stock_quantity" name="stock_quantity" value="{{ old('stock_quantity') }}" required min="0"
                               class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500">
                        @error('stock_quantity')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="minimum_stock" class="block text-sm font-medium text-gray-700 mb-1">Minimum Stock Alert</label>
                        <input type="number" id="minimum_stock" name="minimum_stock" value="{{ old('minimum_stock', 10) }}" required min="0"
                               class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500">
                        @error('minimum_stock')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div>
                    <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Product Description</label>
                    <textarea id="description" name="description" rows="4" required
                              placeholder="Describe the product quality, characteristics, and any special features..."
                              class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500">{{ old('description') }}</textarea>
                    @error('description')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="px-6 py-4 bg-gray-50 flex justify-end">
                <a href="{{ route('products.index') }}" class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 mr-2">
                    Cancel
                </a>
                <button type="submit" class="px-4 py-2 text-sm font-medium text-white bg-green-600 border border-transparent rounded-md shadow-sm hover:bg-green-700">
                    Create Product
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
