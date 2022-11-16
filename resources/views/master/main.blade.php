<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'CatApeamentos') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    @if(Request::is('lme-board'))
        <script src="{{ asset('js/lme-board.js') }}" defer></script>
    @endif
    @yield('scripts')

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    @yield('styles')
</head>
<body>
<div id="app">
    {{-- Header --}}
    @guest
    @else
        @component('master.header')
        @endcomponent
    @endguest
{{--     .Header --}}

    {{-- Content --}}
    <main class="mt-custom">
        @yield('content')
    </main>
    {{-- .Content --}}

    {{-- Footer --}}
    @guest
    @else
        @component('master.footer')
        @endcomponent
    @endguest
    {{-- .Footer --}}
</div>
</body>
</html>
