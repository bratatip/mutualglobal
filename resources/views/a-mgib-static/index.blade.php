<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport"
          content="width=device-width,initial-scale=1,maximum-scale=1" />
    <style>
        body {
            font-family: "Inter", sans-serif;
        }
    </style>
    <title>Mutual Global Insurance Broking Pvt Ltd</title>
    <!-- dependency links -->

    {{-- <link href="{{ config('app.url') }}css/app.css" rel="stylesheet" type="text/css" /> --}}


    <link href="{{ asset('css/app.css') }}"
          rel="stylesheet">

         

    <link href="{{ asset('css/style.css') }}"
          rel="stylesheet">
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    <script src="{{ asset('js/app.js') }}"
            defer></script>
    <script src="{{ asset('js/jquery.js') }}"></script>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;900&display=swap"
          rel="stylesheet" />




    {{-- <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
          integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
          crossorigin="anonymous"
          referrerpolicy="no-referrer" /> --}}
</head>

<body class="max-w-[2000px] mx-auto text-neutral-900 bg-white">


</body>
<script src="{{ asset('js/scrollreveal.min.js') }}"></script>

<script>
    const sr = ScrollReveal({
        origin: "bottom",
        distance: "80px",
        duration: 3000,
        delay: 100,
    });

    // sr.reveal(".header_img");
    sr.reveal(".product_items", {
        interval: 200,
        origin: "bottom",
    });

    sr.reveal(".product_header", {
        origin: "top",
    });

    ScrollReveal().reveal('.header_img', {
        origin: 'bottom',
        distance: '60px',
        duration: 3000,
        delay: 600,
    });

    // new hero
    sr.reveal('.hero__text', {
        origin: 'top'
    });
    sr.reveal('.hero__img');

    // partner Section
    sr.reveal(".partner_header", {
        origin: "top",
    });

    ScrollReveal().reveal('.partner_img', {
        origin: 'bottom',
        distance: '60px',
        duration: 3000,
        delay: 600,
        interval: 200,
    });
</script>

<style>
    .fa-fade-slow {
        animation: fadeSlowInfinite 3s ease-in-out infinite;
    }

    @keyframes fadeSlowInfinite {

        0%,
        100% {
            opacity: 1;
        }

        50% {
            opacity: 0.3;
        }
    }

    /* Highway Animation */
    .animate-highway {
        background-image: url('{{ asset('images/landing-page/app/hero-animation/road.jpg') }}');
        animation: highway 3s linear infinite !important;
    }

    @keyframes highway {
        100% {
            transform: translateX(-2000px);
        }
    }

    /* City Animation */
    .animate-city {
        background-image: url('{{ asset('images/landing-page/app/hero-animation/city.png') }}');
        animation: city 20s linear infinite !important;
    }

    @keyframes city {
        100% {
            transform: translateX(-1400px);
        }
    }

    /* Car Animation */
    /* .animate-car {
        transform: translate(-50%);
    } */

    .animate-car img {
        animation: car 1s linear infinite !important;
    }

    @keyframes car {
        100% {
            transform: translateY(-1px);
        }

        50% {
            transform: translateY(1px);
        }

        0% {
            transform: translateY(-1px);
        }
    }

    /* Bus Animation */

    .animate-bus img {
        animation: bus 1s linear infinite !important;
    }

    @keyframes bus {
        100% {
            transform: translateY(-1px);
        }

        50% {
            transform: translateY(1px);
        }

        0% {
            transform: translateY(-1px);
        }
    }
</style>

</html>
