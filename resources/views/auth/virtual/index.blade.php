@extends('layouts.auth')

@section('content')
    <section class="min-h-screen p-10">
        {{-- Breadcrumbs --}}
        <div class="text-sm breadcrumbs">
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

        <div id="panorama" class=""></div>

    </section>

    {{-- ALERT --}}
    @include('components.alert')

    <script>
        pannellum.viewer('panorama', {
            "type": "equirectangular",
            "panorama": "http://localhost:8000/assets/panorama.jpg",
            /*
             * Uncomment the next line to print the coordinates of mouse clicks
             * to the browser's developer console, which makes it much easier
             * to figure out where to place hot spots. Always remove it when
             * finished, though.
             */
            //"hotSpotDebug": true,
            "hotSpots": [{
                    "pitch": 14.1,
                    "yaw": 1.5,
                    "type": "info",
                    "text": "Baltimore Museum of Art",
                    "URL": "https://artbma.org/"
                },
                {
                    "pitch": -9.4,
                    "yaw": 222.6,
                    "type": "info",
                    "text": "Art Museum Drive"
                },
                {
                    "pitch": -0.9,
                    "yaw": 144.4,
                    "type": "info",
                    "text": "North Charles Street"
                }
            ]
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.pnlm-load-button').click()
        });
    </script>
@endsection
