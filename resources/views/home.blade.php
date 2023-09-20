@extends('layouts.app')
@section('title', "Home")
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('You are logged in!') }}<br />
                    <a class="btn btn-primary" href="{{ route('packages') }}">{{ __('Packages') }}</a>
                    <a class="btn btn-primary" href="{{ route('shop') }}">{{ __('Shop') }}</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

