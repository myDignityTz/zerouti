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
    <!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
    <script>
        window.fbAsyncInit = function() {
            FB.init({
                xfbml : true,
                version : 'v5.0'
            });
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

    <!-- Your customer chat code -->
    <div class="fb-customerchat"
         attribution=setup_tool
         page_id="106095114160774"
         theme_color="#67b868">
    </div>

    <div id="app">
        <nav class="bg-teal-500 shadow">
            <div class="w-2/3 mx-auto">
                <div class="flex justify-between items-center">
                    <div class="font-extrabold">
                        <img class="h-8" src="/img/logo/logo-black.png" alt="">
                    </div>

                    <ul class="flex items-center">
                        <li><a href="/" class="mx-4 block text-teal-100 py-6">Home</a></li>
                        <li><a href="/about" class="mx-4 block text-teal-100 py-6">About Us</a></li>
                        <li><a href="/symptoms" class="mx-4 block text-teal-100 py-6">Symptoms</a></li>
                        <li><a href="/preventions" class="mx-4 block text-teal-100 py-6">Preventions</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <main>
            @yield('content')
        </main>
    </div>
</body>
</html>
