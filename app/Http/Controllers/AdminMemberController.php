<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class AdminMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $members = Member::get();
        return view('admin.members.index', ['members' => $members]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.members.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'membership_number' => 'required|string',
            'image' => 'required',
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email_address' => 'required|email',
            'telephone_number' => 'required|numeric',
            'date_of_birth' => 'required|date',
            'gender' => 'required',
            'address' => 'required',
            'aim' => 'required',
        ]);

        $imageName = null;
        if ($request->hasFile('image')) {
            $imageName = time() . '_' . $request->first_name . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
        }

        Member::create([
            'membership_number' => $request->membership_number,
            'image' =>  $imageName,
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'last_name' => $request->last_name,
            'email_address' => $request->email_address,
            'telephone_number' => $request->telephone_number,
            'date_of_birth' => $request->date_of_birth,
            'address' => $request->address,
            'aim' => $request->aim,
        ]);

        return redirect('/admin/members');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.members.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Member $member)
    {
        return view('admin.members.edit')->with('member', $member);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Member $member)
    {
        $request->validate([
            'membership_number' => 'required|string',
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email_address' => 'required|email',
            'telephone_number' => 'required|numeric',
            'date_of_birth' => 'required',
            'gender' => 'required',
            'address' => 'required',
            'aim' => 'required',
        ]);

        $imageName = $member->image;

        if ($request->hasFile('image')) {
            if ($member->image) {
                unlink(public_path('images') . '/' . $member->image);
            }
            $imageName = time() . '_' . $request->first_name . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
        }


        $member->update([
            'membership_number' => $request->membership_number,
            'image' =>  $imageName,
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'last_name' => $request->last_name,
            'email_address' => $request->email_address,
            'telephone_number' => $request->telephone_number,
            'date_of_birth' => $request->date_of_birth,
            'address' => $request->address,
            'aim' => $request->aim,
        ]);

        return redirect('/admin/members');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Member $member)
    {

        if ($member->image)
            unlink(public_path('images') . '/' . $member->image);
        $member->delete();
        return redirect('/admin/members');
    }
}