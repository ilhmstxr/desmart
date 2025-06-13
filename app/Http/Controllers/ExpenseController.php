<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use App\Models\Field;
use App\Models\Crop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExpenseController extends Controller
{
    public function index()
    {
        $expenses = Expense::with(['field', 'crop', 'createdBy'])
            ->orderBy('expense_date', 'desc')
            ->paginate(15);

        $totalExpenses = Expense::where('status', 'paid')->sum('amount');
        $pendingExpenses = Expense::where('status', 'pending')->sum('amount');
        $monthlyExpenses = Expense::where('status', 'paid')
            ->whereMonth('expense_date', now()->month)
            ->whereYear('expense_date', now()->year)
            ->sum('amount');

        return view('expenses.index', compact('expenses', 'totalExpenses', 'pendingExpenses', 'monthlyExpenses'));
    }

    public function create()
    {
        $fields = Field::all();
        $crops = Crop::all();
        return view('expenses.create', compact('fields', 'crops'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required|string|max:255',
            'description' => 'required|string',
            'amount' => 'required|numeric|min:0',
            'expense_date' => 'required|date',
            'vendor_name' => 'nullable|string|max:255',
            'payment_method' => 'required|in:cash,bank_transfer,check,credit_card',
            'field_id' => 'nullable|exists:fields,id',
            'crop_id' => 'nullable|exists:crops,id',
            'notes' => 'nullable|string',
        ]);

        Expense::create([
            'category' => $request->category,
            'description' => $request->description,
            'amount' => $request->amount,
            'expense_date' => $request->expense_date,
            'vendor_name' => $request->vendor_name,
            'payment_method' => $request->payment_method,
            'field_id' => $request->field_id,
            'crop_id' => $request->crop_id,
            'notes' => $request->notes,
            'created_by' => Auth::id(),
        ]);

        return redirect()->route('expenses.index')->with('success', 'Expense recorded successfully!');
    }

    public function show(Expense $expense)
    {
        $expense->load(['field', 'crop', 'createdBy']);
        return view('expenses.show', compact('expense'));
    }

    public function edit(Expense $expense)
    {
        $fields = Field::all();
        $crops = Crop::all();
        return view('expenses.edit', compact('expense', 'fields', 'crops'));
    }

    public function update(Request $request, Expense $expense)
    {
        $request->validate([
            'category' => 'required|string|max:255',
            'description' => 'required|string',
            'amount' => 'required|numeric|min:0',
            'expense_date' => 'required|date',
            'vendor_name' => 'nullable|string|max:255',
            'payment_method' => 'required|in:cash,bank_transfer,check,credit_card',
            'status' => 'required|in:pending,paid,overdue',
            'field_id' => 'nullable|exists:fields,id',
            'crop_id' => 'nullable|exists:crops,id',
            'notes' => 'nullable|string',
        ]);

        $expense->update($request->all());

        return redirect()->route('expenses.index')->with('success', 'Expense updated successfully!');
    }

    public function destroy(Expense $expense)
    {
        $expense->delete();
        return redirect()->route('expenses.index')->with('success', 'Expense deleted successfully!');
    }
}
