@extends('layouts.auth')

@section('content')
    <section class="min-h-screen p-5 pb-32 " id="section">
        {{-- Breadcrumbs --}}
        <div class="text-sm breadcrumbs bg-white rounded-md shadow-md mb-5 px-5 -z-10">
            <ul>
                <li><a>Home</a></li>
                <li><a>Documents</a></li>
                <li>Add Document</li>
            </ul>
        </div>
        {{-- End Breadcrumbs --}}



        <div class="flex justify-between items-center mb-5">
            <div class="flex gap-2 w-10/12">
                {{-- Search --}}
                <div class="form-control rounded-md overflow-hidden shadow-md">
                    <div class="input-group w-full ">
                        <input type="text" placeholder="Search…" class="input w-full z-0" />
                        <button class="btn btn-square">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </button>
                    </div>
                </div>
                {{-- End Search --}}

                {{-- Filter --}}
                <select class="select  rounded-md  shadow-md w-56" id="filter-projects" onchange="HandleFilterProjects()">
                    <option disabled selected>Type</option>
                    <option class="p-5" value="interior">Interior</option>
                    <option class="p-5" value="exterior">Exterior</option>
                </select>
                {{-- End Filter --}}
            </div>

            {{-- Create Button --}}
            <button class="btn" onclick="HandleModalCreate()">Create</button>
            {{-- End Create Button --}}
        </div>

        <div class="bg-white p-2 rounded-md shadow-md">
            <table class="w-full text-center">
                <thead>
                    <tr>
                        <td class="border w-10">No</td>
                        <td class="border w-32">Project Name</td>
                        <td class="border" width="40%">Image</td>
                        <td class="border">Type</td>
                        <td class="border">Category</td>
                        <td class="border" width="200px">Action</td>
                    </tr>
                </thead>
                <tbody id="table-content">
                    <tr id="loader-project">
                        <td colspan="6" class="border">
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

    {{-- Modal --}}
    <div class="left-0 top-0 fixed h-screen w-screen bg-black bg-opacity-30 backdrop-blur-sm z-[100] hidden"
        id="modal-create">
        <div class="flex justify-center items-center p-20 w-screen h-screen relative">
            <div class="bg-white w-full h-full rounded-md p-8 overflow-y-auto">
                <div>
                    <h3 class="text-2xl text-center mb-5">Create Project</h3>
                    <form action="{{ url('projects') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="grid grid-cols-4 gap-5 mb-5">
                            {{-- Input Group --}}
                            <div class="flex flex-col">
                                <label class="">Name</label>
                                <input type="text" placeholder="Type here" name="name"
                                    class="input input-bordered w-full max-w-xs" />
                            </div>
                            {{-- End Input Group --}}
                            {{-- Select --}}
                            <div class="flex flex-col">
                                <label class="">Name</label>
                                <select name="type_project" class="select select-bordered w-full max-w-xs">
                                    <option disabled selected>Who shot first?</option>
                                    <option value="interior">Interior</option>
                                    <option value="exterior">Exterior</option>
                                </select>
                            </div>
                            {{-- End Select --}}

                            {{-- Select --}}
                            <div class="flex flex-col">
                                <label class="">Category</label>
                                <select name="category_id" class="select select-bordered w-full max-w-xs">
                                    <option disabled selected>Who shot first?</option>
                                    <option value="1">Interior</option>
                                    <option value="2">Exterior</option>
                                </select>
                            </div>
                            {{-- End Select --}}

                            {{-- Input Group --}}
                            <div class="flex flex-col">
                                <label class="">Land Length</label>
                                <input type="number" placeholder="Type here" name="land_length"
                                    class="input input-bordered w-full max-w-xs" />
                            </div>
                            {{-- End Input Group --}}

                            {{-- Input Group --}}
                            <div class="flex flex-col">
                                <label class="">Land Width</label>
                                <input type="number" placeholder="Type here" name="land_width"
                                    class="input input-bordered w-full max-w-xs" />
                            </div>
                            {{-- End Input Group --}}

                            {{-- Input Group --}}
                            <div class="flex flex-col">
                                <label class="">Total Bedroom</label>
                                <input type="number" placeholder="Type here" name="total_bedroom"
                                    class="input input-bordered w-full max-w-xs" />
                            </div>
                            {{-- End Input Group --}}

                            {{-- Input Group --}}
                            <div class="flex flex-col">
                                <label class="">Total Powder Room</label>
                                <input type="number" placeholder="Type here" name="total_powder_room"
                                    class="input input-bordered w-full max-w-xs" />
                            </div>
                            {{-- End Input Group --}}

                            {{-- Input Group --}}
                            <div class="flex flex-col">
                                <label class="">Total Maid Room</label>
                                <input type="number" placeholder="Type here" name="total_maid_room"
                                    class="input input-bordered w-full max-w-xs" />
                            </div>
                            {{-- End Input Group --}}

                            {{-- Input Group --}}
                            <div class="flex flex-col">
                                <label class="">Cars Acomodated</label>
                                <input type="number" placeholder="Type here" name="cars_acomodated"
                                    class="input input-bordered w-full max-w-xs" />
                            </div>
                            {{-- End Input Group --}}

                            {{-- Input Group --}}
                            <div class="flex flex-col">
                                <label class="">Total Floor</label>
                                <input type="number" placeholder="Type here" name="total_floor"
                                    class="input input-bordered w-full max-w-xs" />
                            </div>
                            {{-- End Input Group --}}
                        </div>
                        {{-- Input File --}}
                        <div class="form-control w-full mb-5">
                            <label class="label">
                                <span class="label-text">Pick a file</span>
                                <span class="label-text-alt">Alt label</span>
                            </label>
                            <input type="file" class="file-input file-input-bordered w-full " name="images[]"
                                multiple />
                        </div>
                        {{-- End Input File --}}

                        {{-- Description --}}
                        <div class="flex flex-col mb-5">
                            <label for="">Description</label>
                            <textarea name="description" id="" cols="30" rows="10"
                                class="input input-bordered w-full h-full"></textarea>
                        </div>
                        {{-- End Description --}}
                        <div class="flex justify-end gap-5">
                            <button class="btn btn-sm" type="button" onclick="HandleModalCreate()">Cancel</button>
                            <button class="btn btn-sm" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            {{-- Close Modal --}}
            <div class="absolute top-12 right-20">
                <button class="btn btn-sm rounded-b-none" onclick="HandleModalCreate()">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>



    {{-- Show Modal Project --}}
    <div class="left-0 top-0 fixed h-screen w-screen bg-black bg-opacity-30 backdrop-blur-sm z-[100] hidden"
        id="modal-show">
        <div class="flex justify-center items-center p-20 w-screen h-screen relative">
            <div class="bg-white w-full h-full rounded-md p-8 overflow-y-auto" id="modal-show-content"></div>
            {{-- Close Modal --}}
            <div class="absolute top-12 right-20">
                <button class="btn btn-sm rounded-b-none" onclick="HandleModalShow()">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <script>
        let lastNumber = 0;
        let currentPage = 0;
        let lastPage = 0;
        let statusCanScroll = true;
        $(document).ready(function() {
            $(window).scrollTop(0);
            getAllProjects();
        });

        // Modal Create
        const HandleModalCreate = () => {
            $('#modal-create').toggle(600)
        }

        // Modal Show Project
        const HandleModalShow = () => {
            $('#modal-show').toggle(600)
        }

        // Filter Projects
        const HandleFilterProjects = () => {
            $('#table-content').empty()
            $('#table-content').html(`
                <tr id="loader-project">
                    <td colspan="6" class="border">
                        <div class="flex justify-center">
                            <div class="loader">
                                <div class="dot"></div>
                            </div>
                        </div>
                    </td>
                </tr>
            `)
            console.log('ini harusnya kepanggil');
            // Get Projects
            $.ajax({
                type: "GET",
                url: `http://localhost:8000/api/projects`,
                beforeSend: function() {
                    $('#loader-project').show()
                },
                success: function(data) {
                    currentPage = data.current_page
                    lastPage = data.last_page
                    console.log(data);
                    let element = ''
                    if (data.data.length <= 10) statusCanScroll = false;
                    if (data.data.length != 0) {
                        $.each(data.data, function(index, project) {
                            lastNumber++;
                            element += `
                        <tr>
                            <td class="border">${index + 1}</td>
                            <td class="border">${project.name}</td>
                            <td class="border">
                                <div class="grid grid-cols-4 gap-2 justify-between p-2">
                                    <img src="{{ asset('assets/images/banner-1.jpg') }}" alt="" loading="lazy"
                                        class="h-20">
                                    <img src="{{ asset('assets/images/banner-2.jpeg') }}" alt="" loading="lazy"
                                        class="h-20">
                                    <img src="{{ asset('assets/images/EB08.jpg') }}" alt="" loading="lazy" class="h-20">
                                    <img src="{{ asset('assets/images/freya.jpg') }}" alt="" loading="lazy" class="h-20">
                                </div>
                            </td>
                            <td class="border">${project.type_project}</td>
                            <td class="border">Modern luxury</td>
                            <td class="border">
                                <div class="flex gap-1">
                                    <button class="btn btn-sm" onclick="ShowProject(${project.id})">Detail</button>
                                    <button class="btn btn-sm btn-error">Delete</button>
                                </div>
                            </td>
                        </tr>
                        `
                        });
                    } else {
                        element += `
                        <tr>
                            <td colspan="6" class="border">No Data</td>
                            
                        </tr>
                        `
                    }
                    $(element).insertBefore("#loader-project");
                    $('#loader-project').hide()
                },
                error: function(error) {
                    alert("Error occured.please reload page");
                }
            });
        }

        // Show Projects
        const ShowProject = (id) => {
            console.log(id);
            $.ajax({
                type: "GET",
                url: `http://localhost:8000/api/projects/${id}`,
                beforeSend: function() {
                    HandleModalShow()
                    $('#modal-show-content').html(`
                        <div class="flex justify-center items-center w-full h-full">
                            <div class="loader">
                                <div class="dot"></div>
                            </div>
                        </div>
                    `)
                },
                success: function(project) {
                    console.log(project);
                    $('#modal-show-content').empty()
                    $('#modal-show-content').html(`
                    <table class="w-full text-center">
                        <tr>
                            <td class="border p-5 w-2/12">Image</td> 
                            <td class="border p-5 w-8/12">
                                <div class="grid grid-cols-4 gap-2 justify-between p-2">
                                    <img src="{{ asset('assets/images/banner-1.jpg') }}" alt="" loading="lazy"
                                        class="h-20">
                                    <img src="{{ asset('assets/images/banner-2.jpeg') }}" alt="" loading="lazy"
                                        class="h-20">
                                    <img src="{{ asset('assets/images/EB08.jpg') }}" alt="" loading="lazy" class="h-20">
                                    <img src="{{ asset('assets/images/freya.jpg') }}" alt="" loading="lazy" class="h-20">
                                </div>    
                            </td> 
                        </tr>  
                        <tr>
                            <td class="border p-5 w-2/12">Project Name</td> 
                            <td class="border p-5 w-8/12">${project.name}</td> 
                        </tr>  
                        <tr>
                            <td class="border p-5 w-2/12">Type</td> 
                            <td class="border p-5 w-8/12">${project.type_project}</td> 
                        </tr>  
                        <tr>
                            <td class="border p-5 w-2/12">Category</td> 
                            <td class="border p-5 w-8/12">${project.category_id}</td> 
                        </tr>  
                        <tr>
                            <td class="border p-5 w-2/12">Land Length</td> 
                            <td class="border p-5 w-8/12">${project.land_length}</td> 
                        </tr>  
                        <tr>
                            <td class="border p-5 w-2/12">Land Width</td> 
                            <td class="border p-5 w-8/12">${project.land_width}</td> 
                        </tr>  
                        <tr>
                            <td class="border p-5 w-2/12">Total Bedroom</td> 
                            <td class="border p-5 w-8/12">${project.total_bedroom}</td> 
                        </tr>  
                        <tr>
                            <td class="border p-5 w-2/12">Total Powder Room</td> 
                            <td class="border p-5 w-8/12">${project.total_powder_room}</td> 
                        </tr>  
                        <tr>
                            <td class="border p-5 w-2/12">Total Maid Room</td> 
                            <td class="border p-5 w-8/12">${project.total_maid_room}</td> 
                        </tr>  
                        <tr>
                            <td class="border p-5 w-2/12">Cars Acomodated</td> 
                            <td class="border p-5 w-8/12">${project.cars_acomodated}</td> 
                        </tr>  
                        <tr>
                            <td class="border p-5 w-2/12">Total Floor</td> 
                            <td class="border p-5 w-8/12">${project.total_floor}</td> 
                        </tr>  
                        <tr>
                            <td class="border p-5 w-2/12">Description</td> 
                            <td class="border p-5 w-8/12">${project.description}</td> 
                        </tr>  
                    </table>
                    `)
                },
                error: function(error) {
                    alert("Error occured.please reload page");
                }
            });
        }

        // Get Data On Scroll Down
        $(window).scroll(function() {
            if (currentPage <= lastPage && currentPage != lastPage) {
                setTimeout(() => {
                    if ($(window).scrollTop() == ($(document).height() - $(window).height())) {
                        $(window).scrollTop() - 200;
                        // Get Projects
                        $.ajax({
                            type: "GET",
                            url: `http://localhost:8000/api/projects?page=${currentPage + 1}`,
                            beforeSend: function() {
                                $('#loader-project').show()

                            },
                            success: function(data) {
                                if (currentPage >= lastPage) statusCanScroll = false;
                                console.log(data);
                                currentPage++;
                                let element = ''
                                if (currentPage <= lastPage) {


                                    if (data) {
                                        $.each(data.data, function(index, project) {
                                            lastNumber++;
                                            element += `
                                        <tr>
                                            <td class="border">${lastNumber}</td>
                                            <td class="border">${project.name}</td>
                                            <td class="border">
                                                <div class="grid grid-cols-4 gap-2 justify-between p-2">
                                                    ${project.project_image.map(image => {
                                                        let imgElement = '';
                                                        return imgElement = `<img src="{{ asset('assets/images/project-images/${image.file}') }}" alt="" loading="lazy" class="h-20">`
                                                    }).join("")}
                                                </div>
                                            </td>
                                            <td class="border">${project.type_project}</td>
                                            <td class="border">Modern luxury</td>
                                            <td class="border" width="200px">
                                                <div class="grid grid-cols-2 gap-1">
                                                    <button class="btn btn-sm" onclick="ShowProject(${project.id})">Detail</button>
                                                    <button class="btn btn-sm" onclick="ShowProject(${project.id})">Edit</button>
                                                    <button class="btn btn-sm">Add File</button>
                                                    <button class="btn btn-sm btn-error">Delete</button>
                                                </div>
                                            </td>
                                        </tr>
                                        `
                                        });
                                    } else {
                                        element += `
                                            <tr>
                                                <td colspan="6" class="border">No Data</td>
                                                
                                            </tr>
                                            `
                                    }
                                }

                                $(element).insertBefore("#loader-project");
                                $('#loader-project').hide()
                            },
                            error: function(error) {
                                alert("Error occured.please reload page");
                            }
                        });

                    }
                }, 1000);
            }
        });

        // Get Projects
        const getAllProjects = () => {
            $.ajax({
                type: "GET",
                url: `http://localhost:8000/api/projects`,
                beforeSend: function() {
                    $('#loader-project').show()
                },
                success: function(data) {
                    console.log(data);
                    currentPage = data.current_page
                    lastPage = data.last_page
                    let element = ''
                    if (data.data.length <= 10) statusCanScroll = false;
                    if (data.data.length != 0) {
                        $.each(data.data, function(index, project) {
                            console.log();
                            lastNumber++;
                            element += `
                        <tr>
                            <td class="border">${index + 1}</td>
                            <td class="border">${project.name}</td>
                            <td class="border">
                                <div class="grid grid-cols-4 gap-2 justify-between p-2">
                                   ${project.project_image.map(image => {
                                    let imgElement = '';
                                    return imgElement = `<img src="{{ asset('assets/images/project-images/${image.file}') }}" alt="" loading="lazy" class="h-20">`
                                   }).join("")}
                                </div>
                            </td>
                            <td class="border">${project.type_project}</td>
                            <td class="border">Modern luxury</td>
                            <td class="border" width="200px">
                                <div class="grid grid-cols-2 gap-1">
                                    <button class="btn btn-sm" onclick="ShowProject(${project.id})">Detail</button>
                                    <button class="btn btn-sm" onclick="ShowProject(${project.id})">Edit</button>
                                    <button class="btn btn-sm">Add File</button>
                                    <button class="btn btn-sm btn-error">Delete</button>
                                </div>
                            </td>
                        </tr>
                        `
                        });
                    } else {
                        element += `
                        <tr>
                            <td colspan="6" class="border">No Data</td>
                            
                        </tr>
                        `
                    }
                    $(element).insertBefore("#loader-project");
                    $('#loader-project').hide()
                },
                error: function(error) {
                    alert("Error occured.please reload page");
                }
            });
        }
    </script>
@endsection
