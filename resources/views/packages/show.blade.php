@extends('layouts.app')
@section('title', "Packages")
@section('content')
<div class="container">
    <h1>Booking for {{ $package->name }} </h1>
    <p>Package: {{ $package->title}} </p>
    <p>Price: {{ $package->price}} </p>
</div>
<a href="/packages" class=""><-Back to Packages</a>
@endsection