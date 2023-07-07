<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Plan;
use App\Models\Subscription;
use Illuminate\Http\Request;

class AdminSubscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subscriptions = Subscription::latest()->get();
        return view('admin.subscriptions.index', compact('subscriptions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $plans = Plan::get();
        $members = Member::get();
        return view('admin.subscriptions.create', compact('plans', 'members'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'member_id' => 'required',
            'plan_id' => 'required',
            'amount_received' => 'required',
            'amount_pending' => 'required',
            'payment_mode' => 'required',
        ]);


        Subscription::create([
            'member_id' => $request->member_id,
            'plan_id' =>  $request->plan_id,
            'amount_received' =>  $request->amount_received,
            'amount_pending' =>  $request->amount_pending,
            'payment_mode' =>  $request->payment_mode,
        ]);

        return redirect('/admin/subscriptions');
    }

    /**
     * Display the specified resource.
     */
    public function show(Subscription $subscription)
    {

        return view('admin.subscriptions.show', compact('subscription'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subscription $subscription)
    {
        $plans = Plan::get();
        $members = Member::get();
        return view('admin.subscriptions.edit', compact('plans', 'members', 'subscription'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Subscription $subscription)
    {
        $request->validate([
            'member_id' => 'required',
            'plan_id' => 'required',
            'amount_received' => 'required',
            'amount_pending' => 'required',
            'payment_mode' => 'required',
        ]);


        $subscription->update([
            'member_id' => $request->member_id,
            'plan_id' =>  $request->plan_id,
            'amount_received' =>  $request->amount_received,
            'amount_pending' =>  $request->amount_pending,
            'payment_mode' =>  $request->payment_mode,
        ]);

        return redirect('/admin/subscriptions');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subscription $subscription)
    {
        $subscription->delete();
        return redirect('/admin/subscriptions');
    }
}