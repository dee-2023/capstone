@extends('layouts.app')
@section('title', "Bookings")
@section('content')
<div class="container">
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                Customer's Booking:
            </div>
    
            @foreach($bookings as $booking)
              <div>
                <a href="/bookings/{{ $booking->id }}">{{ $booking->name }}</a>
              </div>
            @endforeach
    
        </div>
    </div>
</div>
@endsection