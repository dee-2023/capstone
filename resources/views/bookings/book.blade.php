@extends('layouts.app')
@section('title', "Booking")
@section('content')


<div class="container">
    <h1>Book your Package</h1>
    <span class="messg">{{ session('mssg')}}</span>
    <form action="/bookings" method="POST">
        @csrf
        <label for="name">Full Name:</label>
        <input type="text" name="name" id="name" required><br />
        <label for="package">Package:</label>
        <select name="package" id="package">
            <option value="P1">P1</option>
            <option value="P2">P2</option>
            <option value="P3">P3</option>
            <option value="P4">P4</option>
          </select><br />
          <label for="booking_date" min="{{ now()->toDateString() }}" required>Date: </label>
        <input type="date" name="booking_date"><br />
        <fieldset >
            <label>Add Inclusions:</label><br />
            <input type="checkbox" name="inclusions[]" value="breakfast">Breakfast<br />
            <input type="checkbox" name="inclusions[]" value="lunch">Lunch<br />
            <input type="checkbox" name="inclusions[]" value="dinner">Dinner<br />
            <input type="checkbox" name="inclusions[]" value="airport transfer">Airport Transfer<br />
            <input type="checkbox" name="inclusions[]" value="accomodation">Accomodation<br />
            
        </fieldset>
        
        <input type="submit" value="Book Now">
        <a class="btn btn-primary" href="{{ route('my-bookings') }}">{{ __('My Bookings') }}</a>

        
    </form>

    

</div>
@endsection