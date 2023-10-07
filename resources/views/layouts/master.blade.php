<!doctype html>
<html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
            content="width=device-width, initial-scale=1.0">
        @include('layouts.custom_css')
        @include('layouts.js_cdn')

    </head>

    <body class="font-[sans] bg-gradient-to-r from-dark-500 to-gray-500  to- min-h-screen flex flex-col overflow-x-hidden">

        {{-- @if (auth()->user()->hasRole('admin'))
            @include('layouts.admin_header')
        @elseif(auth()->user()->hasRole('employee'))
            @include('layouts.employee_header')
        @endif --}}

        <main class="flex-grow">
            @yield('content')
        </main>

        @include('layouts.footer')
    </body>

</html>
