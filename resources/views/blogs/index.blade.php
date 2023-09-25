@extends('layouts.app')
@section('content')
<div class="container wrapper">
  <div class="titlebar">
    @if(auth()->user() && auth()->user()->role == 'admin')
    <a class="btn btn-success float-end mt-3" href="{{ route('create-blog') }}" role="button">Add Blog</a>
    @endif
    <h1>B L O G S</h1>
  </div>
    
  <hr>
  <!-- Message if a blog is posted successfully -->
  @if ($message = Session::get('success'))
    <div class="alert alert-success">
      <p>{{ $message }}</p>
    </div>
  @endif
    @if (count($blogs) > 0)
      @foreach ($blogs as $blog)
      <div class="card mb-3">
        <img src="{{ asset('images/'.$blog->image)}}" class="card-img-top " alt="..." style="max-width:50%">
        <div class="card-body">
          <h5 class="card-title">{{$blog->title}}</h5>
          <p class="card-text">{{$blog->description}}</p>
          <p class="card-text"><small class="text-body-secondary"><i class="fa-regular fa-calendar-days"></i>{{$blog->created_at->format('Y-m-d')}} | 
            Uploaded by: {{$blog->user->name}}</small></p>
            @if (
                auth()->user() && 
                auth()->user()->role == 'admin' && 
                auth()->user()->id == $blog->created_by
                )
              <a class="btn btn-danger float-end mt-3" href="{{ route('create-blog') }}" role="button">Delete</a>
            @endif
        </div>
      </div>
      
      @endforeach
    @else
    <p>No Posts found</p>
    @endif
</div>
@endsection




