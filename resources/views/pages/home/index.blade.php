@extends('layouts.guest')

@section('content')
    {{-- Hero --}}
    <section class="h-fit  flex flex-col ">
        <div class="h-screen md:h-[532px]  relative">
            <!-- Swiper -->
            <div class="swiper mySwiper bg-[#bfbfbf] relative">
                <div class="swiper-wrapper">
                    <div class="swiper-slide h-full relative">
                        <img width="100%" height="100%" src="{{ asset('assets/images/banner-2.jpeg') }}" alt="">
                        <div class="bg-black absolute top-0 left-0 w-full h-full bg-opacity-10"></div>
                    </div>
                    <div class="swiper-slide h-full relative">
                        <img width="100%" height="100%" src="{{ asset('assets/images/banner-1.jpg') }}" alt="">
                        <div class="bg-black absolute top-0 left-0 w-full h-full bg-opacity-10"></div>
                    </div>
                    <div class="swiper-slide h-full relative">
                        <img width="100%" height="100%" src="{{ asset('assets/images/banner-1.jpg') }}" alt="">
                        <div class="bg-black absolute top-0 left-0 w-full h-full bg-opacity-10"></div>
                    </div>
                    <div class="swiper-slide h-full relative">
                        <img width="100%" height="100%" src="{{ asset('assets/images/banner-1.jpg') }}" alt="">
                        <div class="bg-black absolute top-0 left-0 w-full h-full bg-opacity-10"></div>
                    </div>

                </div>

                <div class="swiper-pagination"></div>
            </div>
            {{-- Text Title Hero --}}
            <div class="absolute z-[100] text-white  top-[450px] left-1/2 -translate-x-1/2">
                <h3 class="italic text-5xl font-dcre">Create your comfortable home</h3>
            </div>
            {{-- End Text Title Hero --}}

        </div>
        <div class="h-fit bg-[#bfbfbf]">
            {{-- Grid --}}
            <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-3 gap-5 px-20 h-full overflow-hidden">
                {{-- Promotion --}}
                <div class="p-1 flex flex-col justify-between animate-opacity">
                    <div class="flex justify-center">
                        <div class="flex justify-center items-center p-1 bg-[#7d6959] h-fit w-fit rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-16 h-16 text-[#c8c8c8]">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                    </div>
                    <h4 class="text-center font-bold">Future Of Design</h4>
                    <p class="text-sm">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia, voluptatum esse
                        nam dicta maxime
                        eveniet voluptas soluta ut eius laborum?</p>
                </div>
                {{-- End Promotion --}}
                {{-- Promotion --}}
                <div class="p-1 flex flex-col justify-between animate-opacity">
                    <div class="flex justify-center">
                        <div class="flex justify-center items-center p-2 bg-[#7d6959] h-fit w-fit rounded-full">

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-14 h-14 text-[#c8c8c8]">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 00-2.456 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 001.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 001.423 1.423l1.183.394-1.183.394a2.25 2.25 0 00-1.423 1.423z" />
                            </svg>

                        </div>
                    </div>
                    <h4 class="text-center font-bold">Creative freedom for all</h4>
                    <p class="text-sm">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia, voluptatum esse
                        nam dicta maxime
                        eveniet voluptas soluta ut eius laborum?</p>
                </div>
                {{-- End Promotion --}}
                {{-- Promotion --}}
                <div class="p-1 flex flex-col justify-between animate-opacity">
                    <div class="flex justify-center">
                        <div class="flex justify-center items-center p-2 bg-[#7d6959] h-fit w-fit rounded-full">

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-14 h-14 text-[#c8c8c8]">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.042 21.672L13.684 16.6m0 0l-2.51 2.225.569-9.47 5.227 7.917-3.286-.672zM12 2.25V4.5m5.834.166l-1.591 1.591M20.25 10.5H18M7.757 14.743l-1.59 1.59M6 10.5H3.75m4.007-4.243l-1.59-1.59" />
                            </svg>

                        </div>
                    </div>
                    <h4 class="text-center font-bold">Easy to use tool</h4>
                    <p class="text-sm">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia, voluptatum esse
                        nam dicta maxime
                        eveniet voluptas soluta ut eius laborum?</p>
                </div>
                {{-- End Promotion --}}
            </div>
            {{-- End Grid --}}
        </div>
    </section>
    {{-- End Hero --}}

    {{-- Section How It Work  --}}
    <section class="md:min-h-screen flex flex-col">

        <div class="h-[80%] grid lg:grid-cols-2 md:grid-cols-1 select-animation">
            <div class="p-10">
                <h2 class="py-6 text-4xl text-[#9b7b4d] font-bold ">How it Works?</h2>
                <div class="flex ">
                    <div class="w-[20%] flex flex-col justify-center gap-32 items-center">

                        <img src="{{ asset('assets/steps.png') }}" class="h-80" alt="">
                    </div>
                    <div class="w-[90%] flex flex-col justify-between">
                        <div class="mb-5">
                            <h3 class="font-semibold mb-3">Get a good location</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima nisi nobis asperiores quas
                                alias eligendi ex laudantium impedit sunt placeat?</p>
                        </div>
                        <div class="mb-5">
                            <h3 class="font-semibold mb-3">Find the right professional</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima nisi nobis asperiores quas
                                alias eligendi ex laudantium impedit sunt placeat?</p>
                        </div>
                        <div>
                            <h3 class="font-semibold mb-3">Making Plans</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima nisi nobis asperiores quas
                                alias eligendi ex laudantium impedit sunt placeat?</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-10">
                <div class="h-full overflow-hidden flex justify-center items-center">
                    <img src="{{ asset('assets/images/hero-1.jpeg') }}" width="100%" height="100%" class="w-[700px]"
                        alt="">
                </div>
            </div>
        </div>
        <div class="h-[20%] bg-[#bfbfbf] overflow-hidden">
            {{-- Grid --}}
            <div class="grid lg:grid-cols-3 grid-cols-1 gap-5 px-20 h-full items-center  select-animation2">
                {{-- Promotion --}}
                <div>
                    <h4 class="text-2xl text-[#896a59] mb-2">Alamat Workshop</h4>
                    <p class="text-lg">Jl. soekarno Hatta No.394 Karasak,Kec. Astanaanyar, Kota Bandung,Jawa Barat 40243
                    </p>
                </div>
                {{-- End Promotion --}}
                {{-- Promotion --}}
                <div>
                    <h4 class="text-2xl text-[#896a59] mb-2">Alamat Kantor</h4>
                    <p class="text-lg">Jl. Suryalaya XII No.3 Cijagra,Kec. Lengkong, Kota Bandung, Jawa Barat 40265</p>
                </div>
                {{-- End Promotion --}}
                {{-- Promotion --}}
                <div>
                    <h4 class="text-2xl text-[#896a59] mb-2">Alamat Kantor</h4>
                    <p class="text-lg">Ruko Magna Commercial MA/ii-Lantai 2 (Summarecon Bandung)</p>
                </div>
                {{-- End Promotion --}}

            </div>
            {{-- End Grid --}}
        </div>

    </section>
    {{-- End Section How It Work --}}

    {{-- Featutes Section --}}
    <section>
        <h3 class="text-4xl text-[#9b7b4d] font-bold text-center my-5">Features</h3>
        {{-- List Features --}}
        <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-2 gap-20 px-20">
            @foreach ($features as $feature)
                {{-- Feature --}}
                <div class="flex flex-col items-center text-[#9b7b4d]">
                    <img src="{{ asset('assets/images/features/' . $feature->image) }}" class="w-16 h-16 "
                        alt="">
                    <p>{{ $feature->feature_name }}</p>
                </div>
                {{-- End Feature --}}
            @endforeach
        </div>
        {{-- End List Features --}}
    </section>
    {{-- End Featutes Section --}}

    {{-- Projects Section --}}
    <section class="min-h-screen">
        <h3 class="text-4xl text-[#9b7b4d] font-bold text-center my-5">Projects</h3>
        <div class="grid grid-cols-1 w-full">
            <?php $number = 0; ?>
            @foreach ($projects as $project)
                <?php $number++; ?>
                @if ($number % 2 == 0)
                    {{-- Project odd --}}
                    <div class="flex flex-col lg:flex-row gap-5 mb-2">
                        {{-- Project Text --}}
                        <div class="lg:w-1/2 w-full p-5 relative ">
                            <h4 class="text-3xl text-[#9b7b4d] border-b border-[#9b7b4d] mb-5">{{ $project->name }}</h4>
                            <p>{{ $project->description }}</p>
                            <a href="{{ url('project/show/' . $project->slug) }}">
                                <div
                                    class="absolute border bottom-0 right-1/2 -translate-x-1/2 bg-[#9b7b4d] text-white p-2 rounded-md">
                                    Detail
                                </div>
                            </a>
                        </div>
                        {{-- End Project Text --}}
                        {{-- Project Image --}}
                        <div class="border lg:w-1/2 -order-1 lg:order-1 w-full h-72 lg:rounded-l-full overflow-hidden bg-cover bg-center relative"
                            style="background-image: url('assets/images/banner-1.jpg')">
                            <div class="absolute right-0 bottom-0 bg-black text-white bg-opacity-30 backdrop-blur-sm p-2">
                                {{ $project->project_category->name }}</div>
                        </div>
                        {{-- End Project Image --}}
                    </div>
                    {{-- End Project odd --}}
                @else
                    {{-- Project Even --}}
                    <div class="flex flex-col lg:flex-row  gap-5 mb-2">
                        {{-- Project Image --}}
                        <div class="border lg:w-1/2 w-full  h-72 lg:rounded-r-full overflow-hidden bg-cover bg-center relative"
                            style="background-image: url({{ asset('assets/images/project-images/' . $project->project_image->first()->file) }})">
                            <div class="absolute left-0 bottom-0 bg-black text-white bg-opacity-30 backdrop-blur-sm p-2">
                                {{ $project->project_category->name }}</div>
                        </div>
                        {{-- End Project Image --}}
                        {{-- Project Text --}}
                        <div class="lg:w-1/2 w-full p-5 relative ">
                            <h4 class="text-3xl text-[#9b7b4d] border-b border-[#9b7b4d] mb-5">{{ $project->name }}</h4>
                            <p>{{ $project->description }}</p>
                            <a href="{{ url('project/show/' . $project->slug) }}">
                                <div
                                    class="absolute border bottom-0 right-1/2 -translate-x-1/2 bg-[#9b7b4d] text-white p-2 rounded-md">
                                    Detail
                                </div>
                            </a>
                        </div>
                        {{-- End Project Text --}}
                    </div>
                    {{-- End Project Even --}}
                @endif
            @endforeach
        </div>
    </section>
    {{-- End Projects Section --}}

    {{-- Review Section --}}
    <section class="p-5">
        {{-- Review Show --}}
        <div class="flex justify-center mb-5">
            <div class="w-80 h-48 text-white bg-[#9b7b4d] flex gap-2 p-2 rounded-md shadow-md shadow-gray-400">
                {{-- Card Profile --}}
                <div class="w-32">
                    <img src="{{ asset('assets/images/testimonials/' . $single_testimonial->user_image) }}"
                        class="w-20 h-20 rounded-full" alt="">
                </div>
                {{-- End Card Profile --}}
                {{-- Card Content --}}
                <div>
                    <h4 class="text-lg">{{ $single_testimonial->user_name }}</h4>
                    {{-- Rating --}}
                    <div class="flex gap-2">
                        @for ($i = 1; $i <= $single_testimonial->rating; $i++)
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                            </svg>
                        @endfor

                    </div>
                    {{-- End Rating --}}
                    <p class="w-[200px]">{{ substr($single_testimonial->text, 0, 90) }}</p>
                </div>
                {{-- End Card Content --}}
            </div>
        </div>
        {{-- End Review Show --}}
        {{-- Review Grid --}}
        <div class="grid lg:grid-cols-4 grid-cols-1 justify-between gap-10">
            @foreach ($testimonials as $testimonial)
                {{-- Card Preview --}}
                <div class="flex justify-center">
                    <div class="w-72 h-44 text-white bg-[#9b7b4d] flex gap-2 p-2 rounded-md shadow-md shadow-gray-400">
                        {{-- Card Profile --}}
                        <div>
                            <img width="100%" height="100%"
                                src="{{ asset('assets/images/testimonials/' . $testimonial->user_image) }}"
                                class="w-16 h-16 rounded-full" alt="">
                        </div>
                        {{-- End Card Profile --}}
                        {{-- Card Content --}}
                        <div>
                            <h4 class="text-lg">{{ $testimonial->user_name }}</h4>
                            {{-- Rating --}}
                            <div class="flex gap-2">
                                @for ($i = 1; $i <= $testimonial->rating; $i++)
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                                    </svg>
                                @endfor
                            </div>
                            {{-- End Rating --}}
                            <p class="w-[200px]">{{ substr($testimonial->text, 0, 80) }}
                            </p>
                        </div>
                        {{-- End Card Content --}}
                    </div>
                </div>
                {{-- End Card Preview --}}
            @endforeach

        </div>
        {{-- End Review Grid --}}
    </section>
    {{-- End Review Section --}}

    {{-- Blog Section --}}
    <section>
        <h3 class="text-4xl text-[#9b7b4d] font-bold text-center my-5">Blog</h3>
        {{-- Grid Posts --}}
        <div class="grid grid-cols-1 gap-2 justify-center px-5">
            @foreach ($posts as $post)
                {{-- Post --}}
                <div
                    class="border lg:flex flex-col gap-10 p-2 rounded-md shadow-md bg-white transition duration-300 cursor-pointer">
                    <div class="flex justify-center items-center w-full">
                        <div class="w-96">
                            <img src="{{ asset('assets/images/posts/' . $post->image) }}" alt="">
                        </div>
                    </div>

                    {{-- Post Content --}}
                    <div>
                        <div class="flex justify-between mb-5">
                            {{-- Post Title --}}
                            <h3 class="text-lg">
                                {{ $post->name }}
                            </h3>
                            {{-- End Post Title --}}
                            <p>{{ $post->created_at }}</p>
                        </div>
                        <p>{{ substr($post->body, 0, 400) }}...</p>
                    </div>
                    {{-- End Post Content --}}
                </div>
                {{-- End Post --}}
            @endforeach

        </div>
        {{-- End Grid Posts --}}
    </section>
    {{-- End Blog Section --}}
@endsection


@section('javascript')
    <script>
        // Animating On Scroll 
        window.addEventListener("scroll", (event) => {
            let yScroll = this.scrollY;
            console.log(yScroll);
            if (yScroll > 50) {
                $('.select-animation').addClass('animate-from-down')
            }
            if (yScroll > 550) {
                $('.select-animation2').addClass('animate-from-down')
            }
        });
        // Slider 
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            speed: 1500,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },

        });
    </script>
@endsection
