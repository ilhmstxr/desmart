<?php

namespace App\Http\Controllers;

use App\Models\MarketplaceListing;
use App\Models\Product;
use Illuminate\Http\Request;

class MarketplaceController extends Controller
{
    public function index()
    {
        $listings = MarketplaceListing::with(['product'])
            ->orderBy('created_at', 'desc')
            ->paginate(15);

        return view('marketplace.index', compact('listings'));
    }

    public function create()
    {
        $products = Product::where('status', 'active')
            ->where('stock_quantity', '>', 0)
            ->get();
        
        return view('marketplace.create', compact('products'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'marketplace_name' => 'required|string|max:255',
            'listing_price' => 'required|numeric|min:0',
            'quantity_listed' => 'required|integer|min:1',
            'listed_date' => 'required|date',
            'expiry_date' => 'nullable|date|after:listed_date',
            'commission_rate' => 'nullable|numeric|min:0|max:100',
            'listing_notes' => 'nullable|string',
        ]);

        $product = Product::findOrFail($request->product_id);
        
        if ($request->quantity_listed > $product->stock_quantity) {
            return back()->withErrors(['quantity_listed' => 'Quantity listed cannot exceed available stock.']);
        }

        MarketplaceListing::create($request->all());

        return redirect()->route('marketplace.index')->with('success', 'Product listed successfully!');
    }

    public function show(MarketplaceListing $listing)
    {
        $listing->load(['product', 'sales']);
        return view('marketplace.show', compact('listing'));
    }

    public function edit(MarketplaceListing $listing)
    {
        $products = Product::where('status', 'active')->get();
        return view('marketplace.edit', compact('listing', 'products'));
    }

    public function update(Request $request, MarketplaceListing $listing)
    {
        $request->validate([
            'marketplace_name' => 'required|string|max:255',
            'listing_price' => 'required|numeric|min:0',
            'quantity_listed' => 'required|integer|min:1',
            'status' => 'required|in:pending,active,sold,expired,cancelled',
            'expiry_date' => 'nullable|date',
            'commission_rate' => 'nullable|numeric|min:0|max:100',
            'listing_notes' => 'nullable|string',
        ]);

        $listing->update($request->all());

        return redirect()->route('marketplace.index')->with('success', 'Listing updated successfully!');
    }

    public function destroy(MarketplaceListing $listing)
    {
        $listing->delete();
        return redirect()->route('marketplace.index')->with('success', 'Listing deleted successfully!');
    }
}
