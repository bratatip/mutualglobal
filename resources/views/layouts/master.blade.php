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

    </head>

    <body
        class="font-[sans] bg-white flex flex-col overflow-x-hidden">

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
