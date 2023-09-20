@extends('layouts.app')
@section('title', "Packages")
@section('content')
<div class="container">
    <h1>Add New Package</h1>
    <span class="messg">{{ session('mssg')}}</span>
    <form action="/packages" method="POST">
        @csrf
        <label for="name">Full Name:</label>
        <input type="text" name="name" id="name" required>
        <label for="title">Package:</label>
        <select name="title" id="title">
            <option value="P1">P1</option>
            <option value="P2">P2</option>
            <option value="P3">P3</option>
            <option value="P4">P4</option>
          </select>
          <label for="booking_date" min="{{ now()->toDateString() }}" required>Date</label>
        <input type="date" name="booking_date">
        <fieldset>
            <label>Inclusions:</label>
            <input type="checkbox" name="inclusions[]" value="breakfast">Breakfast<br />
            <input type="checkbox" name="inclusions[]" value="lunch">Lunch<br />
            <input type="checkbox" name="inclusions[]" value="dinner">Dinner<br />
            <input type="checkbox" name="inclusions[]" value="airport transfer">Airport Transfer<br />
            <input type="checkbox" name="inclusions[]" value="accomodation">Accomodation<br />
        </fieldset>
        
        <input type="submit" value="Book Now">
    </form>

</div>
@endsection