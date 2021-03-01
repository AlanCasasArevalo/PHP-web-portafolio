<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <style>
        .active a {
            color: red;
            text-decoration: none;
        }
    </style>
</head>
<body>
<nav>
    <ul>
        <li class="{{request()->routeIs('home') ? 'active' : ''}}"><a href="/">Home</a></li>
        <li class="{{request()->routeIs('about') ? 'active' : ''}}"><a href="/about">Sobre nosotros</a></li>
        <li class="{{request()->routeIs('contact') ? 'active' : ''}}"><a href="/contact">Contacto</a></li>
        <li class="{{request()->routeIs('portfolio') ? 'active' : ''}}"><a href="/portfolio">Portfolio</a></li>
    </ul>
</nav>
@yield('content')
</body>
</html>
