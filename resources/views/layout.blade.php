<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}" defer></script>
    <style>
    </style>
</head>
<body>
<div id="app" class="d-flex flex-column h-screen justify-content-between">
    <header>
        @include('partials.nav')
        @include('partials.session-status')
    </header>
    <main>
        @yield('content')
    </main>
    <footer class="bg-white text-black-50 text-center py-3">
        {{ config('app.name') }} | Copyright @ {{ date('Y') }}
    </footer>
</div>
</body>
</html>
