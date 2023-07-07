<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Service;
use App\Models\Staff;
use App\Models\Subscription;
use App\Models\User;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $membersCount = Member::get()->count();
        $usersCount = User::get()->count();
        $staffCount = Staff::get()->count();
        $classesCount = Service::get()->count();
        $subscriptionsCount = Subscription::get()->count();
        $subscriptions = Subscription::latest()->limit(4)->get();
        $totalRevenue = Subscription::sum('amount_received');
        return view('admin.home.index', compact(
            'membersCount',
            'usersCount',
            'staffCount',
            'classesCount',
            'subscriptionsCount',
            'subscriptions',
            'totalRevenue'
        ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}