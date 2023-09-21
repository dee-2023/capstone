<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PackageController extends Controller
{
    public function index()
    {
        $packages = Package::all();
        return view('packages.index', compact('packages'));
    }
    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'price' => 'required',
            'inclusions' => 'required',
        ]);
    
        $imagePath = $request->file('image')->store('img', 'public');
        $package = new Package([
            'title' => $validatedData['title'],
        'description' => $validatedData['description'],
        'image_path' => $imagePath,
        'price' => $validatedData['price'],
        'inclusions' => $validatedData['inclusions'],

        ]);
        $package->save();
    
        return redirect('/packages')->with('success', 'Package added successfully');
    }
}
