<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('tittle')</title>
    {{-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> --}}
    
</head>
<style>
    .active{
        color: red;
        font-weight: bold;
    }
</style>
<body>
            @include('layouts.partials.header')
            @yield('content')
            @include('layouts.partials.footer')
</body>
</html>