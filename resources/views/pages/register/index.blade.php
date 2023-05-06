@extends('layouts.guest')

@section('content')
    <section class="h-screen bg-cover bg-center" style="background-image: url({{ asset('assets/images/banner-1.jpg') }})">
        <div class="h-full w-full flex justify-center items-center bg-black bg-opacity-30 backdrop-blur-sm">
            <div class="border p-5 rounded-md bg-gray-200">
                <form action="{{ url('/register') }}" method="POST">
                    @csrf
                    <h3 class="text-center text-2xl">Register</h3>
                    <div class="flex flex-col mb-2">
                        <label for="">Email</label>
                        <input type="email" name="email" class="w-56 h-10 px-2 rounded-md">
                    </div>
                    <div class="flex flex-col mb-2">
                        <label for="">Name</label>
                        <input type="text" name="name" class="w-56 h-10 px-2 rounded-md">
                    </div>
                    <div class="flex flex-col mb-5">
                        <label for="">Password</label>
                        <input type="password" name="password" class="w-56 h-10 px-2 rounded-md">
                    </div>
                    <div class="flex justify-center w-full">
                        <button type="submit" class="text-white bg-[#9b7b4d] rounded-md w-full py-2">Register</button>
                    </div>
                </form>
                <div class="text-right text-sm">
                    <a href="{{ url('login') }}">Login</a>
                </div>
            </div>
        </div>
    </section>
@endsection
