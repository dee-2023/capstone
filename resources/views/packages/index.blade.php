@extends('layouts.app')
@section('title', "Packages")
@section('content')
<div class="container">
    <h3>Same height for image (Suitable for dynamic different size images) ―</h3>
    <div class="row mb-5 cstm-height-card">
        <div class="col-md-4">
            <div class="card">
                <img src="https://source.unsplash.com/random/1200x900" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-sm btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="https://source.unsplash.com/random/1500x800" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-sm btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="https://source.unsplash.com/random/1400x700" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-sm btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
