<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <title>SPAサンプル</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> --}}
</head>

<body>
    <div id="app">
        <global-header></global-header>
        <router-view />
        <global-footer></global-footer>
    </div>
</body>

</html>
