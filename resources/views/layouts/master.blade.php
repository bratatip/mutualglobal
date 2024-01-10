<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <link rel="icon"
          href="{{ asset('favicon.png') }}"
          type="image/png">

    @include('layouts.custom_css')
    @include('layouts.js_cdn')

    <style>
        .custom-toast-position {
            top: 70px;
        }
    </style>

</head>

<body class="font-[sans] bg-white flex flex-col overflow-x-hidden">

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

    @if (auth()->check())
        @if (auth()->user()->hasRole('admin'))
            @include('layouts.admin_header')
        @elseif(auth()->user()->hasRole('client'))
            @include('layouts.employee_header')
        @endif
    @endif

    <main class="flex-grow">
        @yield('content')
    </main>

    @include('layouts.footer')
</body>

</html>
