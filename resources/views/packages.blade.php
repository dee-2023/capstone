@extends('layouts.app')
@section('title', "Packages")
@section('content')
<div class="container text-center">
    <p>Travel Packages</p>
    <h3>Get out there!</h3>
    <div class="row mb-5 cstm-height-card">
        <div class="col-md-4">
            <div class="card">
                <img src="https://source.unsplash.com/random/1200x900" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Package 1</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="{{ route('booknow') }}" class="btn btn-sm btn-primary">Book Now</a>
                    <a href="#" class="btn btn-sm btn-primary">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="https://source.unsplash.com/random/1500x800" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Package 2</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="{{ route('booknow') }}" class="btn btn-sm btn-primary">Book Now</a>
                    <a href="#" class="btn btn-sm btn-primary">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="https://source.unsplash.com/random/1400x700" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"> Package 3</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="{{ route('booknow') }}" class="btn btn-sm btn-primary">Book Now</a>
                    <a href="#" class="btn btn-sm btn-primary">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    

    





</div>
@endsection
