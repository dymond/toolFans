<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('partials.meta')
    @include('partials.header-styles')
    @include('partials.header-scripts')
    @stack('header-scripts')
    @stack('header-styles')
</head>
<body class="bg-gray-900 font-sans leading-normal tracking-normal antialiased min-h-full">
@include('partials.header')
<div id="app">
    @yield('content')
</div>
@include('partials.footer')
@include('partials.footer-scripts')
@stack('footer-scripts')
</body>
</html>
