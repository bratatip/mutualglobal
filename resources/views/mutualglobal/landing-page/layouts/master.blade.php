<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>@yield('title', config('app.name'))</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no'
          name='viewport'>

    <link href="{{ asset('css/app.css') }}"
          rel="stylesheet" />

    <link href="{{ asset('css/style.css') }}"
          rel="stylesheet" />

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;900&display=swap"
          rel="stylesheet" />

    @stack('third_party_stylesheets')


    <style>
        body {
            font-family: "Inter", sans-serif;
        }
    </style>

    @stack('page_css')


</head>

<body class="max-w-[2000px] mx-auto text-neutral-900 bg-white">

    @include('mutualglobal.landing-page.layouts.nav')
    @yield('content')
    @include('mutualglobal.landing-page.layouts.footer')

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/jquery.js') }}"></script>


    @stack('third_party_scripts')

    @stack('page_scripts')
</body>

</html>
