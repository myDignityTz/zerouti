<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="text-gray-800">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}

    <title>UTI - Home</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="bg-teal-500 shadow">
            <div class="w-2/3 mx-auto">
                <div class="flex justify-between items-center">
                    <div class="font-extrabold">UTI</div>

                    <ul class="flex items-center">
                        <li><a href="/" class="mx-4 block text-teal-100 py-6">Home</a></li>
                        <li><a href="/about" class="mx-4 block text-teal-100 py-6">About Us</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
