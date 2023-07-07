<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class AdminServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::latest()->get();
        return view('admin.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'image' => 'required',
        ]);

        $imageName = null;
        if ($request->hasFile('image')) {
            $imageName = time() . '_' . $request->name . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
        }

        Service::create([
            'name' => $request->name,
            'image' => $imageName,
            'description' =>  $request->description,
        ]);

        return redirect('/admin/services');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.services.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        return view('admin.services.edit')->with('service', $service);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        $request->validate([
            'name' => 'required|string',

        ]);

        $imageName = $service->image;

        if ($request->hasFile('image')) {
            if ($service->image) {
                unlink(public_path('images') . '/' . $service->image);
            }
            $imageName = time() . '_' . $request->first_name . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
        }

        $service->update([
            'name' => $request->name,
            'image' => $imageName,
            'description' =>  $request->description,

        ]);

        return redirect('/admin/services');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        if ($service->image)
            unlink(public_path('images') . '/' . $service->image);
        $service->delete();
        return redirect('/admin/services');
    }
}