@extends('layouts.app')
@section('title', "My Bookings")
@section('content')

<div class="container">
    <h1>My Bookings</h1>
    <table>
        <thead>
            <tr>
                <th>Booking ID</th>
                <th>Name</th>
                <th>Package</th>
                <th>Date</th>
                <th>Inclusions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bookings as $booking)
            <tr>
                <td>{{ $booking->id }}</td>
                <td>{{ $booking->name }}</td>
                <td>{{ $booking->package }}</td>
                <td>{{ $booking->booking_date }}</td>
                <td>
                    @if (is_array($booking->inclusions))
                        {{ implode(', ', $booking->inclusions) }}
                    @else 
                        <i>*No Additional Inclusions.</i>
                        {{ $booking->inclusions }} 
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection