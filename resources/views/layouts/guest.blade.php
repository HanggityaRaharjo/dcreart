<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tangerine:wght@400;700&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    {{-- Swiper JS --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    {{-- JQUERY --}}
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
        crossorigin="anonymous"></script>

    <style>
        .swiper {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
    @vite('resources/css/app.css')
</head>

<body>
    @yield('css')
    @include('components.loading')
    @include('components.navbar')
    @include('components.sticky-button')

    <main>
        @yield('content')
    </main>

    {{-- Loading --}}
    <script>
        $(document).ready(function() {
            setTimeout(() => {
                $('#preload').addClass('hidden')

            }, 1000);
        });
        // HELPER
        const APP_ENV_URL = '{{ env('APP_URL') }}';
        const port = 8000;
        const APP_URL = `${APP_ENV_URL}:${port}`
    </script>
    {{-- End Loading --}}

    {{-- Listener Scroll For Navbar and Sticky Button --}}
    <script>
        window.addEventListener("scroll", (event) => {
            let yScroll = this.scrollY;
            if (yScroll > 100) {
                $('#navbar').addClass('bg-black bg-opacity-50 backdrop-blur-sm')
                $('#sticky-button').removeClass('translate-y-56')
                $('#sticky-button').addClass('translate-y-0')
                $('#header-nav').removeClass('max-h-32')
                $('#header-nav').addClass('max-h-0')
                $('#mobile-nav-menu').addClass('tp-56')

            } else {
                $('#navbar').removeClass('bg-black bg-opacity-50 backdrop-blur-sm')
                $('#sticky-button').removeClass('translate-y-0')
                $('#sticky-button').addClass('translate-y-56')
                $('#header-nav').addClass('max-h-32')
                $('#header-nav').removeClass('max-h-0')
                $('#mobile-nav-menu').removeClass('tp-56')
            }
        });
    </script>


    {{-- Swiper JS --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    @yield('javascript')

</body>

</html>
