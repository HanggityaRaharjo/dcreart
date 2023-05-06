@extends('layouts.guest')

@section('content')
    <section class="h-screen bg-cover bg-center" style="background-image: url({{ asset('assets/images/banner-1.jpg') }})">
        <div class="h-full w-full flex justify-center items-center bg-black bg-opacity-30 backdrop-blur-sm">
            <div class="border p-5 rounded-md bg-gray-200">
                <form action="{{ url('login') }}" method="POST">
                    @csrf
                    <h3 class="text-center text-2xl">Login</h3>
                    <div class="flex flex-col mb-2">
                        <label for="email">Email</label>
                        <input type="text" id="email" name="email" class="w-56 h-10 px-2 rounded-md">
                    </div>
                    <div class="flex flex-col mb-5">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" class="w-56 h-10 px-2 rounded-md">
                    </div>
                    <div class="flex justify-center w-full">
                        <button type="submit" class="text-white bg-[#9b7b4d] rounded-md w-full py-2">Login</button>
                    </div>
                    <div class="text-right text-sm">
                        <a href="{{ url('register') }}">Register</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
