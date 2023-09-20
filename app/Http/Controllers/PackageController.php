<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class PackageController extends Controller
{
    public function index() {  
        //$packages = Package::all();
        $packages = Package::latest()->get();
      return view('packages.index', [
        'packages' => $packages,
      ]);
    }

    public function show($id) {
        $package = Package::findOrFail($id);
    
        return view('packages.show', ['package' => $package]);
      }

    public function book() {
        return view('packages.book');
    }

    public function store() {
        $package = new Package();

        $package->name = request('name');
        $package->title = request('title');
        $package->booking_date = request('booking_date');
        $package->inclusions = request('toppings');

        

        return redirect('/packages/book')->with('mssg', 'Booking submitted successfully!');
    }
}
