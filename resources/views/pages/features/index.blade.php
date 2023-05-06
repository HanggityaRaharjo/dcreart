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

        <div class="bg-white p-2 rounded-md shadow-md">
            <table class="w-full text-center">
                <thead>
                    <tr>
                        <td class="border w-32">Feature Name</td>
                        <td class="border" width="40%">Image</td>
                        <td class="border" width="80px">Action</td>
                    </tr>
                </thead>
                <tbody id="table-content">
                    <tr id="loader-feature">
                        <td colspan="4" class="border">
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


    </section>

    {{-- ALERT --}}
    @include('components.alert')

    {{-- Modal Create --}}
    <div class="left-0 top-0 fixed h-screen w-screen bg-black bg-opacity-30 backdrop-blur-sm z-50 hidden" id="modal-create">
        <div class="flex justify-center items-center p-20 w-screen h-screen">
            <div class="bg-white w-96 h-fit rounded-md rounded-tr-none p-8  relative">

                <div class="w-full h-full">
                    <form action="{{ url('features') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="flex flex-col mb-5">
                            <label for="">Feature Name</label>
                            <input type="text" name="feature_name" placeholder="Type here"
                                class="input input-bordered w-full max-w-xs" />
                        </div>
                        <div class="form-control w-full max-w-xs mb-5">
                            <label class="label">
                                <span class="label-text">Image</span>

                            </label>
                            <input type="file" class="file-input file-input-bordered w-full max-w-xs" name="image" />
                            <label class="label">
                                <span class="label-text-alt">Format image must be png,svg,jpg</span>
                                <span class="label-text-alt">Size of file must be under 1 mb</span>
                            </label>
                        </div>
                        <div class="flex justify-end gap-2">
                            <button class="btn btn-sm" onclick="HandleModalCreate()">Cancel</button>
                            <button type="submit" class="btn btn-sm">Submit</button>
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


    {{-- Modal Edit --}}
    <div class="left-0 top-0 fixed h-screen w-screen bg-black bg-opacity-30 backdrop-blur-sm z-50 hidden" id="modal-edit">
        <div class="flex justify-center items-center p-20 w-screen h-screen">
            <div class="bg-white w-96 h-fit rounded-md rounded-tr-none p-8  relative">

                <div class="w-full h-full">
                    <form action="{{ url('features') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="flex flex-col mb-5">
                            <label for="">Feature Name</label>
                            <input type="text" name="feature_name" placeholder="Type here"
                                class="input input-bordered w-full max-w-xs" id="input-feature" />
                        </div>
                        <div class="form-control w-full max-w-xs mb-5">
                            <label class="label">
                                <span class="label-text">Image</span>
                            </label>
                            <input type="file" class="file-input file-input-bordered w-full max-w-xs" name="image" />
                            <label class="label">
                                <span class="label-text-alt">Format image must be png,svg,jpg</span>
                                <span class="label-text-alt">Size of file must be under 1 mb</span>
                            </label>
                        </div>
                        <div class="flex justify-end gap-2">
                            <button class="btn btn-sm" onclick="HandleModalEdit()">Cancel</button>
                            <button type="submit" class="btn btn-sm">Submit</button>
                        </div>
                    </form>
                </div>
                {{-- Close Modal --}}
                <div class="absolute -top-8 right-0">
                    <button class="btn btn-sm rounded-b-none" onclick="HandleModalEdit()">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>

        </div>
    </div>


    <script>
        $(document).ready(function() {
            getAllFeatures();
            $('.pnlm-load-button').click()
        });

        const HandleModalCreate = () => {
            $('#modal-create').toggle(600)
        }

        const HandleModalEdit = (id) => {
            $('#modal-edit').toggle(600)
            $.get("http://localhost:8000/api/features/9", function(data, status) {
                $('#input-feature').val(data.feature_name)
            });

        }

        const HandleDeleteFeature = (id, index) => {
            $.ajax({
                type: "POST",
                url: `http://localhost:8000/api/features/delete/${id}`,
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

        // Alert Confirmation
        const HandleConfirmationAlert = (name, url) => {

        }


        // Get Features
        const getAllFeatures = () => {
            $.ajax({
                type: "GET",
                url: "http://localhost:8000/api/features",
                beforeSend: function() {
                    $('#loader-project').show()
                },
                success: function(data) {
                    let element = ''
                    $.each(data, function(index, feature) {
                        element += `
                        <tr class="row-${index + 1}">
                            <td class="border w-32">${feature.feature_name}</td>
                            <td class="border" width="40%">
                                <div class="p-2 flex justify-center items-center ">
                                    <img src="{{ asset('assets/images/features/${feature.image}') }}" class="cursor-pointer feature-image-${feature.id}" alt="" loading="lazy" class="h-full">
                                </div>
                            </td>
                            <td class="border" width="80px">
                                <div class="grid grid-cols-2 gap-1">
                                        <button class="btn btn-sm" onclick="HandleModalEdit(${feature.id})">Edit</button>
                                        <button class="btn btn-sm btn-error" onclick="HandleDeleteFeature(${feature.id},${index + 1})">Delete</button>
                                </div>
                            </td>
                            
                        </tr>
                        `
                    });
                    $(element).insertBefore("#loader-feature");
                    $('#loader-feature').hide()
                },
                error: function(error) {
                    alert("Error occured.please reload page");
                }
            });
        }
    </script>
@endsection
