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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pannellum@2.5.6/build/pannellum.css" />
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/pannellum@2.5.6/build/pannellum.js"></script>
    <style>
        #panorama {
            width: 100%;
            height: 400px;
        }
    </style>
    @vite('resources/css/app.css')
    @yield('css')
</head>

<body>

    @include('components.header-auth')
    @include('components.sidebar')
    <main class="pt-[74px] pl-[250px] transition-all duration-300 bg-gray-100" id="main-content">
        @yield('content')
    </main>

    <script>
        // Sidebar State
        let sidebarState = true;

        const HandleSidebar = () => {
            sidebarState = (sidebarState) ? false : true;
            if (sidebarState) {
                $('#main-content').removeAttr("style")
                $('#header').removeAttr("style")
                $('#sidebar').removeAttr("style")
            } else {
                $('#main-content').css('padding-left', '0px')
                $('#header').css('padding-left', '0px')
                $('#sidebar').css('width', '0px')
            }
        }
    </script>


</body>

</html>
