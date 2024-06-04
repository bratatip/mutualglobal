<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}"
          rel="stylesheet" />

    <link href="{{ asset('css/style.css') }}"
          rel="stylesheet" />

    @include('layouts.custom_css')
    @include('layouts.js_cdn')

    <style>
        .custom-toast-position {
            top: 70px;
        }
    </style>
    @livewireStyles

</head>

<body class="font-[sans] bg-[#F5F5F5] flex flex-col overflow-x-hidden select-none">

    <script>
        toastr.options = {
            "positionClass": "toast-top-right custom-toast-position",
            "progressBar": true,
            "closeButton": true,
            "hideIcon": true,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "3000",
            "extendedTimeOut": "1000"
        }
    </script>


    @if (auth()->check() && auth()->user()->hasRole('client'))
        @include('client.layouts.side_bar')
    @endif

    <main class="flex-grow content-area-width">

        {{-- <div class="preloader">
            @include('components.loader.atom_spinner')
        </div> --}}

        <div class="pr-32 fixed w-full ">
            @component('components.common.card_header', [
                'logoutRouteName' => 'logout',
            ])
            @endcomponent
        </div>
        @yield('content')
    </main>

    @include('layouts.footer')
    @livewireScripts
</body>

<style>
    @media screen and (min-width: 768px) {
        .content-area-width {
            width: calc(100vw - 8rem);
            margin-left: 8rem;
        }
    }
</style>

{{-- <script>
    $(window).on("load", function() {
        //===== Preloader
        $(".preloader").delay(1500).fadeOut("500");

    });
</script> --}}

</html>
