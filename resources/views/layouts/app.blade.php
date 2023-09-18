<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" ></script>
    <!-- Font Awesome -->
    
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/db948196a7.js"></script>

    

   
<style>
  body{
    background-image: linear-gradient(79deg, #268f8e, #83dfe3, #f6f0fc 48%, #94a7a8);
    min-height: 100vh;
    display: flex;
    flex-direction: column;
  }
    .navi {
      background-image: linear-gradient(79deg, #268f8e 60%, #94a7a8);
      background-position: center;
      background-repeat: no-repeat;
      background-size: contain;
    
    }
    .wrapper {
    min-height: 100%;
    position: relative;
    margin-bottom: -100px; /* Height of the footer */
}

.content {
 margin: auto 0;
    padding-bottom: 100px; /* Height of the footer */
}

footer {
    min-height: 100px; /* Adjust this as needed */
    background-color: #94a7a8; 
    color: #fff; 
    position:relative;
    bottom: 0;
    width: 100%;
    text-align: center; 
    margin-top: auto;
}
.footer-content {
    margin: 0 auto; 
    max-width: 600px;
}

</style>
</head>
<body>
  
  @include('layouts.header')
  <div class="content">
  @yield('content')
</div>
  @include('layouts.footer')

</body>
</html>