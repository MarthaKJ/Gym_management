<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use App\Models\User;
use Illuminate\Http\Request;

class AdminStaffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::latest()->get();
        $staffMembers = Staff::latest()->get();
        return view('admin.staff.index', compact('users', 'staffMembers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.staff.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'staff_number' => 'required|string',
            'image' => 'required',
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email_address' => 'required|email',
            'telephone_number' => 'required|numeric',
            'date_of_birth' => 'required|date',
            'gender' => 'required',
            'address' => 'required',
            'position' => 'required|string',
            'working_hours' => 'required',
            'salary' => 'required',
        ]);

        $imageName = null;
        if ($request->hasFile('image')) {
            $imageName = time() . '_' . $request->first_name . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
        }

        Staff::create([
            'staff_number' => $request->staff_number,
            'image' =>  $imageName,
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'last_name' => $request->last_name,
            'email_address' => $request->email_address,
            'telephone_number' => $request->telephone_number,
            'date_of_birth' => $request->date_of_birth,
            'address' => $request->address,
            'position' => $request->position,
            'working_hours' => $request->working_hours,
            'salary' => $request->salary,
        ]);

        return redirect('/admin/staff');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.staff.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Staff $staff)
    {

        return view('admin.staff.edit')->with('staff', $staff);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Staff $staff)
    {
        $request->validate([
            'staff_number' => 'required|string',
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email_address' => 'required|email',
            'telephone_number' => 'required|numeric',
            'date_of_birth' => 'required|date',
            'gender' => 'required',
            'address' => 'required',
            'position' => 'required|string',
            'working_hours' => 'required',
            'salary' => 'required',
        ]);

        $imageName = $staff->image;

        if ($request->hasFile('image')) {
            if ($staff->image) {
                unlink(public_path('images') . '/' . $staff->image);
            }
            $imageName = time() . '_' . $request->first_name . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
        }


        $staff->update([
            'staff_number' => $request->staff_number,
            'image' =>  $imageName,
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'last_name' => $request->last_name,
            'email_address' => $request->email_address,
            'telephone_number' => $request->telephone_number,
            'date_of_birth' => $request->date_of_birth,
            'address' => $request->address,
            'position' => $request->position,
            'working_hours' => $request->working_hours,
            'salary' => $request->salary,
        ]);

        return redirect('/admin/staff');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Staff $staff)
    {
        if ($staff->image)
            unlink(public_path('images') . '/' . $staff->image);
        $staff->delete();
        return redirect('/admin/staff');
    }
}