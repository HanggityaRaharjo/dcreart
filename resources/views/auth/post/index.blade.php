@extends('layouts.auth')

@section('content')
    <section class="min-h-screen p-5">
        {{-- Breadcrumbs --}}
        <div class="text-sm breadcrumbs bg-white rounded-md shadow-md mb-5 px-5 -z-10">
            <ul>
                <li><a>Home</a></li>
                <li><a>Documents</a></li>
                <li>Add Document</li>
            </ul>
        </div>
        {{-- End Breadcrumbs --}}

        {{-- Create Button --}}
        <div class="flex justify-end mb-5">
            <button class="btn btn-create" onclick="HandleModalCreate()">Create</button>
        </div>
        {{-- End Create Button --}}

        {{-- Table --}}
        <div class="bg-white p-2 rounded-md shadow-md">
            <table class="w-full">
                <thead>
                    <tr>
                        <th class="border p-2">No</th>
                        <th class="border p-2">Name</th>
                        <th class="border p-2">Image</th>
                        <th class="border p-2">Text</th>
                        <th class="border p-2">Action</th>
                    </tr>
                </thead>
                <tbody id="table-content">
                    <tr id="loader-post">
                        <td colspan="5" class="border">
                            <div class="flex justify-center">
                                <div class="loader">
                                    <div class="dot"></div>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        {{-- End Table --}}
    </section>


    {{-- Modal Create --}}
    <div class="left-0 top-0 fixed h-screen w-screen bg-black bg-opacity-30 backdrop-blur-sm z-50 hidden" id="modal-create">
        <div class="flex justify-center items-center p-20 w-screen h-screen">
            <div class="bg-white w-full h-full rounded-md rounded-tr-none p-8  relative">
                <div class="w-full h-full">
                    <form action="{{ url('admin/post') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        {{-- Input Name --}}
                        <div class="flex flex-col">
                            <label class="">Name</label>
                            <input type="text" placeholder="Type here" name="name"
                                class="input input-bordered w-full" />
                        </div>
                        {{-- End Input Name --}}
                        {{-- Input File --}}
                        <div class="form-control w-full mb-5">
                            <label class="label">
                                <span class="label-text">Pick a file</span>
                                <span class="label-text-alt">Alt label</span>
                            </label>
                            <input type="file" class="file-input file-input-bordered w-full " name="image" />
                        </div>
                        {{-- End Input File --}}
                        {{-- Body --}}
                        <div class="flex flex-col mb-5">
                            <label for="">Body</label>
                            <textarea name="body" id="" cols="30" rows="10" class="input input-bordered w-full h-full"></textarea>
                        </div>
                        {{-- End Body --}}
                        <div class="flex justify-end gap-2">
                            <button class="btn btn-sm" type="button">Cancel</button>
                            <button class="btn btn-sm" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
                {{-- Close Modal --}}
                <div class="absolute -top-8 right-0">
                    <button class="btn btn-sm rounded-b-none" onclick="HandleModalCreate()">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>

        </div>
    </div>
    {{-- End Modal Create --}}

    {{-- Modal Show Post --}}
    <div class="left-0 top-0 fixed h-screen w-screen bg-black bg-opacity-30 backdrop-blur-sm z-50 hidden" id="modal-show">
        <div class="flex justify-center items-center p-20 w-screen h-screen">
            <div class="bg-white w-full h-full rounded-md rounded-tr-none p-8 relative">
                <div class="w-full h-full overflow-y-scroll" id="show-content"></div>
                {{-- Close Modal --}}
                <div class="absolute -top-8 right-0">
                    <button class="btn btn-sm rounded-b-none" onclick="HandleModalShow()">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>

        </div>
    </div>
    {{-- End Modal Show Post --}}

    {{-- ALERT --}}
    @include('components.alert')

    <script>
        $(document).ready(function() {
            getAllPost();
        });

        const HandleModalShow = () => {
            $('#modal-show').toggle(600)
        }

        // Modal Create
        const HandleModalCreate = () => {
            $('#modal-create').toggle(600)
        }

        // Handle Delete Post
        const HandleDeletePost = (id, index) => {
            $.ajax({
                type: "POST",
                url: `http://localhost:8000/api/posts/delete/${id}`,
                beforeSend: function() {

                },
                success: function(data) {
                    console.log(data);
                    $('#alert-success').show(600)
                    setTimeout(() => {
                        $('#alert-success').hide(600)
                        $(`#table-content .row-${index}`).hide(400)
                    }, 2000);
                },
                error: function(error) {
                    alert("Error occured.please reload page");
                }
            });
        }

        // Get Show Post Detail
        const HandleShowPost = (id) => {
            $.ajax({
                type: "GET",
                url: `http://localhost:8000/api/posts/${id}`,
                beforeSend: function() {
                    HandleModalShow()
                    $('#show-content').html(`
                        <div class="w-full h-full flex justify-center items-center">
                            <div class="loader">
                                <div class="dot"></div>
                            </div>
                        </div>
                    `)
                },
                success: function(post) {
                    console.log(post);
                    $('#show-content').empty()
                    $('#show-content').html(`
                        <h3 class="text-lg font-bold text-center mb-5">${post.name}</h3>
                        <div class="flex justify-center w-full p-1">
                            <img src="{{ asset('assets/images/posts/${post.image}') }}" style="object-fit: cover;" loading="lazy"  alt="">
                        </div>
                        <div class="flex justify-end mr-5 gap-2">
                            <p>Created :</p>
                            <p>${post.created_at}</p>
                        </div>
                        <div class="flex flex-col">
                            <p>Body :</p>
                            <p>${post.body}</p>
                        </div>
                    `)

                },
                error: function(error) {
                    alert("Error occured.please reload page");
                }
            });
        }

        // Get All Post
        const getAllPost = () => {
            $.ajax({
                type: "GET",
                url: "http://localhost:8000/api/posts",
                beforeSend: function() {
                    $('#loader-project').show()
                },
                success: function(data) {
                    let element = ''
                    $.each(data, function(index, post) {
                        element += `
                        <tr class="row-${index + 1}">
                            <th class="border p-2">${index + 1}</th>
                            <td class="border p-2">${post.name}</td>
                            <td class="w-4/12 border p-2">
                                <div class="flex justify-center">
                                    <img src="{{ asset('assets/images/posts/${post.image}') }}" class="h-20" />
                                </div>    
                            </td>
                            
                            <td class="border p-2 w-4/12">
                                <p>
                                    ${post.name}
                                </p>  
                            </td>
                            
                            <td class="w-1/12 border p-2">
                                <div class="grid grid-cols-1 gap-2">
                                    <button class="btn btn-sm" onclick=HandleShowPost(${post.id})>Detail</button>
                                    <button class="btn btn-sm">Edit</button>
                                    <button class="btn btn-sm btn-error" onclick="HandleDeletePost(${post.id},${index + 1})">Delete</button>
                                </div>    
                            </td>
                        </tr> 
                        `
                    });
                    $(element).insertBefore("#loader-post");
                    $('#loader-post').hide()
                },
                error: function(error) {
                    alert("Error occured.please reload page");
                }
            });
        }
    </script>
@endsection
