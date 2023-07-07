<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::latest()->get();
        return view("admin.users.index", ['users' => $users]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect('/admin/users');
    }
}