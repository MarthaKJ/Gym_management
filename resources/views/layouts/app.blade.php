<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'LaraGym') }}</title>

    {{-- Icons --}}
    <link rel="stylesheet" href="{{ asset('feather-icons/feather.css') }}">
    <link href="{{ asset('remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('flaticon/font/flaticon.css') }}" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/main.js'])
</head>
<body class="font-questrial text-slate-300 bg-main-dark">
    <!-- Page Content -->
    <main>
        {{ $slot }}
    </main>
    </div>

    <button class="fixed bottom-0 right-0 grid mb-4 mr-4 z-30 rounded-full shadow back-to-top-btn w-9 h-9
        place-items-center bg-primary shadow-primary/60 text-white" onclick="window.scrollTo(0, 0)">
        <i class="feather-chevron-up"></i>
    </button>
</body>
</html>