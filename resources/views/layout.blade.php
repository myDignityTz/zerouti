<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="text-gray-800 antialiased" style="scroll-behavior: smooth;">
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
        <nav class="w-full bg-teal-500 bg-gradient">
            <div class="lg:px-16">
                <div class="lg:flex lg:justify-between lg:items-center">
                    <div class="flex items-center justify-between px-4 py-4">
                        <div>
                            <img class="h-8" src="{{ asset('img/logo/genu.png') }}" alt="">
                        </div>
                        <span class="hidden mx-4 text-teal-200">|</span>
                        <div>
                            <img class="h-6" src="{{ asset('img/logo/logo-black.png') }}" alt="">
                        </div>
                    </div>

                    <ul class="lg:flex lg:items-center">
                        <li>
                            <a href="{{ url('/') }}"
                               class="lg:mx-4 lg:px-0 px-4 block text-white font-semibold lg:py-8 py-4"
                            >
                                {{ cache('lang') == 'eng' ? 'Home' : 'Nyumbani' }}
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('about') }}"
                               class="lg:mx-4 lg:px-0 px-4 block text-white font-semibold lg:py-8 py-4"
                            >
                                {{ cache('lang') == 'eng' ? 'About Us' : 'Kuhusu' }}
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('symptoms') }}"
                               class="lg:mx-4 lg:px-0 px-4 block text-white font-semibold lg:py-8 py-4"
                            >
                                {{ cache('lang') == 'eng' ? 'Symptoms' : 'Dalili' }}
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('preventions') }}"
                               class="lg:mx-4 lg:px-0 px-4 block text-white font-semibold lg:py-8 py-4"
                            >
                                {{ cache('lang') == 'eng' ? 'Preventions' : 'Kudhibiti' }}
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('treatments') }}"
                               class="lg:mx-4 lg:px-0 px-4 block text-white font-semibold lg:py-8 py-4"
                            >
                                {{ cache('lang') == 'eng' ? 'Treatment' : 'Matibabu' }}
                            </a>
                        </li>
                    </ul>

                    <div class="flex items-center lg:justify-start justify-end bg-teal-200 lg:px-1 lg:py-1 lg:rounded px-4 py-2 -mx-2">
                        <a
                            href="?lang=eng"
                            class="lg:px-2 lg:py-1 py-2 px-2 text-xs uppercase tracking-wider rounded {{ cache('lang') == 'eng' ? 'bg-white shadow' : '' }}"
                        >Eng</a>
                        <a
                            href="?lang=swa"
                            class="lg:px-2 lg:py-1 py-2 px-2 text-xs uppercase tracking-wider rounded {{ cache('lang') == 'swa' ? 'bg-white shadow' : '' }}"
                        >Swa</a>
                    </div>
                </div>
            </div>
        </nav>

        <main>
            @yield('content')
        </main>
    </div>
</body>
</html>
