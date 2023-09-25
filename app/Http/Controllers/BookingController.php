<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
  public function index() {  
    $bookings = Booking::all();

    if (auth()->check()) {
      if (auth()->user()->role == 'user') {
        echo "You are not an admin";

      return view('home');
      } elseif (auth()->user()->role == 'admin') {
        return view('bookings.index', ['bookings' => $bookings]);
      }
    }
    return redirect()->route('login')->with('message', "Unauthorized access. Please login as Admin");   
  }      

  public function show($id) {
    $booking = Booking::findOrFail($id);
    
      return view('bookings.show', ['booking' => $booking]);
  }

  public function book() {
      
    if (auth()->check()) {
      if (auth()->user()->role == 'user') {
        return view('bookings.book');
      } elseif (auth()->user()->role == 'admin') {
        return view('admin.index')->with('message', "Please login as User to Book a Package.");
      }
    }
    return redirect()->route('login')->with('message', "Unauthorized access. Please login as Admin");
    }

  public function store(Request $request) {
    $user = auth()->user();
       
    $booking = new Booking();
    $inclusions = $request->input('inclusions', []);
    $booking->cust_id = $user->id;
    $booking->name = $user->name;
    $booking->package = $request->input('package');
    $booking->booking_date = $request->input('booking_date');  
    $booking->inclusions = $inclusions;

    $booking->save();

    return redirect('/bookings/book')->with('message', 'Booking submitted successfully!');
  }

    public function destroy($id) {
      $booking = Booking::findOrFail($id);
      $booking->delete();

      return redirect('/bookings')->with('message', 'Booking deleted successfully.');
    
  }

    public function myBookings(){
    $user = auth()->user();
    $bookings = Booking::where('cust_id', $user->id)->get(); 

    return view('/bookings/my-bookings', compact('bookings'));
    }
}
