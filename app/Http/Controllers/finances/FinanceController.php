<?php


namespace App\Http\Controllers\finances;

use App\Http\Controllers\Controller; 

use App\Models\finances\Product;
use App\Models\finances\Sale;
use App\Models\finances\Expense;
use App\Models\finances\MarketplaceListing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FinanceController extends Controller
{
    public function index()
    {
        $totalRevenue = Sale::where('payment_status', 'paid')->sum('net_amount');
        $totalExpenses = Expense::where('status', 'paid')->sum('amount');
        $netProfit = $totalRevenue - $totalExpenses;
        $pendingSales = Sale::where('payment_status', 'pending')->count();
        
        $monthlyRevenue = Sale::where('payment_status', 'paid')
            ->whereMonth('sale_date', now()->month)
            ->whereYear('sale_date', now()->year)
            ->sum('net_amount');
            
        $monthlyExpenses = Expense::where('status', 'paid')
            ->whereMonth('expense_date', now()->month)
            ->whereYear('expense_date', now()->year)
            ->sum('amount');

        $recentSales = Sale::with(['product', 'createdBy'])
            ->latest()
            ->take(5)
            ->get();

        $lowStockProducts = Product::where('stock_quantity', '<=', DB::raw('minimum_stock'))
            ->with('crop')
            ->get();

        return view('finances.index', compact(
            'totalRevenue',
            'totalExpenses', 
            'netProfit',
            'pendingSales',
            'monthlyRevenue',
            'monthlyExpenses',
            'recentSales',
            'lowStockProducts'
        ));
    }
}
