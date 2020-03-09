<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ (isset($sitetitle) ? $sitetitle . ' - ' : '') . 'BAZAEMOJ' }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        @include('layouts.menu')
        <div class="container-fluid mt-2" id="siteheader">
            @yield('siteheader')
        </div>
        <div class="container-fluid mt-2">
            @yield('content')
        </div>
    </div>
    @stack('scripts')
    @yield('scripts')
</body>
</html>
