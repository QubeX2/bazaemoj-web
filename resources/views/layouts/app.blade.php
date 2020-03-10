<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ (isset($sitetitle) ? $sitetitle . ' - ' : '') . 'EMOIARY' }}</title>

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
        <div id="messages" class="container-fluid mt-2">
            @if (isset($messages) && $messages->count() > 0)
                @foreach($messages as $message)
                    <div class="alert {{$message->class}}" role="alert">
                        {{ $message->text }}
                    </div>
                @endforeach
            @endif
        </div>
        <div id="siteheader" class="container-fluid mt-2">
            @yield('siteheader')
        </div>
        <div class="container-fluid mt-2">
            <div class="row">
                <div class="col-md-2">
                    @yield('left-side')
                </div>
                <div class="col-md-7">
                    @yield('content')
                </div>
                <div class="col-md-3">
                    @yield('right-side')
                </div>
            </div>
        </div>
    </div>
    @stack('scripts')
    @yield('scripts')
</body>
</html>
