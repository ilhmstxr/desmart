<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Crop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with(['crop', 'createdBy'])
            ->orderBy('created_at', 'desc')
            ->paginate(12);

        return view('products.index', compact('products'));
    }

    public function create()
    {
        $crops = Crop::where('status', 'ready')->get();
        return view('products.create', compact('crops'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price_per_unit' => 'required|numeric|min:0',
            'unit_type' => 'required|string',
            'stock_quantity' => 'required|integer|min:0',
            'minimum_stock' => 'required|integer|min:0',
            'category' => 'nullable|string',
            'cost_per_unit' => 'nullable|numeric|min:0',
            'crop_id' => 'required|exists:crops,id',
        ]);

        $product = Product::create([
            'name' => $request->name,
            'sku' => $this->generateSKU($request->name),
            'description' => $request->description,
            'price_per_unit' => $request->price_per_unit,
            'unit_type' => $request->unit_type,
            'stock_quantity' => $request->stock_quantity,
            'minimum_stock' => $request->minimum_stock,
            'category' => $request->category,
            'cost_per_unit' => $request->cost_per_unit,
            'crop_id' => $request->crop_id,
            'created_by' => Auth::id(),
        ]);

        return redirect()->route('products.index')->with('success', 'Product created successfully!');
    }

    public function show(Product $product)
    {
        $product->load(['crop', 'marketplaceListings', 'sales']);
        return view('products.show', compact('product'));
    }

    public function edit(Product $product)
    {
        $crops = Crop::all();
        return view('products.edit', compact('product', 'crops'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price_per_unit' => 'required|numeric|min:0',
            'unit_type' => 'required|string',
            'stock_quantity' => 'required|integer|min:0',
            'minimum_stock' => 'required|integer|min:0',
            'status' => 'required|in:draft,active,inactive,out_of_stock',
            'category' => 'nullable|string',
            'cost_per_unit' => 'nullable|numeric|min:0',
            'crop_id' => 'required|exists:crops,id',
        ]);

        $product->update($request->all());

        return redirect()->route('products.index')->with('success', 'Product updated successfully!');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Product deleted successfully!');
    }

    private function generateSKU($name)
    {
        $prefix = strtoupper(substr(preg_replace('/[^A-Za-z]/', '', $name), 0, 3));
        $suffix = str_pad(Product::count() + 1, 4, '0', STR_PAD_LEFT);
        return $prefix . '-' . $suffix;
    }
}
