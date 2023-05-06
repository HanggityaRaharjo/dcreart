@extends('layouts.guest')

@section('content')
    {{-- Banner --}}
    <section>
        <div class="h-[532px] bg-fixed bg-cover bg-center w-full"
            style="background-image: url({{ asset('assets/images/banner-1.jpg') }})">
            <div class="bg-black bg-opacity-50 h-full relative">
                <h3 class="absolute text-5xl bottom-5 left-5 text-white">Our Project</h3>
            </div>
        </div>
    </section>
    {{-- End Banner --}}
    <section>
        <div class="p-14">
            {{-- Project Title --}}
            <h3 class="text-3xl text-[#786a60] mb-3">EXTERIOR</h3>
            {{-- End Project Title --}}
            {{-- Category --}}
            <div class="grid grid-cols-5 gap-5 mb-7">
                <a href=""
                    class="bg-[#786a60] text-white p-1 rounded-md w-40 text-center hover:scale-105 transition duration-150">Modern
                    Luxury</a>
                <a href=""
                    class="bg-[#786a60] text-white p-1 rounded-md w-40 text-center hover:scale-105 transition duration-150">Modern
                    Luxury</a>
                <a href=""
                    class="bg-[#786a60] text-white p-1 rounded-md w-40 text-center hover:scale-105 transition duration-150">Modern
                    Luxury</a>
                <a href=""
                    class="bg-[#786a60] text-white p-1 rounded-md w-40 text-center hover:scale-105 transition duration-150">Modern
                    Luxury</a>
                <a href=""
                    class="bg-[#786a60] text-white p-1 rounded-md w-40 text-center hover:scale-105 transition duration-150">Modern
                    Luxury</a>
            </div>
            {{-- End Category --}}
            {{-- Project Card --}}
            {{-- Grid Column 3 --}}
            <div class="grid grid-cols-3 gap-20 mb-10">
                {{-- Card --}}
                <a href="">
                    <div class="h-[500px] overflow-hidden relative bg-cover bg-center"
                        style="background-image: url({{ asset('assets/images/hero-2.jpeg') }})">
                        <div class="absolute bottom-0 p-2 w-full bg-[#a6a6a6] flex justify-between items-center ">
                            <h5 class="text-white">Modern Luxury</h5>
                            <div class="flex text-[#786a60] gap-1">
                                <span>Details</span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                                </svg>

                            </div>
                        </div>
                    </div>
                </a>
                {{-- End Card --}}
                {{-- Card --}}
                <a href="">
                    <div class="h-[500px] overflow-hidden relative bg-cover bg-center"
                        style="background-image: url({{ asset('assets/images/hero-2.jpeg') }})">
                        <div class="absolute bottom-0 p-2 w-full bg-[#a6a6a6] flex justify-between items-center ">
                            <h5 class="text-white">Modern Luxury</h5>
                            <div class="flex text-[#786a60] gap-1">
                                <span>Details</span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                                </svg>

                            </div>
                        </div>
                    </div>
                </a>
                {{-- End Card --}}
                {{-- Card --}}
                <a href="">
                    <div class="h-[500px] overflow-hidden relative bg-cover bg-center"
                        style="background-image: url({{ asset('assets/images/hero-2.jpeg') }})">
                        <div class="absolute bottom-0 p-2 w-full bg-[#a6a6a6] flex justify-between items-center ">
                            <h5 class="text-white">Modern Luxury</h5>
                            <div class="flex text-[#786a60] gap-1">
                                <span>Details</span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                                </svg>

                            </div>
                        </div>
                    </div>
                </a>
                {{-- End Card --}}

            </div>
            {{-- End Grid --}}
            {{-- Grid Column 2 --}}
            <div class="grid grid-cols-2 gap-20">
                {{-- Card --}}
                <div class="h-80 relative bg-cover bg-center"
                    style="background-image: url({{ asset('assets/images/hero-2.jpeg') }})">
                    <div class="absolute bottom-0 p-2 w-full bg-[#a6a6a6] flex justify-between items-center ">
                        <h5 class="text-white">Modern Luxury</h5>
                        <a href="" class="flex text-[#786a60] gap-1">
                            <span>Details</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                            </svg>
                        </a>
                    </div>
                </div>
                {{-- End Card --}}
                {{-- Card --}}
                <div class="h-80 relative bg-cover bg-center"
                    style="background-image: url({{ asset('assets/images/hero-2.jpeg') }})">
                    <div class="absolute bottom-0 p-2 w-full bg-[#a6a6a6] flex justify-between items-center ">
                        <h5 class="text-white">Modern Luxury</h5>
                        <a href="" class="flex text-[#786a60] gap-1">
                            <span>Details</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                            </svg>
                        </a>
                    </div>
                </div>
                {{-- End Card --}}
                {{-- End Project Card --}}
            </div>
            {{-- End Grid Column 2 --}}

    </section>
@endsection
