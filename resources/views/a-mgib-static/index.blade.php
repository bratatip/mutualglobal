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

    {{-- <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css"
          rel="stylesheet" /> --}}
    <link href="{{ asset('css/app.css') }}"
          rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>


    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;900&display=swap"
          rel="stylesheet" />


    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="https://cdn.tailwindcss.com"></script>


    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
          integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
          crossorigin="anonymous"
          referrerpolicy="no-referrer" />

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js"
            defer></script>

</head>

<body class="max-w-[2000px] mx-auto text-neutral-900 bg-white">
    <nav x-data="{ scrolledPastHeader: false }"
         x-init="() => {
             window.addEventListener('scroll', () => {
                 scrolledPastHeader = window.scrollY > document.querySelector('header').offsetHeight;
             });
         }"
         :class="{ 'bg-white transition shadow-xl': scrolledPastHeader, 'bg-[#F2F7FF]': !scrolledPastHeader }"
         class="mx-auto p-0 fixed w-full z-50 ">
        <div class="container mx-auto flex items-center justify-between">
            <a href="/"
               class="focus:outline-none focus-visible:ring-4 ring-neutral-900 rounded-sm ring-offset-4 ring-offset-amber-400 xl:pl-24 px-6 z-50 hover:opacity-75 transition-opacity"
               aria-label="Go to homepage">
                <img src="{{ asset('images/landing-page/app/brand.png') }}"
                     width="200"
                     class="w-48 md:w-64 lg:w-72"
                     alt="Brand Logo" />
            </a>
            <button id="menu"
                    class="lg:hidden focus:outline-none focus-visible:ring-4 ring-neutral-900 rounded-sm ring-offset-4 ring-offset-amber-400 text-neutral-900 hover:text-neutral-600 transition-colors mx-3"
                    aria-expanded="false"
                    aria-label="Open Menu">
                <svg xmlns="http://www.w3.org/2000/svg"
                     class="h-8 w-8"
                     fill="none"
                     viewBox="0 0 24 24"
                     stroke="currentColor"
                     stroke-width="2">
                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
            <div role="menubar"
                 :class="{ 'bg-white transition shadow-xl': scrolledPastHeader, 'bg-[#F2F7FF]': !scrolledPastHeader }"
                 class="hidden flex-col gap-4 absolute z-40 right-0 left-0 top-16 text-center text-lg px-6 xl:pr-20 items-center lg:flex lg:flex-row lg:static lg:shadow-none lg:justify-between lg:w-full">
                <a role="menuitem"
                   class="py-1 px-2 focus:outline-none focus-visible:ring-4 ring-neutral-900 rounded-sm ring-offset-4 ring-offset-amber-400 hover:text-amber-400 transition-colors lg:ms-auto"
                   href="/">Home</a>
                <a role="menuitem"
                   class="py-1 px-2 focus:outline-none focus-visible:ring-4 ring-neutral-900 rounded-sm ring-offset-4 ring-offset-amber-400 hover:text-amber-400 transition-colors"
                   href="/">
                    Contact
                </a>
                <a role="menuitem"
                   class="py-1 px-2 focus:outline-none focus-visible:ring-4 ring-neutral-900 rounded-sm ring-offset-4 ring-offset-amber-400 hover:text-amber-400 transition-colors"
                   href="/">
                    About Us
                </a>
                <a role="menuitem"
                   class="py-1 px-2 focus:outline-none focus-visible:ring-4 ring-neutral-900 rounded-sm ring-offset-4 ring-offset-amber-400 hover:text-amber-400 transition-colors"
                   href="/">
                    Services
                </a>
            </div>
        </div>
    </nav>

    <header class="hero pt-4 sm:pt-12 xl:pt-12 bg-[#F2F7FF] overflow-hidden">

        <img class="absolute w-100 -z-10 top-3/4 opacity-25"
             src="{{ asset('images/landing-page/app/ball.png') }}"
             alt="">

        <div class="container mx-auto h-full mt-16 bg-[#F2F7FF] px-12 md:px-24 lg:px-28">
            <div class="flex flex-col xl:flex-row items-start justify-between h-full max-[640px]:items-center">


                <div class="hero__text xl:w-[48%] text-center xl:text-left">

                    {{-- <div
                         class="flex items-center bg-white py-1 px-[12px] w-max gap-x-2 mb-[26px] rounded-full mx-auto xl:mx-0">
                        <i class="fa-solid fa-heart-pulse fa-fade-slow fa-sm md:fa-lg"
                           style="color: #fbcd27;"></i>

                        <div class="uppercase text-[10px] sm:text-base sm:font-medium text-amber-400 tracking-[2.24px]">
                            LIVE SECURELY, THRIVE FREELY
                        </div>
                    </div> --}}


                    {{-- <p class="mb-[42px] text-[10px] sm:text-base  md:max-w-xl">Welcome to a realm of
                        unmatched insurance
                        coverage. Elevate your
                        protection, embrace financial security, and ensure life's uncertainties won't hinder your
                        journey. Your aspirations have a guardian here, and your dreams are protected.</p> --}}

                    {{-- <div class="flex justify-center xl:justify-start">
                        <div
                             class="max-w-sm p-6 bg-[#F2F7FF] border border-gray-200 rounded-lg dark:bg-gray-800 dark:border-gray-700 shadow-lg">
                            <svg class="w-7 h-7 text-gray-500 dark:text-gray-400 mb-3 max-[640px]:hidden"
                                 aria-hidden="true"
                                 xmlns="http://www.w3.org/2000/svg"
                                 fill="currentColor"
                                 viewBox="0 0 20 20">
                                <path
                                      d="M18 5h-.7c.229-.467.349-.98.351-1.5a3.5 3.5 0 0 0-3.5-3.5c-1.717 0-3.215 1.2-4.331 2.481C8.4.842 6.949 0 5.5 0A3.5 3.5 0 0 0 2 3.5c.003.52.123 1.033.351 1.5H2a2 2 0 0 0-2 2v3a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1V7a2 2 0 0 0-2-2ZM8.058 5H5.5a1.5 1.5 0 0 1 0-3c.9 0 2 .754 3.092 2.122-.219.337-.392.635-.534.878Zm6.1 0h-3.742c.933-1.368 2.371-3 3.739-3a1.5 1.5 0 0 1 0 3h.003ZM11 13H9v7h2v-7Zm-4 0H2v5a2 2 0 0 0 2 2h3v-7Zm6 0v7h3a2 2 0 0 0 2-2v-5h-5Z" />
                            </svg>
                            <a href="#">
                                <h5
                                    class="mb-2 text-base sm:text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">
                                    Need a
                                    help in Claim?</h5>
                            </a>
                            <p class="max-[640px]:text-[10px] mb-3 font-normal text-gray-500 dark:text-gray-400">Go to
                                this step by
                                step
                                guideline
                                process on how to certify for your weekly benefits:</p>
                            <a href="#"
                               class="inline-flex items-center text-blue-600 hover:underline max-[640px]:text-[12px]">
                                See our guideline
                                <svg class="w-3 h-3 ms-2.5 rtl:rotate-[270deg]"
                                     aria-hidden="true"
                                     xmlns="http://www.w3.org/2000/svg"
                                     fill="none"
                                     viewBox="0 0 18 18">
                                    <path stroke="currentColor"
                                          stroke-linecap="round"
                                          stroke-linejoin="round"
                                          stroke-width="2"
                                          d="M15 11v4.833A1.166 1.166 0 0 1 13.833 17H2.167A1.167 1.167 0 0 1 1 15.833V4.167A1.166 1.166 0 0 1 2.167 3h4.618m4.447-2H17v5.768M9.111 8.889l7.778-7.778" />
                                </svg>
                            </a>
                        </div>
                    </div> --}}



                    <!--Card Slider -->

                    <div class="flex justify-center xl:justify-start">
                        <div id="default-carousel"
                             class="relative w-full"
                             data-carousel="slide">
                            <!-- Carousel wrapper -->
                            <div class="relative h-28 overflow-hidden rounded-2xl sm:h-56">
                                <!-- Item 1 -->
                                <div class="hidden duration-700 ease-in-out"
                                     data-carousel-item>
                                    <img src="https://static.pbcdn.in/cdn/images/home/term_crore_desktop.png?v=2"
                                         class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                         alt="...">
                                </div>
                                <!-- Item 2 -->
                                <div class="hidden duration-700 ease-in-out"
                                     data-carousel-item>
                                    <img src="https://static.pbcdn.in/cdn/images/home/maxlife-fund_desktop.png"
                                         class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                         alt="...">
                                </div>
                                <!-- Item 3 -->
                                <div class="hidden duration-700 ease-in-out"
                                     data-carousel-item>
                                    <img src="https://static.pbcdn.in/cdn/images/home/health-cashless-anywhere_desktop.png"
                                         class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                         alt="...">
                                </div>
                            </div>
                            <!-- Slider indicators -->
                            <div
                                 class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                                <button type="button"
                                        class="w-3 h-3 rounded-full"
                                        aria-current="true"
                                        aria-label="Slide 1"
                                        data-carousel-slide-to="0"></button>
                                <button type="button"
                                        class="w-3 h-3 rounded-full"
                                        aria-current="false"
                                        aria-label="Slide 2"
                                        data-carousel-slide-to="1"></button>
                                <button type="button"
                                        class="w-3 h-3 rounded-full"
                                        aria-current="false"
                                        aria-label="Slide 3"
                                        data-carousel-slide-to="2"></button>
                            </div>
                            <!-- Slider controls -->
                            <button type="button"
                                    class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                                    data-carousel-prev>
                                <span
                                      class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180"
                                         aria-hidden="true"
                                         xmlns="http://www.w3.org/2000/svg"
                                         fill="none"
                                         viewBox="0 0 6 10">
                                        <path stroke="currentColor"
                                              stroke-linecap="round"
                                              stroke-linejoin="round"
                                              stroke-width="2"
                                              d="M5 1 1 5l4 4" />
                                    </svg>
                                    <span class="sr-only">Previous</span>
                                </span>
                            </button>
                            <button type="button"
                                    class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                                    data-carousel-next>
                                <span
                                      class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180"
                                         aria-hidden="true"
                                         xmlns="http://www.w3.org/2000/svg"
                                         fill="none"
                                         viewBox="0 0 6 10">
                                        <path stroke="currentColor"
                                              stroke-linecap="round"
                                              stroke-linejoin="round"
                                              stroke-width="2"
                                              d="m1 9 4-4-4-4" />
                                    </svg>
                                    <span class="sr-only">Next</span>
                                </span>
                            </button>
                        </div>
                    </div>

                    <!-- Hero Header -->

                    <h1 class="text-[14px] mt-6 sm:text-3xl md:text-4xl font-bold mb-6">Elevate Your Tomorrow: Insure
                        Online
                        Today!
                    </h1>
                </div>


                <!-- Services Section -->
                <div class="hero__img hidden items-center xl:flex max-w-[50%] xl:max-w-[40%] max-h-[500px] self-end ">

                    <section aria-labelledby="qualities"
                             class="relative">
                        <h2 id="qualities"
                            class="sr-only">Our Qualities</h2>

                        <div
                             class="container mx-auto max-w-4xl flex gap-6 flex-wrap items-start justify-between md:justify-between">
                            <div class="product_items flex gap-10 justify-center text-center md:flex-1">
                                <a href="http://uatweb.mutualglobal.com/two-wheeler-insurance/"
                                   class="text-decoration-none">
                                    <div
                                         class="border border-gray-200 rounded shadow-lg bg-[#F2F7FF] p-1 w-52 h-28 flex-shrink-0">
                                        <img src="{{ asset('images/landing-page/services/2w.png') }}"
                                             class="w-full h-full object-contain"
                                             alt="" />
                                    </div>
                                    <p class="text-sm font-bold text-slate-600 mt-4">Two Wheeler</p>
                                </a>

                                <a href="http://uatweb.mutualglobal.com/car-insurance/"
                                   class="flex-shrink-0">
                                    <div class="border border-gray-200 rounded shadow-lg bg-[#F2F7FF] p-1 w-52 h-28">
                                        <img src="{{ asset('images/landing-page/services/4w.png') }}"
                                             class="w-full h-full object-contain"
                                             alt="" />
                                    </div>
                                    <p class="text-sm mt-4 font-bold text-slate-600">Four Wheeler</p>
                                </a>
                            </div>



                            <div class="product_items grid gap-4 justify-items-center text-center md:flex-1">
                                <div class="border border-gray-200 rounded shadow-lg bg-[#F2F7FF] p-1 w-28 h-20">
                                    <img src="{{ asset('images/landing-page/services/fire.png') }}"
                                         class="w-full h-full object-contain"
                                         alt="" />
                                </div>

                                <p class="text-sm font-bold text-slate-600">Fire</p>
                            </div>

                            <div class="product_items grid gap-4 justify-items-center text-center md:flex-1">
                                <div class="border border-gray-200 rounded shadow-lg bg-[#F2F7FF] p-1 w-28 h-20">
                                    <img src="{{ asset('images/landing-page/services/marine.png') }}"
                                         class="w-full h-full object-contain"
                                         alt="" />
                                </div>

                                <p class="text-sm font-bold text-slate-600">Marine</p>
                            </div>

                            <div class="product_items grid gap-4 justify-items-center text-center md:flex-1">
                                <div class="border border-gray-200 rounded shadow-lg bg-[#F2F7FF] p-1 w-28 h-20">
                                    <img src="{{ asset('images/landing-page/services/house.png') }}"
                                         class="w-full h-full object-contain"
                                         alt="" />
                                </div>

                                <p class="text-sm font-bold text-slate-600">Home</p>
                            </div>

                            <div class="product_items grid gap-4 justify-items-center text-center md:flex-1">
                                <div class="border border-gray-200 rounded shadow-lg bg-[#F2F7FF] p-1 w-28 h-20">
                                    <img src="{{ asset('images/landing-page/services/travel.png') }}"
                                         class="w-full h-full object-contain"
                                         alt="" />
                                </div>

                                <p class="text-sm font-bold text-slate-600">Travel</p>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <!-- Animation -->
        <div class="h-36 sm:h-48 relative ">
            <!-- HIGHWAY -->
            <div
                 class="animate-highway block opacity-50 h-[100px] w-[800%] absolute -bottom-10 left-0 right-0 bg-repeat-x ">
            </div>

            <!-- CITY -->
            <div
                 class="animate-city block opacity-15 h-[250px] w-[600%] absolute bottom-14 left-0 right-0 bg-repeat-x ">
            </div>

            <!-- CAR AND WHEELS -->
            <div
                 class="animate-car w-[200px] bottom-10 left-[25%] lg:left-1/2 absolute opacity-[80%] -translate-x-1/2">
                <img src="{{ asset('images/landing-page/app/hero-animation/car.png') }}"
                     alt=""
                     class="w-full">
            </div>

            <div
                 class="flex animate-wheel w-[36px] h-[36px] bottom-[45px] translate-x-1/2 left-[25%] lg:left-1/2 absolute opacity-[80%">
                <img src="{{ asset('images/landing-page/app/hero-animation/wheel.png') }}"
                     class="absolute left-[-100px] animate-spin">
                <img src="{{ asset('images/landing-page/app/hero-animation/wheel.png') }}"
                     class="absolute left-[22px] animate-spin	">
            </div>

            <!-- BUS AND Wheels -->
            <div class="max-[900px]:hidden">
                <div class="animate-bus w-[350px] -bottom-10  absolute">
                    <img src="{{ asset('images/landing-page/app/hero-animation/bus.png') }}"
                         alt=""
                         class="w-full">
                </div>

                <div
                     class="flex animate-wheel w-[50px] h-[50px] bottom-[30px] translate-x-3/4 left-32 absolute opacity-[70%">
                    <img src="{{ asset('images/landing-page/app/hero-animation/bus-wheel.png') }}"
                         class="absolute left-[89px] animate-spin">
                    <img src="{{ asset('images/landing-page/app/hero-animation/bus-wheel.png') }}"
                         class="absolute left-[-92px] animate-spin">
                </div>
            </div>


            <!-- Bike AND Wheels -->
            <div>
                <div class="animate-bike w-[100px] bottom-10 absolute  z-20 right-[15%]">
                    <img src="{{ asset('images/landing-page/app/hero-animation/bike.png') }}"
                         alt=""
                         class="w-full">
                </div>

                <div class="flex animate-wheel w-[22px] h-[22px] bottom-[39px] right-[15%] z-10 absolute opacity-[70%">
                    <img src="{{ asset('images/landing-page/app/hero-animation/bike-wheel.png') }}"
                         class="absolute  animate-spin">
                    <img src="{{ asset('images/landing-page/app/hero-animation/bike-wheel.png') }}"
                         class="absolute left-[-66px] animate-spin">
                </div>
            </div>

        </div>

    </header>

    <main class="grid gap-12 sm:gap-16 md:gap-24 lg:gap-32 px-8 overflow-hidden">

        <section aria-labelledby="qualities"
                 class="relative min-[1280px]:hidden pt-8">
            {{-- <div class="product_header flex justify-center mb-5 py-8">
                <h2 class="text-4xl font-bold text-amber-400">Our Services</h2>
            </div> --}}
            <div
                 class="container mx-auto max-w-5xl flex gap-12 flex-wrap items-start justify-center md:justify-between">
                <div class="product_items grid gap-4 justify-items-center text-center md:flex-1">
                    <a href="http://uatweb.mutualglobal.com/two-wheeler-insurance/"
                       class="text-decoration-none">
                        <div class="rounded shadow-lg bg-[#F2F7FF] p-1 w-32 h-20">
                            <img src="{{ asset('images/landing-page/services/2w.png') }}"
                                 class="w-full h-full object-contain"
                                 alt="" />
                        </div>

                        <p class="text-sm font-bold text-slate-600 mt-4">Two Wheeler</p>

                    </a>

                </div>

                <div class="product_items grid gap-4 justify-items-center text-center md:flex-1">
                    <a href="http://uatweb.mutualglobal.com/car-insurance/">
                        <div class="rounded shadow-lg bg-[#F2F7FF] p-1 w-32 h-20">
                            <img src="{{ asset('images/landing-page/services/4w.png') }}"
                                 class="w-full h-full object-contain"
                                 alt="" />
                        </div>
                        <p class="text-sm mt-4 font-bold text-slate-600">Four Wheeler</p>
                    </a>
                </div>

                <div class="product_items grid gap-4 justify-items-center text-center md:flex-1">
                    <div class="rounded shadow-lg bg-[#F2F7FF] p-1 w-32 h-20">
                        <img src="{{ asset('images/landing-page/services/fire.png') }}"
                             class="w-full h-full object-contain"
                             alt="" />
                    </div>

                    <p class="text-sm font-bold text-slate-600">Fire</p>
                </div>

                <div class="product_items grid gap-4 justify-items-center text-center md:flex-1">
                    <div class="rounded shadow-lg bg-[#F2F7FF] p-1 w-32 h-20">
                        <img src="{{ asset('images/landing-page/services/marine.png') }}"
                             class="w-full h-full object-contain"
                             alt="" />
                    </div>

                    <p class="text-sm font-bold text-slate-600">Marine</p>
                </div>

                <div class="product_items grid gap-4 justify-items-center text-center md:flex-1">
                    <div class="rounded shadow-lg bg-[#F2F7FF] p-1 w-32 h-20">
                        <img src="{{ asset('images/landing-page/services/house.png') }}"
                             class="w-full h-full object-contain"
                             alt="" />
                    </div>

                    <p class="text-sm font-bold text-slate-600">Home</p>
                </div>

                <div class="product_items grid gap-4 justify-items-center text-center md:flex-1">
                    <div class="rounded shadow-lg bg-[#F2F7FF] p-1 w-32 h-20">
                        <img src="{{ asset('images/landing-page/services/travel.png') }}"
                             class="w-full h-full object-contain"
                             alt="" />
                    </div>

                    <p class="text-sm font-bold text-slate-600">Travel</p>
                </div>
            </div>
        </section>

        <section aria-labelledby="partners"
                 class="text-center grid gap-16 py-8 place-items-center">
            <div class="grid">
                <h2 id="partners"
                    class="partner_header mt-12 text-2xl sm:text-4xl font-bold text-amber-400">
                    Our Partner's
                </h2>
                {{-- <p class="w-full max-[640px]:text-[12px] max-w-lg">
                    We've forged partnerships with numerous reputable insurance companies to assist you in securing
                    coverage that aligns with your requirements and ensures flexibility without any restrictive
                    commitments.
                </p> --}}
            </div>
            <div class="flex flex-wrap justify-center gap-8 md:gap-x-16 max-w-2xl mx-auto">
                <div class="partner_img p-4 bg-white shadow-md rounded-md">
                    <img src="{{ asset('images/landing-page/partners/partner1.svg') }}"
                         alt="Partner"
                         class="h-16 w-16" />
                </div>
                <div class="partner_img p-4 bg-white shadow-md rounded-md">
                    <img src="{{ asset('images/landing-page/partners/partner2.svg') }}"
                         alt="Partner"
                         class="h-16 w-16" />
                </div>
                <div class="partner_img p-4 bg-white shadow-md rounded-md">
                    <img src="{{ asset('images/landing-page/partners/partner3.svg') }}"
                         alt="Partner"
                         class="h-16 w-16" />
                </div>
                <div class="partner_img p-4 bg-white shadow-md rounded-md">
                    <img src="{{ asset('images/landing-page/partners/partner4.svg') }}"
                         alt="Partner"
                         class="h-16 w-16" />
                </div>
                <div class="partner_img p-4 bg-white shadow-md rounded-md">
                    <img src="{{ asset('images/landing-page/partners/partner5.svg') }}"
                         alt="Partner"
                         class="h-16 w-16" />
                </div>
                <div class="partner_img p-4 bg-white shadow-md rounded-md">
                    <img src="{{ asset('images/landing-page/partners/partner6.svg') }}"
                         alt="Partner"
                         class="h-16 w-16" />
                </div>
                <div class="partner_img p-4 bg-white shadow-md rounded-md">
                    <img src="{{ asset('images/landing-page/partners/partner7.svg') }}"
                         alt="Partner"
                         class="h-16 w-16" />
                </div>
            </div>
        </section>


        <section aria-labelledby="services">

            <h1>Services</h1>

        </section>

    </main>
    <section aria-labelledby="contact"
             class="container mx-auto max-w-5xl px-4 overflow-hidden">
        <div class="flex flex-wrap justify-center gap-12 md:gap-6 lg:gap-20">

            <div class="md:flex-1 py-12 max-[769px]:hidden relative">
                <img src="{{ asset('images/landing-page/app/communication.png') }}"
                     alt="Your SVG Image"
                     width="600"
                     height="400" />
            </div>

            <div class="md:flex-1 md:max-w-sm relative">

                <form
                      class="relative border-2 border-neutral-900 p-6 rounded-lg grid gap-8 md:flex-1 md:max-w-lg my-4 md:my-12 lg:my-16 bg-white w-full">
                    <h2 id="contact"
                        class="text-3xl font-bold">Let’s Connect</h2>
                    <div class="relative">
                        <input type="text"
                               id="name"
                               class="peer form-input w-full border-1 border-amber-400 rounded-md focus:ring-1 focus:ring-amber-400 focus:border-amber-400 focus:outline-none placeholder-transparent"
                               placeholder="Your Name" />
                        <label for="name"
                               class="text-neutral-500 text-sm font-bold uppercase absolute -top-4 left-2 -translate-y-1/2 transition-all peer-placeholder-shown:left-4 peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-neutral-900 peer-focus:-top-4 peer-focus:left-2 peer-focus:text-neutral-600">
                            Your Name
                        </label>
                    </div>
                    <div class="relative">
                        <input type="email"
                               id="email"
                               class="peer form-input w-full border-1 border-amber-400 rounded-md focus:ring-1 focus:ring-amber-400 focus:border-amber-400 focus:outline-none placeholder-transparent"
                               placeholder="Your Email" />
                        <label for="email"
                               class="text-neutral-500 text-sm font-bold uppercase absolute -top-4 left-2 -translate-y-1/2 transition-all peer-placeholder-shown:left-4 peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-neutral-900 peer-focus:-top-4 peer-focus:left-2 peer-focus:text-neutral-600">
                            Your Email
                        </label>
                    </div>
                    <div class="relative">
                        <textarea name="content"
                                  id="content"
                                  cols="20"
                                  rows="5"
                                  class="peer form-textarea resize-none w-full border-1 border-amber-400 rounded-md focus:ring-1 focus:ring-amber-400 focus:border-amber-400 focus:outline-none placeholder-transparent"
                                  placeholder="How can we help?"></textarea>
                        <label for="content"
                               class="text-neutral-500 text-sm font-bold uppercase absolute -top-3 left-2 -translate-y-1/2 transition-all peer-placeholder-shown:left-4 peer-placeholder-shown:top-6 peer-placeholder-shown:text-neutral-900 peer-focus:-top-4 peer-focus:left-2 peer-focus:text-neutral-600">
                            How can we help?
                        </label>
                    </div>
                    <a role="menuitem"
                       class="py-2 px-6 bg-neutral-900 text-white w-max shadow-xl hover:shadow-none transition-shadow focus:outline-none focus-visible:ring-4 ring-neutral-900 rounded-md ring-offset-4 ring-offset-white"
                       href="/">
                        <i class="fa-regular fa-paper-plane fa-fade-slow me-3"
                           style="color: #FFD43B;"></i><span>Send</span>
                    </a>
                </form>
            </div>

        </div>
    </section>
    <!-- Footer -->
    <footer class="relative mt-3  text-white bg-gradient-to-b from-[#0B0D17] to-[#16171E] overflow-hidden">
        <div class="absolute top-0 left-0 w-full overflow-hidden md:hidden">
            <svg data-name="Layer 1"
                 xmlns="http://www.w3.org/2000/svg"
                 viewBox="0 0 1200 120"
                 preserveAspectRatio="none"
                 class="fill-current">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
                      class="relative block fill-white h-0"
                      style="width: calc(100% + 1.3px); height: 45px !important"></path>
            </svg>
        </div>

        <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 p-16">
            <div class="flex flex-col gap-5 z-10">
                <p class="text-[16px] list-none font-semibold text-stone-300 pt-2 uppercase">
                    Mutual Global Insurance Broking Pvt Ltd
                </p>

                <p>
                <div class="flex items-baseline">
                    <i class="fas fa-map-marker-alt text-amber-400"></i>

                    <a id="directionsLink"
                       href="https://www.google.com/maps/dir//Mutual+Global+Insurance+Broking+Pvt+Ltd,+80+Feet+Road,+Koramangala+4th+Block,+Koramangala,+Bengaluru,+Karnataka"
                       target="_blank"
                       rel="noopener noreferrer"
                       class="ml-2 text-xs">2nd Floor, 16/1, AVS Compound,<br />80ft Road, 4th Block,
                        Koramangala,<br />Bangalore, 560034</a>

                </div>
                <div class="flex items-center">
                    <i class="fas fa-phone-alt text-amber-400"></i>
                    <a href="tel:+919620960093"
                       class="ml-2 text-xs">+91 962-096-0093</a>
                </div>
                <div class="flex items-center">
                    <i class="far fa-envelope text-amber-400"></i>
                    <a href="mailto:support@mutualglobal.com"
                       class="ml-2 text-xs">support@mutualglobal.com</a>
                </div>
                </p>



                <div class="lg:mb-0 mb-6">
                    <button class="bg-white text-blue-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                            type="button">
                        <i class="fab fa-twitter"></i></button><button
                            class="bg-white text-blue-600 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                            type="button">
                        <i class="fab fa-facebook-square"></i></button><button
                            class="bg-white text-pink-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                            type="button">
                        <i class="fab fa-dribbble"></i></button><button
                            class="bg-white text-gray-800 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                            type="button">
                        <i class="fab fa-github"></i>
                    </button>
                </div>
            </div>

            <div class="flex flex-col gap-5 z-10">
                <ul>
                    <li class="text-[16px] list-none font-semibold text-stone-300 py-2 uppercase">
                        Other Links

                    </li>

                    <li class="my-4 list-none text-sm">
                        <i class="fa-solid fa-chevron-right fa-fade-slow fa-sm me-1"
                           style="color: #ffd43b"></i>
                        Website Guideline & Ideas
                    </li>

                    <li class="my-4 list-none text-sm">
                        <i class="fa-solid fa-chevron-right fa-fade-slow fa-sm me-1"
                           style="color: #ffd43b"></i>
                        Tips & tricks
                    </li>

                    <li class="my-4 list-none text-sm">
                        <i class="fa-solid fa-chevron-right fa-fade-slow fa-sm me-1"
                           style="color: #ffd43b"></i>
                        Photography
                    </li>
                </ul>
            </div>

            <div class="flex flex-col gap-5 z-10">
                <ul>
                    <li class="text-[16px] list-none font-semibold text-stone-300 py-2 uppercase">
                        Useful Links
                    </li>

                    <li class="my-4 list-none text-sm">
                        <i class="fa-solid fa-chevron-right fa-fade-slow fa-sm me-1"
                           style="color: #ffd43b"></i>
                        Website Guideline & Ideas
                    </li>
                    <li class="my-4 list-none text-sm">
                        <i class="fa-solid fa-chevron-right fa-fade-slow fa-sm me-1"
                           style="color: #ffd43b"></i>
                        Tips & tricks
                    </li>

                    <li class="my-4 list-none text-sm">
                        <i class="fa-solid fa-chevron-right fa-fade-slow fa-sm me-1"
                           style="color: #ffd43b"></i>
                        Photography
                    </li>
                </ul>
            </div>

            <div class="flex flex-col gap-5 z-10">
                <ul>
                    <li class="text-[16px] list-none font-semibold text-stone-300 py-2 uppercase">
                        Our Services

                    </li>

                    <li class="my-4 list-none text-sm">
                        <i class="fa-solid fa-chevron-right fa-fade-slow fa-sm me-1"
                           style="color: #ffd43b"></i>
                        Website Guideline & Ideas
                    </li>

                    <li class="my-4 list-none text-sm">
                        <i class="fa-solid fa-chevron-right fa-fade-slow fa-sm me-1"
                           style="color: #ffd43b"></i>
                        Tips & tricks
                    </li>

                    <li class="my-4 list-none text-sm">
                        <i class="fa-solid fa-chevron-right fa-fade-slow fa-sm me-1"
                           style="color: #ffd43b"></i>
                        Photography
                    </li>
                </ul>
            </div>
        </div>

        <div class="flex justify-center align-middle text-[12px] text-white pb-4">
            <p> © 2024 Copyright MutualGlobal.com. All Rights Reserved</p>
        </div>

        <!-- SVG Back grounds -->
        <div class="absolute top-0 left-0 opacity-5 w-[300px] h-[300px] md:w-[500px] md:h-[500px] ">
            <svg viewBox="0 0 200 200"
                 xmlns="http://www.w3.org/2000/svg">
                <path fill="#FEEDCF"
                      d="M43.4,-9.2C51.9,12.2,51.6,41.4,37,52.3C22.4,63.2,-6.4,55.9,-25.7,40.7C-45,25.4,-54.7,2.2,-48.8,-15.5C-42.9,-33.3,-21.5,-45.7,-2,-45C17.4,-44.4,34.8,-30.7,43.4,-9.2Z"
                      transform="translate(100 100)" />
            </svg>
        </div>
        <div class="absolute top-0 md:top-10 left-0 opacity-10 w-[300px] h-[300px] md:w-[500px] md:h-[500px] ">
            <svg viewBox="0 0 200 200"
                 xmlns="http://www.w3.org/2000/svg">
                <path fill="#FDB73E"
                      d="M37.1,-28.1C53.1,-21,74.8,-10.5,78.5,3.7C82.2,17.9,68,35.8,51.9,52.3C35.8,68.8,17.9,83.7,-1.7,85.5C-21.4,87.2,-42.7,75.6,-50.7,59.2C-58.7,42.7,-53.4,21.4,-54.4,-1C-55.3,-23.3,-62.6,-46.6,-54.6,-53.7C-46.6,-60.7,-23.3,-51.5,-6.4,-45.1C10.5,-38.7,21,-35.1,37.1,-28.1Z"
                      transform="translate(100 100)" />
            </svg>
        </div>

        <div class="absolute md:top-10 bottom-0 right-0 opacity-5 w-[300px] h-[300px] md:w-[500px] md:h-[500px] ">
            <svg viewBox="0 0 200 200"
                 xmlns="http://www.w3.org/2000/svg">
                <path fill="#FEEDCF"
                      d="M32.9,-39.8C41.5,-24.4,46.3,-12.2,46.1,-0.2C45.9,11.9,40.8,23.8,32.3,31.8C23.8,39.8,11.9,43.9,-5.6,49.5C-23.1,55.1,-46.2,62.2,-61.2,54.2C-76.1,46.2,-82.9,23.1,-77.7,5.2C-72.5,-12.7,-55.3,-25.4,-40.4,-40.8C-25.4,-56.3,-12.7,-74.4,-0.2,-74.1C12.2,-73.9,24.4,-55.3,32.9,-39.8Z"
                      transform="translate(100 100)" />
            </svg>
        </div>

        <div
             class="absolute -top-52 -left-32 z-0 aspect-square border-8 border-[#FEEDCF] rounded-full w-64 w-96 xl:max-w-lg opacity-10">
        </div>

        <div
             class="absolute -bottom-56 -right-32 z-0 aspect-square border-8 border-amber-400 rounded-full w-64 w-96 xl:max-w-lg opacity-10">
        </div>

    </footer>

</body>

<script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>

{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"></script> --}}
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
