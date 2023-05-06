{{-- Success --}}
<div class="alert alert-success shadow-lg fixed z-[999] w-52 top-20 right-0 hidden" id="alert-success">
    <div class="flex  justify-center items-center">
        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none"
            viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
        <span>Success</span>
    </div>
</div>

{{-- failed --}}
<div class="alert alert-error shadow-lg fixed z-[999] w-52 top-20 right-0 hidden" id="alert-error">
    <div class="flex  justify-center items-center">
        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none"
            viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
        <span>Failed</span>
    </div>
</div>

{{-- failed --}}
<div class="alert   shadow-lg fixed z-[999] w-80 top-20 right-5 hidden" id="confirmation-alert">
    <div class="flex  justify-center items-center">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
            class="stroke-current flex-shrink-0 w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
        </svg>
        <span class="w-6/12">Are you sure to delete <span id="confirmation-alert-name"></span></span>
        <button class="text-green-500">
            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-10 w-10" fill="none"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
        </button>
        <button class="text-red-500">
            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-10 w-10" fill="none"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
        </button>
    </div>
</div>
