@extends('layouts.app')

@section('content')
<div class="p-8">
    <div class="flex justify-between items-center mb-8">
        <div>
            <h1 class="text-3xl font-bold text-gray-900">Products</h1>
            <p class="text-gray-600">Manage your crop products and inventory</p>
        </div>
        <a href="{{ route('products.create') }}" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg flex items-center gap-2">
            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
            </svg>
            Add Product
        </a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
        @forelse($products as $product)
        <div class="bg-white rounded-lg shadow hover:shadow-lg transition-shadow">
            <div class="p-6">
                <div class="flex justify-between items-start mb-4">
                    <div>
                        <h3 class="text-lg font-medium text-gray-900">{{ $product->name }}</h3>
                        <p class="text-sm text-gray-500">SKU: {{ $product->sku }}</p>
                    </div>
                    <span class="px-2 py-1 text-xs font-medium rounded-full 
                        @if($product->status === 'active') bg-green-100 text-green-800
                        @elseif($product->status === 'out_of_stock') bg-red-100 text-red-800
                        @elseif($product->status === 'inactive') bg-gray-100 text-gray-800
                        @else bg-yellow-100 text-yellow-800 @endif">
                        {{ ucfirst(str_replace('_', ' ', $product->status)) }}
                    </span>
                </div>

                <div class="space-y-2 mb-4">
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-600">Price:</span>
                        <span class="font-medium">${{ number_format($product->price_per_unit, 2) }}/{{ $product->unit_type }}</span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-600">Stock:</span>
                        <span class="font-medium {{ $product->isLowStock() ? 'text-red-600' : 'text-gray-900' }}">
                            {{ $product->stock_quantity }} {{ $product->unit_type }}
                        </span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-600">Crop:</span>
                        <span class="font-medium">{{ $product->crop->name }}</span>
                    </div>
                    @if($product->cost_per_unit)
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-600">Profit Margin:</span>
                        <span class="font-medium text-green-600">{{ number_format($product->profit_margin, 1) }}%</span>
                    </div>
                    @endif
                </div>

                <p class="text-sm text-gray-600 mb-4 line-clamp-2">{{ $product->description }}</p>

                @if($product->isLowStock())
                <div class="mb-4 p-2 bg-red-50 border border-red-200 rounded text-xs text-red-700">
                    <strong>Low Stock Alert:</strong> Only {{ $product->stock_quantity }} {{ $product->unit_type }} remaining
                </div>
                @endif

                <div class="flex gap-2">
                    <a href="{{ route('products.show', $product) }}" class="flex-1 bg-blue-600 hover:bg-blue-700 text-white text-center py-2 px-3 rounded text-sm">
                        View
                    </a>
                    <a href="{{ route('products.edit', $product) }}" class="flex-1 bg-gray-600 hover:bg-gray-700 text-white text-center py-2 px-3 rounded text-sm">
                        Edit
                    </a>
                    <a href="{{ route('marketplace.create', ['product_id' => $product->id]) }}" class="flex-1 bg-green-600 hover:bg-green-700 text-white text-center py-2 px-3 rounded text-sm">
                        List
                    </a>
                </div>
            </div>
        </div>
        @empty
        <div class="col-span-full text-center py-12">
            <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
            </svg>
            <h3 class="mt-2 text-sm font-medium text-gray-900">No products</h3>
            <p class="mt-1 text-sm text-gray-500">Get started by creating your first product.</p>
            <div class="mt-6">
                <a href="{{ route('products.create') }}" class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-green-600 hover:bg-green-700">
                    <svg class="-ml-1 mr-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                    Add Product
                </a>
            </div>
        </div>
        @endforelse
    </div>

    <div class="mt-8">
        {{ $products->links() }}
    </div>
</div>
@endsection
