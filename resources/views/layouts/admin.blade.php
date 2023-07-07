<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'LaraGym') }}</title>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="{{ asset('datatables/css/jquery.dataTables.min.css') }}">

    {{-- Icons --}}
    <link rel="stylesheet" href="{{ asset('feather-icons/feather.css') }}">
    <link href="{{ asset('remixicon/remixicon.css') }}" rel="stylesheet">
</head>
<body>
    <div class="grid grid-cols-1 lg:grid-cols-16-auto">
        <div>
            @include('admin.partials.sidebar')
        </div>
        <div>
            @include('admin.partials.navbar')
            <main class="min-h-screen px-4 pt-20 pb-6 lg:px-6">
                {{ $slot }}
                @include('admin.partials.footer')
            </main>
        </div>
    </div>

    {{-- Loader --}}
    <div class="fixed top-0 left-0 z-50 w-full h-full flex-center-center bg-main-bg/70 dark:bg-main-dark/70 backdrop-blur-sm"
        id="loader">
        <div class="loader"></div>
    </div>

    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('datatables/js/dataTables.dataTables.min.js') }}"></script>


</body>
</html>