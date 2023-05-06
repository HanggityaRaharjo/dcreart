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

        <div class="flex justify-end mb-5">
            {{-- Create Button --}}
            <button class="btn btn-create" onclick="HandleModalCreate()">Create</button>
            {{-- End Create Button --}}
        </div>

        {{-- Table --}}
        <div class="bg-white p-2 rounded-md shadow-md">
            <table class="w-full">
                <thead>
                    <tr>
                        <th class="border p-2">No</th>
                        <th class="border p-2">User Name</th>
                        <th class="border p-2">User Image</th>
                        <th class="border p-2">Rating</th>
                        <th class="border p-2">Text</th>
                        <th class="border p-2">Action</th>
                    </tr>
                </thead>
                <tbody id="table-content">
                    <tr id="loader">
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

    {{-- ALERT --}}
    @include('components.alert')

    {{-- Modal Create --}}
    <div class="left-0 top-0 fixed h-screen w-screen bg-black bg-opacity-30 backdrop-blur-sm z-50 hidden" id="modal-create">
        <div class="flex justify-center items-center p-20 w-screen h-screen">
            <div class="bg-white w-full h-full rounded-md rounded-tr-none p-8  relative">
                <div class="w-full h-full">
                    <form action="{{ url('admin/testimonial') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        {{-- Input Name --}}
                        <div class="flex flex-col mb-5">
                            <label class="">User Name</label>
                            <input type="text" placeholder="Type here" name="user_name"
                                class="input input-bordered w-full" />
                        </div>
                        {{-- End Input Name --}}
                        {{-- Input File --}}
                        <div class="form-control w-full mb-5">
                            <label class="label">
                                <span class="label-text">User Image</span>
                                <span class="label-text-alt">Alt label</span>
                            </label>
                            <input type="file" class="file-input file-input-bordered w-full " name="user_image" />
                        </div>
                        {{-- End Input File --}}
                        {{-- Rating --}}
                        <div class="flex flex-col mb-5">
                            <label class="">Rating</label>
                            <input type="number" placeholder="Type here" name="rating" class="input input-bordered w-full"
                                min="1" max="5" />
                        </div>
                        {{-- End Rating --}}
                        {{-- Text --}}
                        <div class="flex flex-col mb-5">
                            <label for="">Text</label>
                            <textarea name="text" id="" cols="30" rows="10" class="input input-bordered w-full h-32"></textarea>
                        </div>
                        {{-- End Text --}}
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



    <script>
        $(document).ready(function() {
            getAllTestimonials();
        });


        // Modal Create
        const HandleModalCreate = () => {
            $('#modal-create').toggle(600)
        }

        // Handle Delete Post
        const HandleDelete = (id, index) => {
            $.ajax({
                type: "POST",
                url: `http://localhost:8000/api/testimonials/delete/${id}`,
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

        // Get All Testimonials
        const getAllTestimonials = () => {
            $.ajax({
                type: "GET",
                url: "http://localhost:8000/api/testimonials",
                beforeSend: function() {
                    $('#loader-project').show()
                },
                success: function(data) {
                    console.log(data);
                    let element = ''
                    $.each(data, function(index, testimonial) {
                        element += `
                        <tr class="row-${index + 1}">
                            <th class="border p-2">${index + 1}</th>
                            <td class="border p-2">${testimonial.user_name}</td>
                            <td class="w-4/12 border p-2">
                                <div class="flex justify-center">
                                    <img src="{{ asset('assets/images/testimonials/${testimonial.user_image}') }}" class="h-20" />
                                </div>    
                            </td>
                            <td class="border p-2 text-center">5</td>
                            <td class="border p-2 w-4/12">
                                <p>
                                    ${testimonial.text}
                                </p>  
                            </td>
                            
                            <td class="w-1/12 border p-2">
                                <div class="grid grid-cols-1 gap-2">
                                    <button class="btn btn-sm">Edit</button>
                                    <button class="btn btn-sm btn-error" onclick="HandleDelete(${testimonial.id},${index + 1})">Delete</button>
                                </div>
                            </td>
                        </tr> 
                        `
                    });
                    $(element).insertBefore("#loader");
                    $('#loader').hide()
                },
                error: function(error) {
                    alert("Error occured.please reload page");
                }
            });
        }
    </script>
@endsection
