<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset=utf-8>
    <meta name="viewport" content="user-scalable=0,width=device-width,minimum-scale=1,initial-scale=1,maximum-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? config('app.name', 'TV NET Feed') }}</title>

    <link href="{{ url('/raivovaisla/tvnet-feed/css/front.css') }}" rel="stylesheet">
</head>
<body>
<div class="page-wrapper">
    @if(Auth::check())
        @include('feed::includes.authenticated')
    @endif
    @include('feed::includes.alerts')
    @yield('content')
</div>

<div id="footer">
    <p>&copy; {{ date('Y') }} raivovaisla&#64;gmail.com</p>
</div>

<script src="{{ url('/raivovaisla/tvnet-feed/js/jquery-3.4.1.min.js') }}"></script>
@yield('custom_scripts')
</body>
</html>