<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use App\Models\ExpenseCategory;
use Illuminate\Http\Request;

class AdminExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $expenses = Expense::latest()->get();
        return view('admin.expenses.index', compact('expenses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = ExpenseCategory::get();
        return view('admin.expenses.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'expense_category_id' => 'required',
            'total_amount' => 'required',
            'amount_spent' => 'required',
            'amount_due' => 'required',
        ]);


        Expense::create([
            'name' => $request->name,
            'expense_category_id' => $request->expense_category_id,
            'total_amount' => $request->total_amount,
            'amount_spent' => $request->amount_spent,
            'amount_due' => $request->amount_due
        ]);

        return redirect('/admin/expenses');
    }

    /**
     * Display the specified resource.
     */
    public function show(Expense $expense)
    {
        return view('admin.expenses.show')->with('expense', $expense);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Expense $expense)
    {
        $categories = ExpenseCategory::get();
        return view('admin.expenses.edit', compact('expense', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Expense $expense)
    {
        $request->validate([
            'name' => 'required|string',
            'expense_category_id' => 'required',
            'total_amount' => 'required',
            'amount_spent' => 'required',
            'amount_due' => 'required',
        ]);


        $expense->update([
            'name' => $request->name,
            'expense_category_id' => $request->expense_category_id,
            'total_amount' => $request->total_amount,
            'amount_spent' => $request->amount_spent,
            'amount_due' => $request->amount_due
        ]);

        return redirect('/admin/expenses');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Expense $expense)
    {
        $expense->delete();
        return redirect('/admin/expenses');
    }
}