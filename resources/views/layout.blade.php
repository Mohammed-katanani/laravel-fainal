<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- External Stylesheet -->
    <link rel="stylesheet" href="{{ asset('CSS/style.css') }}">

</head>
<body class="antialiased">
    <div class="relative">
        <nav class="main-nav">
            <a href="{{ route('home.index') }}">Home</a>
            <a href="{{ route('home.about') }}">About</a>
            <a href="{{ route('home.contact') }}">Contact</a>
            <a href="{{ route('products.index') }}">Products</a>
            <a href="{{ route('products.create') }}">Create</a>
        </nav>
    </div>
    {{-- Outlet --}}
    @yield('content')
</body>
</html>
