@extends('layouts.guest')

@section('content')
    {{-- Banner --}}
    <section>
        <div class="h-[532px] bg-fixed bg-cover bg-center w-full"
            style="background-image: url({{ asset('assets/images/banner-1.jpg') }})">
            <div class="bg-black bg-opacity-50 h-full relative">
                <h3 class="absolute text-5xl bottom-5 left-5 text-white">ABOUT US</h3>
            </div>
        </div>
    </section>
    {{-- End Banner --}}
    {{-- About --}}
    <section class="p-14">
        {{-- Grid --}}
        <div class="grid grid-cols-2 gap-14 justify-between">
            <div>
                <div class="mb-2 text-[#786a60]">
                    <h2 class="text-3xl font-bold">Create your comfortable home</h2>
                    <p class="font-semibold">With DCREART DESIGN</p>
                </div>
                <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis soluta nulla
                    consequuntur perspiciatis
                    repudiandae eos nobis debitis, quod quidem nostrum, pariatur blanditiis voluptates ab illum maxime, iure
                    amet voluptatibus sed. Eos maiores, nihil fugit odio, ab, mollitia numquam sed odit minima asperiores
                    quasi corrupti ut excepturi explicabo illo reiciendis omnis!</p>
            </div>
            <div>
                <div class="flex gap-5 justify-end">
                    <div class="h-96 w-[250px] bg-cover bg-center"
                        style="background-image: url({{ asset('assets/images/banner-1.jpg') }})"></div>
                    <div class="h-96 w-[250px] bg-cover bg-center mt-20"
                        style="background-image: url({{ asset('assets/images/banner-1.jpg') }})"></div>
                </div>
                <h2 class="text-5xl  text-[#786a60] text-center font-dcre">Create your comfortable home</h2>
            </div>
        </div>
        {{-- End Grid --}}
    </section>
    {{-- End About --}}
@endsection
