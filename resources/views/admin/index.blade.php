@extends('layouts.app')
@section('title', "Admin")
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Admin Dashboard') }}</div>

                <div class="card-body">
                    <span class="messg">{{ session('msgadmin')}}</span>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('You are an Admin!') }}<br />
                    <a class="btn btn-primary" href="{{ route('bookings') }}">{{ __('Bookings') }}</a>
                    <a class="btn btn-primary" href="{{ route('users') }}">{{ __('Users') }}</a>
                    
                </div>

                
        </div>
        </div>
    </div>
    <div class="card-body">
        
</div>
@endsection
