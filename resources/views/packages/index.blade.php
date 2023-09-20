@extends('layouts.app')
@section('title', "Packages")
@section('content')
<div class="container">
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                Travel Packages
            </div>
    
            @foreach($packages as $package)
              <div>
                <h4>Booking for: {{ $package->name}} </h4>
                <h5>{{ $package->title }}</h4>
                <p>Date: {{ $package->booking_date}} </p>
                
              </div>
            @endforeach
    
        </div>
    </div>
</div>
@endsection