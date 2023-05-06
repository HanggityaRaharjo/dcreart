<nav class="fixed w-screen z-[999]">
    <div class="bg-black text-white bg-opacity-50 backdrop-blur-sm flex justify-between items-center transition-all duration-300 max-h-32 h-10 lg:px-5 overflow-hidden"
        id="header-nav">
        <p>dcreart design</p>
        <p>Telp: 081-123-3454-232</p>
    </div>
    <div id="navbar" class="lg:px-32 px-4 flex justify-between items-center  transition-all duration-300">
        <div class="text-white py-4">
            <a href="{{ url('/') }}">
                Logo
            </a>
        </div>
        {{-- Desktop Nav --}}
        <div class="lg:flex gap-5 text-white hidden">
            <a href="{{ url('/') }}" class="py-4 {{ Request::is('/') ? 'text-[#a3865c]' : null }}">HOME</a>


            <div class="relative group py-4">
                <div class="flex items-center gap-1 cursor-pointer">
                    PROJECT
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-4 h-4 group-hover:-rotate-180 transition duration-300">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div
                    class=" absolute top-14 left-0 group-hover:max-h-20 max-h-0 transition-all duration-300 overflow-hidden bg-black bg-opacity-30">
                    <div class="mb-4 px-5">
                        <a href="{{ url('project/interior') }}"
                            class=" {{ Request::is('project/interior') ? 'text-[#a3865c]' : null }}">INTERIOR</a>
                    </div>
                    <div class="mb-4 px-5 pb-4">
                        <a href="{{ url('project/exterior') }}"
                            class=" {{ Request::is('project/exterior') ? 'text-[#a3865c]' : null }}">EXTERIOR</a>
                    </div>
                </div>
            </div>
            <a href="{{ url('/posts') }}" class="py-4 {{ Request::is('posts') ? 'text-[#a3865c]' : null }}">POST</a>
            <a href="{{ url('/contact') }}"
                class=" py-4 {{ Request::is('contact') ? 'text-[#a3865c]' : null }}">CONTACT</a>
            <a href="{{ url('/about') }}" class="py-4 {{ Request::is('about') ? 'text-[#a3865c]' : null }}">ABOUT
                US</a>
        </div>
        {{-- Mobile Nav --}}
        <div class="lg:hidden flex justify-center items-center text-white">
            <button onclick="HandleMobileNav()">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
        </div>
        {{-- Mobile Nav Menu --}}
        <div class="absolute text-white top-[80px] text-sm left-0 w-full overflow-hidden bg-[inherit]  max-h-0 transition-all duration-700"
            id="mobile-nav-menu">
            <a href="{{ url('/') }}">
                <div
                    class="m-2 p-2 rounded-md bg-black backdrop-blur-sm bg-opacity-50 {{ Request::is('/') ? 'text-[#a3865c]' : null }}">
                    HOME</div>
            </a>
            <a href="{{ url('/posts') }}">
                <div
                    class="m-2 p-2 rounded-md bg-black backdrop-blur-sm bg-opacity-50 {{ Request::is('post') ? 'text-[#a3865c]' : null }}">
                    POST</div>
            </a>
            <a href="{{ url('/contact') }}">
                <div
                    class="m-2 p-2 rounded-md bg-black backdrop-blur-sm bg-opacity-50 {{ Request::is('contact') ? 'text-[#a3865c]' : null }}">
                    CONTACT</div>
            </a>
            <a href="{{ url('/about') }}">
                <div
                    class="m-2 p-2 rounded-md bg-black backdrop-blur-sm bg-opacity-50 {{ Request::is('about') ? 'text-[#a3865c]' : null }}">
                    ABOUT US</div>
            </a>
            <a href="{{ url('/about') }}">
                <div
                    class="m-2 p-2 rounded-md bg-black backdrop-blur-sm bg-opacity-50 {{ Request::is('about') ? 'text-[#a3865c]' : null }}">
                    INTERIOR
                </div>
            </a>
            <a href="{{ url('/about') }}">
                <div
                    class="m-2 p-2 rounded-md bg-black backdrop-blur-sm bg-opacity-50 {{ Request::is('about') ? 'text-[#a3865c]' : null }}">
                    EXTERIOR</div>
            </a>


        </div>
    </div>
</nav>

<script>
    const HandleMobileNav = () => {
        $('#mobile-nav-menu').toggleClass('mh-400')
    }
</script>
