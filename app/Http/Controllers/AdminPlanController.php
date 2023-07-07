<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Models\Service;
use Illuminate\Http\Request;

class AdminPlanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $plans = Plan::latest()->get();
        return view('admin.plans.index', compact('plans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $services = Service::get();
        return view('admin.plans.create', compact('services'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'price' => 'required',
            'duration' => 'required',
            'services' => 'required',
        ]);


        Plan::create([
            'name' => $request->name,
            'price' =>  $request->price,
            'duration' =>  $request->duration,
            'services' =>  $request->services,
        ]);

        return redirect('/admin/plans');
    }

    /**
     * Display the specified resource.
     */
    public function show(Plan $plan)
    {
        return view('admin.plans.show')->with('plan', $plan);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Plan $plan)
    {
        return view('admin.plans.edit', compact('plan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Plan $plan)
    {
        $request->validate([
            'name' => 'required|string',
            'price' => 'required',
            'duration' => 'required',
            'services' => 'required',
        ]);


        $plan->update([
            'name' => $request->name,
            'price' =>  $request->price,
            'duration' =>  $request->duration,
            'services' =>  $request->services,
        ]);

        return redirect('/admin/plans');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Plan $plan)
    {
        $plan->delete();
        return redirect('/admin/plans');
    }
}