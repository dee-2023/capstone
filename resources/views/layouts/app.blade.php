<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
<style>
  body{
    min-height: 500vh;
    display: flex;
    flex-direction: column;
  }
    .navi {
      background-image: linear-gradient(79deg, #268f8e, #83dfe3, #f6f0fc 48%, #94a7a8);
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