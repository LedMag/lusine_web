<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('name')</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="/css/style.css">
        <link rel="stylesheet" href="/css/nivo-slider.css">
        <link rel="stylesheet" href="/css/light.css">
    </head>
    <body>
        <div class="container">
            @include('components.header-component')
            @yield('content')
            @include('components.footer-component')
        </div>

        <script src="/js/jquery.min.js"></script>
        <script src="/js/jquery.nivo.slider.js"></script>
        <script src="/js/main.js"></script>
    </body>
</html>