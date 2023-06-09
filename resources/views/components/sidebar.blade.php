<div class="fixed h-screen w-[250px] overflow-hidden transition-all duration-300 " id="sidebar">
    <div class="w-[250px] flex flex-col justify-center bg-white p-2 rounded-md shadow-md">
        {{-- Logo --}}
        <div class="py-6 text-center">
            <a href="{{ url('dashboard') }}">
                Logo
            </a>
        </div>
        {{-- End Logo --}}
        {{-- Profile --}}
        <a href="">
            <div class="border-y border-gray-200 h-20 flex items-center justify-between gap-2 p-1">
                <div class="flex items-center">
                    {{-- Profile Picture --}}
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-12 h-12">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                    {{-- End Profile Picture --}}
                    {{-- Profile Name --}}
                    <div>
                        <div class="flex items-center gap-1">
                            <div class="w-2 h-2 bg-green-400 rounded-full"></div>
                            <span class="text-sm text-gray-400">Online</span>
                        </div>
                        <span class="w-10 flex-wrap break-words">{{ Auth::user()->name }}</span>
                    </div>
                    {{-- End Profile Name --}}
                </div>

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M10.343 3.94c.09-.542.56-.94 1.11-.94h1.093c.55 0 1.02.398 1.11.94l.149.894c.07.424.384.764.78.93.398.164.855.142 1.205-.108l.737-.527a1.125 1.125 0 011.45.12l.773.774c.39.389.44 1.002.12 1.45l-.527.737c-.25.35-.272.806-.107 1.204.165.397.505.71.93.78l.893.15c.543.09.94.56.94 1.109v1.094c0 .55-.397 1.02-.94 1.11l-.893.149c-.425.07-.765.383-.93.78-.165.398-.143.854.107 1.204l.527.738c.32.447.269 1.06-.12 1.45l-.774.773a1.125 1.125 0 01-1.449.12l-.738-.527c-.35-.25-.806-.272-1.203-.107-.397.165-.71.505-.781.929l-.149.894c-.09.542-.56.94-1.11.94h-1.094c-.55 0-1.019-.398-1.11-.94l-.148-.894c-.071-.424-.384-.764-.781-.93-.398-.164-.854-.142-1.204.108l-.738.527c-.447.32-1.06.269-1.45-.12l-.773-.774a1.125 1.125 0 01-.12-1.45l.527-.737c.25-.35.273-.806.108-1.204-.165-.397-.505-.71-.93-.78l-.894-.15c-.542-.09-.94-.56-.94-1.109v-1.094c0-.55.398-1.02.94-1.11l.894-.149c.424-.07.765-.383.93-.78.165-.398.143-.854-.107-1.204l-.527-.738a1.125 1.125 0 01.12-1.45l.773-.773a1.125 1.125 0 011.45-.12l.737.527c.35.25.807.272 1.204.107.397-.165.71-.505.78-.929l.15-.894z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>

            </div>
        </a>
        {{-- End Profile --}}

        {{-- Sidebar Menu --}}
        <div class="p-2">
            {{-- Dasboard --}}
            <a href="{{ url('dashboard') }}">
                <div
                    class="p-2  rounded-md mb-1 hover:bg-black hover:text-white transition duration-300 flex gap-2 items-center">
                    <svg fill="currentColor" class="w-5 h-5" viewBox="0 0 1920 1920" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M833.935 1063.327c28.913 170.315 64.038 348.198 83.464 384.79 27.557 51.84 92.047 71.944 144 44.387 51.84-27.558 71.717-92.273 44.16-144.113-19.426-36.593-146.937-165.46-271.624-285.064Zm-43.821-196.405c61.553 56.923 370.899 344.81 415.285 428.612 56.696 106.842 15.811 239.887-91.144 296.697-32.64 17.28-67.765 25.411-102.325 25.411-78.72 0-154.955-42.353-194.371-116.555-44.386-83.802-109.102-501.346-121.638-584.245-3.501-23.717 8.245-47.21 29.365-58.277 21.346-11.294 47.096-8.02 64.828 8.357ZM960.045 281.99c529.355 0 960 430.757 960 960 0 77.139-8.922 153.148-26.654 225.882l-10.39 43.144h-524.386v-112.942h434.258c9.487-50.71 14.231-103.115 14.231-156.084 0-467.125-380.047-847.06-847.059-847.06-467.125 0-847.059 379.935-847.059 847.06 0 52.97 4.744 105.374 14.118 156.084h487.454v112.942H36.977l-10.39-43.144C8.966 1395.137.044 1319.128.044 1241.99c0-529.243 430.645-960 960-960Zm542.547 390.686 79.85 79.85-112.716 112.715-79.85-79.85 112.716-112.715Zm-1085.184 0L530.123 785.39l-79.85 79.85L337.56 752.524l79.849-79.85Zm599.063-201.363v159.473H903.529V471.312h112.942Z"
                            fill-rule="evenodd" />
                    </svg>
                    <span>
                        Dashboard
                    </span>
                </div>
            </a>
            {{-- End Dashboard --}}
            {{-- Projects --}}
            <a href="{{ url('projects') }}" class="w-full">
                <div
                    class="p-2  mb-1  rounded-md hover:bg-black hover:text-white transition duration-300 flex gap-2 items-center">
                    <svg version="1.1" id="DESIGN" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" class="w-5 h-5" viewBox="0 0 1800 1800"
                        enable-background="new 0 0 1800 1800" xml:space="preserve">
                        <g id="Layer">
                            <g>
                                <path fill="currentColor"
                                    d="M1541.606,1540.146l0.009-0.008c35.598-35.594,35.598-93.52,0-129.121
                                    c-17.24-17.236-40.178-26.745-64.569-26.745c-24.378,0-47.314,9.509-64.564,26.763c-35.588,35.584-35.588,93.51,0.009,129.104
                                    C1448.096,1575.73,1506.014,1575.73,1541.606,1540.146z M1440.885,1511.743c-9.656-9.655-14.975-22.498-14.975-36.165
                                    c0-13.659,5.318-26.511,14.975-36.167c9.665-9.655,22.512-14.979,36.175-14.979c13.659,0,26.497,5.323,36.161,14.979
                                    c19.938,19.945,19.938,52.387-0.008,72.332C1493.271,1531.689,1460.831,1531.681,1440.885,1511.743z" />
                                <path fill="currentColor"
                                    d="M1700.934,402.736c0.021-0.026,0.047-0.043,0.068-0.065c0.044-0.043,0.083-0.091,0.127-0.134l5.504-5.505
                                    l-0.138-0.139c81.836-87.814,80.038-225.814-5.507-311.356c-42.353-42.357-98.664-65.685-158.565-65.685
                                    c-57.228,0-111.154,21.339-152.792,60.18l-0.134-0.134l-5.511,5.507c-0.043,0.046-0.09,0.085-0.134,0.131
                                    c-0.021,0.021-0.039,0.045-0.061,0.069L66.371,1403.02l0.513,0.513c-7.364,4.749-12.699,12.548-13.98,21.907L9.578,1741.903
                                    c-1.319,9.647,1.95,19.347,8.831,26.232c5.875,5.87,13.807,9.108,22.004,9.108c1.402,0,2.813-0.095,4.224-0.286l316.451-43.338
                                    c9.365-1.276,17.163-6.617,21.912-13.98l0.512,0.513L1700.934,402.736z M1542.423,82.094c43.272,0,83.954,16.852,114.551,47.452
                                    c55.643,55.638,62.276,142.02,19.897,204.983L1451.973,109.64C1478.482,91.724,1509.717,82.094,1542.423,82.094z
                                    M1389.497,167.919l229.113,229.112L383.512,1632.129l-86.195-86.19l991.423-991.409l-59.351-59.342l-991.41,991.418
                                    l-83.585-83.586L1389.497,167.919z M76.804,1709.731l35.68-260.604l224.915,224.916L76.804,1709.731z" />
                                <path fill="currentColor"
                                    d="M506.941,804.479l56.789-56.789l-454.446-454.45l185.432-185.437l87.924,87.932l-63.792,63.783
                                    l50.362,50.359l63.792-63.779l51.262,51.258l-63.792,63.788l50.363,50.354l63.797-63.779l51.257,51.267l-94.375,94.353
                                    l50.376,50.363l94.362-94.362l62.502,62.498l-63.792,63.801l50.363,50.354l63.792-63.792l0.043,0.047l56.789-56.789
                                    L323.106,22.622c-15.682-15.686-41.102-15.686-56.784,0L24.102,264.845c-15.687,15.683-15.687,41.107,0,56.789L506.941,804.479z" />
                                <path fill="currentColor"
                                    d="M1778.944,1478.287c-0.726-0.729-1.478-1.424-2.241-2.085l-505.282-505.273l-151.159,151.159l50.259,50.26
                                    l94.371-94.37l428.79,428.782l-185.441,185.432l-479.045-479.041l-56.789,56.798l507.437,507.427
                                    c15.682,15.69,41.102,15.69,56.788,0l242.234-242.213c0.021-0.034,0.048-0.052,0.079-0.086
                                    C1794.63,1519.402,1794.63,1493.969,1778.944,1478.287z" />
                            </g>
                        </g>
                    </svg>
                    <span>
                        Projects
                    </span>
                </div>
                {{-- Collapse Menu --}}
                {{-- <div class="text-left ml-5 mt-1 collapse-menu max-h-0 overflow-hidden transition-all duration-300">
                    <a href="">
                        <div
                            class="p-2  rounded-md mb-1 hover:bg-black hover:text-white transition duration-300 flex gap-2 items-center">
                            Interior
                        </div>
                    </a>
                    <a href="">
                        <div
                            class="p-2  rounded-md hover:bg-black hover:text-white transition duration-300 flex gap-2 items-center">
                            Exterior
                        </div>
                    </a>
                </div> --}}
                {{-- End Collapse Menu --}}
            </a>
            {{-- End Projects --}}
            {{-- Virtual --}}
            <a href="{{ url('virtual') }}">
                <div
                    class="p-2  rounded-md mb-1 hover:bg-black hover:text-white transition duration-300 flex gap-2 items-center">

                    <svg fill="currentColor" class="w-5 h-5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M22,3H20a1,1,0,0,0,0,2h1V9.111a6.972,6.972,0,0,0-9-.848A6.973,6.973,0,0,0,3,9.11V5H4A1,1,0,0,0,4,3H2A1,1,0,0,0,1,4V14a6.992,6.992,0,0,0,11,5.737A6.992,6.992,0,0,0,23,14V4A1,1,0,0,0,22,3ZM16,19a4.994,4.994,0,0,1-3.333-1.281,1,1,0,0,0-1.334,0,5,5,0,1,1,0-7.438,1,1,0,0,0,1.334,0A5,5,0,1,1,16,19Zm0-8a3,3,0,1,0,3,3A3,3,0,0,0,16,11Zm0,4a1,1,0,1,1,1-1A1,1,0,0,1,16,15ZM8,11a3,3,0,1,0,3,3A3,3,0,0,0,8,11Zm0,4a1,1,0,1,1,1-1A1,1,0,0,1,8,15Z" />
                    </svg>
                    <span>
                        Virtual 360
                    </span>
                </div>
            </a>
            {{-- End Virtual --}}
            {{-- Features --}}
            <a href="{{ url('features') }}">
                <div
                    class="p-2  rounded-md mb-1 hover:bg-black hover:text-white transition duration-300 flex gap-2 items-center">
                    <svg fill="currentColor" class="w-5 h-5" viewBox="0 0 30 30" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M22.005 0c-.194-.002-.372.105-.458.276l-2.197 4.38-4.92.7c-.413.06-.578.56-.278.846l3.805 3.407-.953 4.81c-.07.406.363.715.733.523L22 12.67l4.286 2.273c.37.19.8-.118.732-.522l-.942-4.81 3.77-3.408c.3-.286.136-.787-.278-.846l-4.916-.7-2.2-4.38C22.368.11 22.195.002 22.005 0zM22 1.615l1.863 3.71c.073.148.216.25.38.273l4.168.595-3.227 2.89c-.12.112-.173.276-.145.436l.813 4.08-3.616-1.927c-.147-.076-.322-.076-.47 0l-3.59 1.926.823-4.08c.028-.16-.027-.325-.145-.438l-3.262-2.89 4.166-.594c.165-.023.307-.125.38-.272zM16.5 18c-.822 0-1.5.678-1.5 1.5v9c0 .822.678 1.5 1.5 1.5h9c.822 0 1.5-.678 1.5-1.5v-9c0-.822-.678-1.5-1.5-1.5zm0 1h9c.286 0 .5.214.5.5v9c0 .286-.214.5-.5.5h-9c-.286 0-.5-.214-.5-.5v-9c0-.286.214-.5.5-.5zM1.5 3C.678 3 0 3.678 0 4.5v9c0 .822.678 1.5 1.5 1.5h9c.822 0 1.5-.678 1.5-1.5v-9c0-.822-.678-1.5-1.5-1.5zm0 1h9c.286 0 .5.214.5.5v9c0 .286-.214.5-.5.5h-9c-.286 0-.5-.214-.5-.5v-9c0-.286.214-.5.5-.5zm0 14c-.822 0-1.5.678-1.5 1.5v9c0 .822.678 1.5 1.5 1.5h9c.822 0 1.5-.678 1.5-1.5v-9c0-.822-.678-1.5-1.5-1.5zm0 1h9c.286 0 .5.214.5.5v9c0 .286-.214.5-.5.5h-9c-.286 0-.5-.214-.5-.5v-9c0-.286.214-.5.5-.5z" />
                    </svg>
                    <span>
                        Features
                    </span>
                </div>
            </a>
            {{-- End Features --}}
            {{-- Post --}}
            <a href="{{ url('admin/post') }}">
                <div
                    class="p-2  rounded-md mb-1 hover:bg-black hover:text-white transition duration-300 flex gap-2 items-center">
                    <svg version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" fill="currentColor" class="w-5 h-5"
                        viewBox="0 0 512 512" xml:space="preserve">
                        <g>
                            <path class="st0"
                                d="M421.073,221.719c-0.578,11.719-9.469,26.188-23.797,40.094v183.25c-0.016,4.719-1.875,8.719-5.016,11.844
                            c-3.156,3.063-7.25,4.875-12.063,4.906H81.558c-4.781-0.031-8.891-1.844-12.047-4.906c-3.141-3.125-4.984-7.125-5-11.844V152.219
                            c0.016-4.703,1.859-8.719,5-11.844c3.156-3.063,7.266-4.875,12.047-4.906h158.609c12.828-16.844,27.781-34.094,44.719-49.906
                            c0.078-0.094,0.141-0.188,0.219-0.281H81.558c-18.75-0.016-35.984,7.531-48.25,19.594c-12.328,12.063-20.016,28.938-20,47.344
                            v292.844c-0.016,18.406,7.672,35.313,20,47.344C45.573,504.469,62.808,512,81.558,512h298.641c18.781,0,36.016-7.531,48.281-19.594
                            c12.297-12.031,20-28.938,19.984-47.344V203.469c0,0-0.125-0.156-0.328-0.313C440.37,209.813,431.323,216.156,421.073,221.719z" />
                            <path class="st0"
                                d="M498.058,0c0,0-15.688,23.438-118.156,58.109C275.417,93.469,211.104,237.313,211.104,237.313
                            c-15.484,29.469-76.688,151.906-76.688,151.906c-16.859,31.625,14.031,50.313,32.156,17.656
                            c34.734-62.688,57.156-119.969,109.969-121.594c77.047-2.375,129.734-69.656,113.156-66.531c-21.813,9.5-69.906,0.719-41.578-3.656
                            c68-5.453,109.906-56.563,96.25-60.031c-24.109,9.281-46.594,0.469-51-2.188C513.386,138.281,498.058,0,498.058,0z" />
                        </g>
                    </svg>
                    <span>
                        Posts
                    </span>
                </div>
            </a>
            {{-- End Post --}}
            {{-- testimonial --}}
            <a href="{{ url('admin/testimonial') }}">
                <div
                    class="p-2  rounded-md mb-1 hover:bg-black hover:text-white transition duration-300 flex gap-2 items-center">
                    <svg fill="currentColor" class="w-5 h-5" version="1.1" id="Capa_1"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        viewBox="0 0 478.248 478.248" xml:space="preserve">
                        <g>
                            <g>
                                <g>
                                    <path
                                        d="M456.02,44.821H264.83c-12.26,0-22.232,9.972-22.232,22.229v98.652c0,12.258,9.974,22.23,22.232,22.23h16.787v39.161
                               c0,2.707,1.58,5.165,4.043,6.292c0.92,0.42,1.901,0.627,2.875,0.627c1.631,0,3.244-0.576,4.523-1.685l51.383-44.396h111.576
                               c12.26,0,22.23-9.973,22.23-22.23V67.05C478.25,54.792,468.277,44.821,456.02,44.821z M319.922,112.252l-10.209,9.953
                               l2.41,14.054c0.174,1.015-0.242,2.038-1.076,2.643c-0.469,0.342-1.027,0.516-1.588,0.516c-0.428,0-0.861-0.103-1.256-0.31
                               l-12.621-6.635l-12.619,6.635c-0.912,0.478-2.016,0.398-2.848-0.206s-1.248-1.628-1.074-2.643l2.41-14.054l-10.211-9.953
                               c-0.734-0.718-1.002-1.792-0.685-2.769c0.317-0.978,1.164-1.691,2.183-1.839l14.11-2.05l6.31-12.786
                               c0.457-0.923,1.396-1.507,2.424-1.507s1.969,0.584,2.422,1.507l6.312,12.786l14.107,2.05c1.02,0.148,1.863,0.861,2.184,1.839
                               C320.924,110.46,320.658,111.535,319.922,112.252z M384.766,112.252l-10.211,9.953l2.412,14.054
                               c0.172,1.015-0.244,2.038-1.076,2.643c-0.469,0.342-1.025,0.516-1.588,0.516c-0.43,0-0.859-0.103-1.26-0.31l-12.619-6.635
                               l-12.619,6.635c-0.912,0.478-2.014,0.398-2.846-0.206c-0.834-0.604-1.25-1.628-1.076-2.643l2.41-14.054l-10.209-9.953
                               c-0.734-0.718-1.002-1.792-0.684-2.769c0.316-0.978,1.16-1.691,2.182-1.839l14.109-2.05l6.311-12.786
                               c0.455-0.923,1.396-1.507,2.422-1.507c1.029,0,1.967,0.584,2.422,1.507l6.312,12.786l14.109,2.05
                               c1.021,0.148,1.863,0.861,2.182,1.839C385.768,110.46,385.5,111.535,384.766,112.252z M449.607,112.252l-10.211,9.953
                               l2.408,14.054c0.176,1.015-0.238,2.038-1.072,2.643c-0.471,0.342-1.027,0.516-1.59,0.516c-0.43,0-0.859-0.103-1.258-0.31
                               l-12.621-6.635l-12.621,6.635c-0.908,0.478-2.012,0.398-2.844-0.206c-0.834-0.604-1.248-1.628-1.076-2.643l2.412-14.054
                               l-10.211-9.953c-0.734-0.718-1-1.792-0.684-2.769c0.316-0.978,1.164-1.691,2.182-1.839l14.111-2.05l6.311-12.786
                               c0.453-0.923,1.395-1.507,2.42-1.507c1.027,0,1.971,0.584,2.426,1.507L434,105.594l14.109,2.05
                               c1.018,0.148,1.861,0.861,2.182,1.839C450.609,110.46,450.344,111.535,449.607,112.252z" />
                                    <path
                                        d="M152.844,112.924c-46.76,0-72.639,24.231-72.166,70.921c0.686,63.947,27.859,102.74,72.166,102.063
                               c0,0,72.131,2.924,72.131-102.063C224.975,137.155,200.605,112.924,152.844,112.924z" />
                                    <path
                                        d="M280.428,334.444l-72.074-28.736l-16.877-14.223c-4.457-3.766-11.041-3.488-15.178,0.621l-23.463,23.336l-23.533-23.342
                               c-4.137-4.104-10.713-4.369-15.164-0.615l-16.881,14.223l-72.074,28.739C1.975,343.69,1.995,425.884,0,433.427h305.646
                               C303.656,425.9,303.646,343.679,280.428,334.444z" />
                                </g>
                            </g>
                        </g>
                    </svg>
                    <span>
                        Testimonials
                    </span>
                </div>
            </a>
            {{-- End testimonial --}}
        </div>
        {{-- End Sidebar Menu --}}
    </div>

    <div class="mt-5 w-[250px] bg-white py-5 absolute bottom-10 flex justify-center items-center rounded-md shadow-md">
        <form action="{{ url('logout') }}" method="post">
            @csrf
            <button type="submit" class="flex items-center gap-2">
                <svg fill="currentColor" class="w-5 h-5" viewBox="0 0 32 32" version="1.1"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M3.651 16.989h17.326c0.553 0 1-0.448 1-1s-0.447-1-1-1h-17.264l3.617-3.617c0.391-0.39 0.391-1.024 0-1.414s-1.024-0.39-1.414 0l-5.907 6.062 5.907 6.063c0.196 0.195 0.451 0.293 0.707 0.293s0.511-0.098 0.707-0.293c0.391-0.39 0.391-1.023 0-1.414zM29.989 0h-17c-1.105 0-2 0.895-2 2v9h2.013v-7.78c0-0.668 0.542-1.21 1.21-1.21h14.523c0.669 0 1.21 0.542 1.21 1.21l0.032 25.572c0 0.668-0.541 1.21-1.21 1.21h-14.553c-0.668 0-1.21-0.542-1.21-1.21v-7.824l-2.013 0.003v9.030c0 1.105 0.895 2 2 2h16.999c1.105 0 2.001-0.895 2.001-2v-28c-0-1.105-0.896-2-2-2z">
                    </path>
                </svg>
                <span>
                    Logout
                </span>
            </button>
        </form>
    </div>
</div>


<script>
    // const HandleCollapseProject = () => {
    //     $('.collapse-menu').toggleClass('mh-0')
    // }
</script>
