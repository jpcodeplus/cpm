<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title ?? config('app.name', 'CPM') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('img/fav.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('img/fav.svg') }}" type="image/svg+xml">
</head>

<body>
    <x-app.header />
    <main>{{ $content }}</main>
    <x-app.footer />
</body>

</html>
