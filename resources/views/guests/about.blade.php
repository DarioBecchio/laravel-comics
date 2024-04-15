<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>About</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased">
        <h1>About me</h1>
        <p> Hello i'm {{$name}}  {{$lastname}}</p>
        <img src="dc-logo-bg.png" alt="">
        <img src="{{ Vite::asset('resources/images/footer-facebook.png') }}">
    </body>
</html>
