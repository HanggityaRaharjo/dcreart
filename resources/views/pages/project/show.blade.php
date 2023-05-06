@extends('layouts.guest')

@section('content')
    @include('components.modal-project')
    @include('components.alert-copy')
    {{-- Project Show --}}
    <section>
        <div class="h-screen relative">
            <!-- Swiper -->
            <div style="--swiper-navigation-color: white; --swiper-pagination-color: #bfbfbf" class="swiper mySwiper2">
                <div class="swiper-wrapper">
                    <?php $number = 1; ?>
                    @foreach ($project->project_image as $image)
                        <div class="swiper-slide bg-cover bg-center"
                            style="background-image: url({{ asset('assets/images/project-images/' . $image->file) }})">
                            <div class="w-full h-full py-10  flex justify-center bg-black bg-opacity-50 backdrop-blur-sm">
                                <img class="card-show cursor-zoom-in"
                                    src="{{ asset('assets/images/project-images/' . $image->file) }}"
                                    onclick="ZoomInProject({{ $number++ }})" alt="">
                            </div>
                        </div>
                    @endforeach

                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>


            {{-- Thumb --}}
            <div class="absolute bottom-2 w-full ">
                <div thumbsSlider="" class="swiper mySwiper h-20">
                    <div class="swiper-wrapper px-5">
                        @foreach ($project->project_image as $image)
                            {{-- Slide --}}
                            <div class="swiper-slide cursor-pointer">
                                <img src="{{ asset('assets/images/project-images/' . $image->file) }}" alt="">
                            </div>
                            {{-- End Slide --}}
                        @endforeach
                    </div>
                </div>
            </div>
            {{-- End Thumb --}}
        </div>

        {{-- Text Title Project Show --}}
        <div class="h-[163px] bg-[#bfbfbf] px-8 py-5">
            {{-- Like Comment Share Button --}}
            <div class="flex justify-between mb-6">
                <div class="flex gap-8 items-center relative">
                    <button class="relative " onclick="StoreLike()">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-8 h-8 text-[#806a59]">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                        </svg>
                        <p class="absolute w-20 left-0 text-left">0 Likes</p>
                    </button>
                    <a href="#show-comments" class="flex items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-8 h-8 text-[#806a59]">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 20.25c4.97 0 9-3.694 9-8.25s-4.03-8.25-9-8.25S3 7.444 3 12c0 2.104.859 4.023 2.273 5.48.432.447.74 1.04.586 1.641a4.483 4.483 0 01-.923 1.785A5.969 5.969 0 006 21c1.282 0 2.47-.402 3.445-1.087.81.22 1.668.337 2.555.337z" />
                        </svg>
                    </a>
                    <button onclick="HandleShare()">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-8 h-8 text-[#806a59]">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M7.217 10.907a2.25 2.25 0 100 2.186m0-2.186c.18.324.283.696.283 1.093s-.103.77-.283 1.093m0-2.186l9.566-5.314m-9.566 7.5l9.566 5.314m0 0a2.25 2.25 0 103.935 2.186 2.25 2.25 0 00-3.935-2.186zm0-12.814a2.25 2.25 0 103.933-2.185 2.25 2.25 0 00-3.933 2.185z" />
                        </svg>
                    </button>
                    <div
                        class="absolute left-44 share-button max-w-0 overflow-hidden transition-all duration-500 py-2 bg-[#786a60] flex gap-2 rounded-md">
                        <button class="mx-3" onclick="CopyToClipboard()">
                            <svg class="w-10 h-10" viewBox="0 0 2050 2050" xmlns="http://www.w3.org/2000/svg">
                                <g data-name="Layer 2" id="Layer_2">
                                    <path fill="#ffffff";
                                        d="M1321.3,1226.8a45,45,0,0,1-31.8-76.8l103.6-103.6a274.9,274.9,0,1,0-388.8-388.7L900.7,761.2a45,45,0,0,1-63.6-63.6L940.6,594a364.9,364.9,0,1,1,516.1,516.1l-103.5,103.5A44.9,44.9,0,0,1,1321.3,1226.8Z" />

                                    <path fill="#ffffff";
                                        d="M849.7,1565.9A364.7,364.7,0,0,1,591.7,943L695.3,839.4A45,45,0,0,1,758.9,903L655.3,1006.6a274.9,274.9,0,0,0,388.8,388.8l103.6-103.6a45,45,0,0,1,63.6,63.7L1107.8,1459a363.8,363.8,0,0,1-258.1,106.9Z" />

                                    <path fill="#ffffff";
                                        d="M781,1314.7a45,45,0,0,1-31.8-76.8l496.6-496.7a45,45,0,1,1,63.7,63.7L812.8,1301.6A45.1,45.1,0,0,1,781,1314.7Z" />

                                </g>
                            </svg>
                        </button>
                        <a href="https://api.whatsapp.com/send?phone=whatsappphonenumber&text=urlencodedtext"
                            target="_blank" class="flex items-center">
                            <div class="mx-3">
                                <svg class="w-8 h-8" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M17.6 6.31999C16.8669 5.58141 15.9943 4.99596 15.033 4.59767C14.0716 4.19938 13.0406 3.99622 12 3.99999C10.6089 4.00135 9.24248 4.36819 8.03771 5.06377C6.83294 5.75935 5.83208 6.75926 5.13534 7.96335C4.4386 9.16745 4.07046 10.5335 4.06776 11.9246C4.06507 13.3158 4.42793 14.6832 5.12 15.89L4 20L8.2 18.9C9.35975 19.5452 10.6629 19.8891 11.99 19.9C14.0997 19.9001 16.124 19.0668 17.6222 17.5816C19.1205 16.0965 19.9715 14.0796 19.99 11.97C19.983 10.9173 19.7682 9.87634 19.3581 8.9068C18.948 7.93725 18.3505 7.05819 17.6 6.31999ZM12 18.53C10.8177 18.5308 9.65701 18.213 8.64 17.61L8.4 17.46L5.91 18.12L6.57 15.69L6.41 15.44C5.55925 14.0667 5.24174 12.429 5.51762 10.8372C5.7935 9.24545 6.64361 7.81015 7.9069 6.80322C9.1702 5.79628 10.7589 5.28765 12.3721 5.37368C13.9853 5.4597 15.511 6.13441 16.66 7.26999C17.916 8.49818 18.635 10.1735 18.66 11.93C18.6442 13.6859 17.9355 15.3645 16.6882 16.6006C15.441 17.8366 13.756 18.5301 12 18.53ZM15.61 13.59C15.41 13.49 14.44 13.01 14.26 12.95C14.08 12.89 13.94 12.85 13.81 13.05C13.6144 13.3181 13.404 13.5751 13.18 13.82C13.07 13.96 12.95 13.97 12.75 13.82C11.6097 13.3694 10.6597 12.5394 10.06 11.47C9.85 11.12 10.26 11.14 10.64 10.39C10.6681 10.3359 10.6827 10.2759 10.6827 10.215C10.6827 10.1541 10.6681 10.0941 10.64 10.04C10.64 9.93999 10.19 8.95999 10.03 8.56999C9.87 8.17999 9.71 8.23999 9.58 8.22999H9.19C9.08895 8.23154 8.9894 8.25465 8.898 8.29776C8.8066 8.34087 8.72546 8.403 8.66 8.47999C8.43562 8.69817 8.26061 8.96191 8.14676 9.25343C8.03291 9.54495 7.98287 9.85749 8 10.17C8.0627 10.9181 8.34443 11.6311 8.81 12.22C9.6622 13.4958 10.8301 14.5293 12.2 15.22C12.9185 15.6394 13.7535 15.8148 14.58 15.72C14.8552 15.6654 15.1159 15.5535 15.345 15.3915C15.5742 15.2296 15.7667 15.0212 15.91 14.78C16.0428 14.4856 16.0846 14.1583 16.03 13.84C15.94 13.74 15.81 13.69 15.61 13.59Z"
                                        fill="#ffffff" />
                                </svg>
                            </div>
                        </a>

                    </div>
                </div>

                <div class="flex items-center gap-2">
                    {{-- Virtual 360 --}}
                    <div class="bg-[#806a59] p-2 px-10 text-white">Virtual 360</div>
                    {{-- End Virtual 360 --}}

                    <button id="bookmarkme" rel="sidebar" title="bookmark this page">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor"
                            class="w-8 h-8 text-[#806a59] active:text-black transition-all duration-150">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" />
                        </svg>
                    </button>
                </div>

            </div>
            {{-- End Like Comment Share Button --}}
            <div>
                <h3 class="text-2xl">
                    {{ $project->name }}
                </h3>
                <p class="w-40 bg-[#786a60] text-white p-1 rounded-md text-center">{{ $project->project_category->name }}
                </p>
            </div>
        </div>
        {{-- End Text Title Project Show --}}
    </section>
    {{-- End Project Show --}}



    <section class="min-h-screen px-14 py-10">
        <div class="flex gap-10">
            {{-- Kiri --}}
            <div class="w-[70%]">
                <div class="shadow-md p-5 rounded-md mb-5">
                    <a href="">
                        <div
                            class="w-full rounded-md bg-[#786a60] text-white text-center p-2 flex justify-center items-center gap-2">
                            <span>
                                Konsultasi sekarang
                            </span>

                            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M3.50002 12C3.50002 7.30558 7.3056 3.5 12 3.5C16.6944 3.5 20.5 7.30558 20.5 12C20.5 16.6944 16.6944 20.5 12 20.5C10.3278 20.5 8.77127 20.0182 7.45798 19.1861C7.21357 19.0313 6.91408 18.9899 6.63684 19.0726L3.75769 19.9319L4.84173 17.3953C4.96986 17.0955 4.94379 16.7521 4.77187 16.4751C3.9657 15.176 3.50002 13.6439 3.50002 12ZM12 1.5C6.20103 1.5 1.50002 6.20101 1.50002 12C1.50002 13.8381 1.97316 15.5683 2.80465 17.0727L1.08047 21.107C0.928048 21.4637 0.99561 21.8763 1.25382 22.1657C1.51203 22.4552 1.91432 22.5692 2.28599 22.4582L6.78541 21.1155C8.32245 21.9965 10.1037 22.5 12 22.5C17.799 22.5 22.5 17.799 22.5 12C22.5 6.20101 17.799 1.5 12 1.5ZM14.2925 14.1824L12.9783 15.1081C12.3628 14.7575 11.6823 14.2681 10.9997 13.5855C10.2901 12.8759 9.76402 12.1433 9.37612 11.4713L10.2113 10.7624C10.5697 10.4582 10.6678 9.94533 10.447 9.53028L9.38284 7.53028C9.23954 7.26097 8.98116 7.0718 8.68115 7.01654C8.38113 6.96129 8.07231 7.046 7.84247 7.24659L7.52696 7.52195C6.76823 8.18414 6.3195 9.2723 6.69141 10.3741C7.07698 11.5163 7.89983 13.314 9.58552 14.9997C11.3991 16.8133 13.2413 17.5275 14.3186 17.8049C15.1866 18.0283 16.008 17.7288 16.5868 17.2572L17.1783 16.7752C17.4313 16.5691 17.5678 16.2524 17.544 15.9269C17.5201 15.6014 17.3389 15.308 17.0585 15.1409L15.3802 14.1409C15.0412 13.939 14.6152 13.9552 14.2925 14.1824Z"
                                    fill="currentColor" />
                            </svg>
                        </div>
                    </a>
                </div>

                <div class="shadow-md p-5 rounded-md mb-5">
                    <table class="w-full">
                        <tr>
                            <th class="border border-gray-300 text-left w-1/2 px-10 py-2">Style</th>
                            <td class="border border-gray-300 w-1/2 px-10 py-2"> {{ $project->project_category->name }}
                            </td>
                        </tr>
                        <tr>
                            <th class="border border-gray-300 text-left w-1/2 px-10 py-2">Ukuran Tanah</th>
                            <td class="border border-gray-300 w-1/2 px-10 py-2">{{ $project->land_length }}m x
                                {{ $project->land_width }}m</td>
                        </tr>
                        <tr>
                            <th class="border border-gray-300 text-left w-1/2 px-10 py-2">Jumlah Kamar Tidur</th>
                            <td class="border border-gray-300 w-1/2 px-10 py-2">{{ $project->total_bedroom }}</td>
                        </tr>
                        <tr>
                            <th class="border border-gray-300 text-left w-1/2 px-10 py-2">Jumlah Kamar Mandi</th>
                            <td class="border border-gray-300 w-1/2 px-10 py-2">4+1</td>
                        </tr>
                        <tr>
                            <th class="border border-gray-300 text-left w-1/2 px-10 py-2">Jumlah Powder Room / Toilet Tamu
                            </th>
                            <td class="border border-gray-300 w-1/2 px-10 py-2">{{ $project->total_powder_room }}</td>
                        </tr>
                        <tr>
                            <th class="border border-gray-300 text-left w-1/2 px-10 py-2">Jumlah Maid Room</th>
                            <td class="border border-gray-300 w-1/2 px-10 py-2">{{ $project->total_maid_room }}</td>
                        </tr>
                        <tr>
                            <th class="border border-gray-300 text-left w-1/2 px-10 py-2">Jumlah Mobil yang bisa ditampung
                            </th>
                            <td class="border border-gray-300 w-1/2 px-10 py-2">{{ $project->cars_acomodated }}</td>
                        </tr>
                        <tr>
                            <th class="border border-gray-300 text-left w-1/2 px-10 py-2">Jumlah Lantai</th>
                            <td class="border border-gray-300 w-1/2 px-10 py-2">{{ $project->total_floor }}</td>
                        </tr>
                        <tr>
                            <th class="border border-gray-300 text-left w-1/2 px-10 py-2">Deskripsi</th>
                            <td class="border border-gray-300 w-1/2 px-10 py-2">{{ $project->description }}</td>
                        </tr>
                    </table>
                </div>


                {{-- Ulasan Komentar Pertanyaan --}}
                <div class="shadow-md p-5 rounded-md mb-5" id="show-comments">
                    <h3 class="text-lg font-bold">REVIEW, COMMENTS OR QUESTION</h3>
                    <div class="grid grid-cols-2 gap-5 mb-5">
                        <div class="flex flex-col">
                            <label for="">Name</label>
                            <input type="text" class="w-full border border-200 rounded-md p-2" required>
                        </div>
                        <div class="flex flex-col">
                            <label for="">Email</label>
                            <input type="email" class="w-full border border-200 rounded-md p-2" required>
                        </div>
                    </div>
                    <div>
                        <label for="">REVIEW, COMMENTS OR QUESTION</label>
                        <textarea name="" id="" cols="30" rows="5"
                            class="border border-gray-200 rounded-md w-full p-2" required></textarea>
                    </div>

                    <div class="flex justify-end">
                        <button class="text-white bg-[#9b7b4d] p-2 rounded-md">Submit</button>
                    </div>
                </div>
                {{-- End  Ulasan Komentar Pertanyaan --}}

                {{-- Comment Box --}}
                <div class="shadow-md rounded-md ">
                    {{-- Comments --}}
                    <div class="p-5 flex gap-2">
                        <div class="w-fit">
                            <div class="w-20 h-20 border border-gray-200 rounded-full"></div>
                        </div>
                        <div class="w-full">
                            <div class="flex justify-between">
                                <p>Name</p>
                                <p>2022 - 01 - 12</p>
                            </div>
                            <div>
                                bintang
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae beatae dolores corrupti
                                ratione animi cumque doloremque sit ipsam vero, veniam est dolore a cum magnam eum odit.
                                Nobis
                                accusantium tempora delectus. Iusto dolor aut quidem odio numquam enim eveniet blanditiis
                                itaque
                                distinctio, cupiditate hic. Quia aperiam est nisi rerum quis?</p>
                        </div>
                    </div>
                    {{-- End Comments --}}
                    {{-- Comments --}}
                    <div class="p-5 flex gap-2">
                        <div class="w-fit">
                            <div class="w-20 h-20 border border-gray-200 rounded-full"></div>
                        </div>
                        <div class="w-full">
                            <div class="flex justify-between">
                                <p>Name</p>
                                <p>2022 - 01 - 12</p>
                            </div>
                            <div>
                                bintang
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae beatae dolores corrupti
                                ratione animi cumque doloremque sit ipsam vero, veniam est dolore a cum magnam eum odit.
                                Nobis
                                accusantium tempora delectus. Iusto dolor aut quidem odio numquam enim eveniet blanditiis
                                itaque
                                distinctio, cupiditate hic. Quia aperiam est nisi rerum quis?</p>
                        </div>
                    </div>
                    {{-- End Comments --}}

                </div>
                {{-- End Comment Box --}}
            </div>
            {{-- Kanan --}}
            <div class="w-[30%] border">

            </div>
        </div>
    </section>
@endsection

@section('css')
    <style>
        .swiper-slide img {
            display: block;
            width: fit-content;
            height: 100%;
            object-position: bottom;
        }
    </style>
@endsection

@section('javascript')
    <script>
        // Animating On Scroll 
        window.addEventListener("scroll", (event) => {
            let yScroll = this.scrollY;
            if (yScroll > 50) {
                $('.select-animation').addClass('animate-from-down')
            }
            if (yScroll > 550) {
                $('.select-animation2').addClass('animate-from-down')
            }
        });
        // Slider 
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 5,
            slidesPerView: 10,
            freeMode: true,
            watchSlidesProgress: true,
        });
        var swiper2 = new Swiper(".mySwiper2", {
            spaceBetween: 2,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            thumbs: {
                swiper: swiper,
            },
        });
        // Modal View Project
        const ZoomInProject = (numberOfCard) => {
            let source = $(`.card-show`).eq(numberOfCard - 1).attr('src')
            console.log(source, numberOfCard);
            $('#image-project').attr('src', source)
            $('#modal').removeClass('hidden')
            $('#modal').addClass('opacity-1')
            setTimeout(() => {
                $('#modal').removeClass(' opacity-0')
            }, 150);
        }
        // Close Modal
        const CloseModal = () => {
            $('#modal').addClass('opacity-0')
            $('#modal').removeClass('opacity-1')
            setTimeout(() => {
                $('#modal').addClass('hidden')
            }, 300);
        }
        // Handle Share
        const HandleShare = () => {
            $('.share-button').toggleClass('mw-100')
        }

        // Copied Link
        const CopyToClipboard = () => {
            let url = window.location.href
            if (url.includes('#')) {
                let arrayUrl = url.split('#')
                url = arrayUrl[0]
            }
            navigator.clipboard.writeText(url)
            $('.alert-clip').css('transform', 'translateX(0)')
            setTimeout(() => {
                $('.alert-clip').removeAttr("style")
            }, 2000);
        }

        // Bookmark This Site
        $(function() {
            $("#bookmarkme").click(function() {
                // Mozilla Firefox Bookmark
                if ('sidebar' in window && 'addPanel' in window.sidebar) {
                    window.sidebar.addPanel(location.href, document.title, "");
                } else if ( /*@cc_on!@*/ false) { // IE Favorite
                    window.external.AddFavorite(location.href, document.title);
                } else { // webkit - safari/chrome
                    alert('Press ' + (navigator.userAgent.toLowerCase().indexOf('mac') != -1 ?
                        'Command/Cmd' : 'CTRL') + ' + D to bookmark this page.');
                }
            });
        });


        // Store Like



        const StoreLike = () => {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: "POST",
                url: `${APP_URL}/api/store-like/1`,
                data: {
                    description: 'tes',
                    offset_top: 'tes juga',
                    offset_left: 'tes juga log'
                },
                success: function(result) {
                    console.log("done");
                    console.log(result);
                },
                error: function(error) {
                    console.log("done");
                    console.log(error.responseJSON.msg);
                }
            });
        }
    </script>
@endsection
