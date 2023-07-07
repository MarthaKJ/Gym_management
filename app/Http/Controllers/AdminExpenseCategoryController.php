<?php

namespace App\Http\Controllers;

use App\Models\ExpenseCategory;
use Illuminate\Http\Request;

class AdminExpenseCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = ExpenseCategory::latest()->get();
        return view('admin.expense-categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.expense-categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
        ]);


        ExpenseCategory::create([                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             
            'name' => $request->name,
            'description' =>  $request->description,
        ]);

        return redirect('/admin/categories');
    }

    /**
     * Display the specified resource.
     */
    public function show(ExpenseCategory $category)
    {
        return view('admin.expense-categories.show')->with('category', $category);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ExpenseCategory $category)
    {
        return view('admin.expense-categories.edit')->with('category', $category);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ExpenseCategory $category)
    {
        $request->validate([
            'name' => 'required|string',
        ]);


        $category->update([
            'name' => $request->name,
            'description' =>  $request->description,
        ]);

        return redirect('/admin/categories');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ExpenseCategory $category)
    {
        $category->delete();
        return redirect('/admin/categories');
    }
}