<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Voice Recognize') }}</title>
    <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon"/>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <!-- Stylesheet -->
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/global/adminlte.min.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}" rel="stylesheet">
    @stack('style-head')
    <!-- Javascript -->
    <script>var baseUrl = "{{url('/')}}";</script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/global/adminlte.min.js') }}" defer></script>
    <script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}" defer></script>
    @stack('script-head')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <div id="app">
        <div class="wrapper">
            @include('layouts.header')
            @include('layouts.aside')
            <div class="content-wrapper">
                @yield('content')
            </div>
            @include('layouts.footer')
        </div>
    </div>
</body>
</html>
