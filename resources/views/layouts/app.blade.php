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
    .navi {
      background-image: linear-gradient(79deg, #268f8e, #83dfe3, #f6f0fc 48%, #94a7a8);
      background-position: center;
      background-repeat: no-repeat;
      background-size: contain;
    
    }
</style>
</head>
<body>
  @include('layouts.header')
  @yield('content')
  @include('layouts.footer')

</body>
</html>