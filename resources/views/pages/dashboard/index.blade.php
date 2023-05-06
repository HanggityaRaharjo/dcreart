@extends('layouts.auth')

@section('content')
    <section class="min-h-screen p-5">
        {{-- Breadcrumbs --}}
        <div class="bg-white shadow-md p-1 rounded-md flex mb-5">
            <span>Dashboard</span>
        </div>
        {{-- End Breadcrumbs --}}

        <div class="grid grid-cols-3 gap-5 mb-5 text-white">
            <div class="h-56 bg-gradient-to-tr from-[#ffbe96] to-[#fe8696] shadow-md rounded-md relative overflow-hidden">
                {{-- Bubble --}}
                <div class="absolute bg-white w-32 h-32 rounded-full bg-opacity-20 -top-5 -right-5"></div>
                <div class="absolute bg-white w-44 h-44 rounded-full bg-opacity-20 -bottom-5 -right-5"></div>
                {{-- End Bubble --}}
                {{-- Content --}}
                <div class="h-full p-2">
                    asdasdasdasdasd
                </div>
                {{-- Content --}}
            </div>
            <div class="h-56 bg-gradient-to-tr from-[#8dc8f8] to-[#2791e6] shadow-md rounded-md relative overflow-hidden">
                {{-- Bubble --}}
                <div class="absolute bg-white w-32 h-32 rounded-full bg-opacity-20 -top-5 -right-5"></div>
                <div class="absolute bg-white w-44 h-44 rounded-full bg-opacity-20 -bottom-5 -right-5"></div>
                {{-- End Bubble --}}
                {{-- Content --}}
                <div class="h-full p-2">
                    asdasdasdasdasd
                </div>
                {{-- Content --}}
            </div>
            <div class="h-56 bg-gradient-to-tr from-[#80d9d1] to-[#2bd0b8] shadow-md rounded-md relative">
                {{-- Bubble --}}
                <div class="absolute bg-white w-32 h-32 rounded-full bg-opacity-20 -top-5 -right-5"></div>
                <div class="absolute bg-white w-44 h-44 rounded-full bg-opacity-20 -bottom-5 -right-5"></div>
                {{-- End Bubble --}}
                {{-- Content --}}
                <div class="h-full p-2">
                    asdasdasdasdasd
                </div>
                {{-- Content --}}
            </div>

        </div>

        <div class="h-56 bg-white shadow-md rounded-md"></div>


    </section>
@endsection
