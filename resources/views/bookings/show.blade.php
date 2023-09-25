@extends('layouts.app')
@section('title', "Bookings")
@section('content')
<div class="container">
    <h3>Booking for {{ $booking->name }} </h3>
    <p>Package: {{ $booking->package}} </p>
    <p>Date: {{ $booking->price}} </p>
    <p>Added inclusions</p>
        <ul>
            @foreach($booking->inclusions as $inclusion)
            <li>{{ $inclusion }}</li>
            @endforeach
        </ul>
    <p>Booking created at: {{ $booking->created_at}}</p>
    <form action="/bookings/{{ $booking->id }}" method="POST">
        @csrf
        @method('DELETE')
        <button onclick="return confirm('Are you sure you want to complete this booking?')">Complete Booking</button>
    </form>
    <a href="/bookings" class=""><-Back to Customer Bookings</a>
</div>

@endsection