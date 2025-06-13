<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use App\Models\Product;
use App\Models\MarketplaceListing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SaleController extends Controller
{
    public function index()
    {
        $sales = Sale::with(['product', 'marketplaceListing', 'createdBy'])
            ->orderBy('created_at', 'desc')
            ->paginate(15);

        return view('sales.index', compact('sales'));
    }

    public function create()
    {
        $products = Product::where('status', 'active')
            ->where('stock_quantity', '>', 0)
            ->get();
        
        $marketplaceListings = MarketplaceListing::where('status', 'active')
            ->with('product')
            ->get();

        return view('sales.create', compact('products', 'marketplaceListings'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'marketplace_listing_id' => 'nullable|exists:marketplace_listings,id',
            'customer_name' => 'required|string|max:255',
            'customer_email' => 'nullable|email',
            'customer_phone' => 'nullable|string',
            'quantity_sold' => 'required|integer|min:1',
            'unit_price' => 'required|numeric|min:0',
            'sale_date' => 'required|date',
            'delivery_date' => 'nullable|date|after_or_equal:sale_date',
            'notes' => 'nullable|string',
        ]);

        $product = Product::findOrFail($request->product_id);
        
        if ($request->quantity_sold > $product->stock_quantity) {
            return back()->withErrors(['quantity_sold' => 'Quantity sold cannot exceed available stock.']);
        }

        DB::transaction(function () use ($request, $product) {
            $totalAmount = $request->quantity_sold * $request->unit_price;
            $commissionAmount = 0;
            
            if ($request->marketplace_listing_id) {
                $listing = MarketplaceListing::findOrFail($request->marketplace_listing_id);
                $commissionAmount = ($totalAmount * $listing->commission_rate) / 100;
                
                // Update listing quantity sold
                $listing->increment('quantity_sold', $request->quantity_sold);
                
                // Update listing status if fully sold
                if ($listing->quantity_sold >= $listing->quantity_listed) {
                    $listing->update(['status' => 'sold']);
                }
            }

            $netAmount = $totalAmount - $commissionAmount;

            Sale::create([
                'product_id' => $request->product_id,
                'marketplace_listing_id' => $request->marketplace_listing_id,
                'customer_name' => $request->customer_name,
                'customer_email' => $request->customer_email,
                'customer_phone' => $request->customer_phone,
                'quantity_sold' => $request->quantity_sold,
                'unit_price' => $request->unit_price,
                'total_amount' => $totalAmount,
                'commission_amount' => $commissionAmount,
                'net_amount' => $netAmount,
                'sale_date' => $request->sale_date,
                'delivery_date' => $request->delivery_date,
                'notes' => $request->notes,
                'created_by' => Auth::id(),
            ]);

            // Update product stock
            $product->decrement('stock_quantity', $request->quantity_sold);
            
            // Update product status if out of stock
            if ($product->stock_quantity <= 0) {
                $product->update(['status' => 'out_of_stock']);
            }
        });

        return redirect()->route('sales.index')->with('success', 'Sale recorded successfully!');
    }

    public function show(Sale $sale)
    {
        $sale->load(['product', 'marketplaceListing', 'createdBy']);
        return view('sales.show', compact('sale'));
    }

    public function edit(Sale $sale)
    {
        $products = Product::all();
        $marketplaceListings = MarketplaceListing::with('product')->get();
        return view('sales.edit', compact('sale', 'products', 'marketplaceListings'));
    }

    public function update(Request $request, Sale $sale)
    {
        $request->validate([
            'customer_name' => 'required|string|max:255',
            'customer_email' => 'nullable|email',
            'customer_phone' => 'nullable|string',
            'payment_status' => 'required|in:pending,paid,partial,refunded',
            'delivery_status' => 'required|in:pending,shipped,delivered,cancelled',
            'delivery_date' => 'nullable|date',
            'notes' => 'nullable|string',
        ]);

        $sale->update($request->all());

        return redirect()->route('sales.index')->with('success', 'Sale updated successfully!');
    }

    public function destroy(Sale $sale)
    {
        // Restore product stock
        $sale->product->increment('stock_quantity', $sale->quantity_sold);
        
        // Update marketplace listing if applicable
        if ($sale->marketplace_listing_id) {
            $listing = $sale->marketplaceListing;
            $listing->decrement('quantity_sold', $sale->quantity_sold);
            
            if ($listing->status === 'sold' && $listing->quantity_sold < $listing->quantity_listed) {
                $listing->update(['status' => 'active']);
            }
        }

        $sale->delete();
        return redirect()->route('sales.index')->with('success', 'Sale deleted successfully!');
    }
}
