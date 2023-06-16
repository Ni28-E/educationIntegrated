<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="{{ URL::asset('css/home.css') }}">

    <!-- Scripts -->
    <!--@vite(['resources/css/app.css', 'resources/js/app.js'])-->
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <nav>
                    <label class="logo">My Lifestyle Education</label>
                    <ul>
                        <li><a href="{{ route ('home') }}">Home</a></li>
                        <li><a href="{{ route ('about') }}">About</a></li>
                        <li><a href="{{ route ('blog') }}">Blog</a></li>
                        <li><a href="{{ route ('contact') }}">Contact</a></li>
                    </ul>
                </nav>

            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>



    </div>
</body>
</html>
