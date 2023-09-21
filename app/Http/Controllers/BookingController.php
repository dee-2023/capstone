<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function index() {  
      $bookings = Booking::all();
      if(Auth::user()->role == 'admin'){
        return view('bookings.index', ['bookings' => $bookings]);
    } else if(Auth::user()->role == 'user'){
      echo "You are not an admin";
        return view('home');
    
    }
      
    }      
      


    public function show($id) {
      $booking = Booking::findOrFail($id);
        return view('bookings.show', ['booking' => $booking]);
      }

    public function book() {
      
      if(Auth::user()->role == 'user'){
        return view('bookings.book');

    } else if(Auth::user()->role == 'admin'){
        echo "You are admin";
        return view('bookings.index');
      } else {
        return view('bookings');
    }

  }


    public function store(Request $request) {
      $user = auth()->user();
       
      $booking = new Booking();
      $inclusions = $request->input('inclusions', []);
      $booking->cust_id = $user->id;
      $booking->name = $request->input('name');
      $booking->package = $request->input('package');
      $booking->booking_date = $request->input('booking_date');
      
      $booking->inclusions = $inclusions;

        $booking->save();

        return redirect('/bookings/book')->with('mssg', 'Booking submitted successfully!');
    }

    public function destroy($id) {
      $booking = Booking::findOrFail($id);
      $booking->delete();

      return redirect('/bookings');
    }

    public function myBookings()
{
    $user = auth()->user();
    $bookings = Booking::where('cust_id', $user->id)->get(); 

    return view('/bookings/my-bookings', compact('bookings'));
}
}
