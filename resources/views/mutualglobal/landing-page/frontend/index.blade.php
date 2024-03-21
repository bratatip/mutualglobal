@extends('mutualglobal.landing-page.layouts.master')


@section('title', 'Home - Mutual Global Pvt Ltd')


@section('content')


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
                                    <img src="{{ asset('images/landing-page/carousel/slider-1.jpg') }}"
                                         alt="...">
                                </div>
                                <!-- Item 2 -->
                                <div class="hidden duration-700 ease-in-out"
                                     data-carousel-item>
                                    <img src="{{ asset('images/landing-page/carousel/slider-2.jpg') }}"
                                         alt="...">
                                </div>
                                <!-- Item 3 -->
                                <div class="hidden duration-700 ease-in-out"
                                     data-carousel-item>
                                    <img src="{{ asset('images/landing-page/carousel/slider-3.jpg') }}"
                                         alt="...">
                                </div>

                                <!-- Item 4 -->
                                <div class="hidden duration-700 ease-in-out"
                                     data-carousel-item>
                                    <img src="{{ asset('images/landing-page/carousel/slider-4.jpg') }}"
                                         alt="...">
                                </div>

                                <!-- Item 5 -->
                                <div class="hidden duration-700 ease-in-out"
                                     data-carousel-item>
                                    <img src="{{ asset('images/landing-page/carousel/slider-5.jpg') }}"
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
                                <button type="button"
                                        class="w-3 h-3 rounded-full"
                                        aria-current="false"
                                        aria-label="Slide 4"
                                        data-carousel-slide-to="3"></button>
                                <button type="button"
                                        class="w-3 h-3 rounded-full"
                                        aria-current="false"
                                        aria-label="Slide 5"
                                        data-carousel-slide-to="4"></button>
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
                <div class="hero__img hidden items-center xl:flex max-w-[50%] xl:max-w-[40%] max-h-[500px] self-end pb-3">

                    <section aria-labelledby="qualities"
                             class="relative">
                        <h2 id="qualities"
                            class="sr-only">Our Qualities</h2>

                        <div
                             class="container mx-auto max-w-4xl flex gap-6 flex-wrap items-start justify-between md:justify-between">
                            <div class="product_items flex gap-10 justify-center text-center md:flex-1">
                                <a href="https://web.mutualglobal.com/two-wheeler-insurance/"
                                   class="text-decoration-none">
                                    <div
                                         class="border border-gray-200 rounded shadow-lg bg-[#F2F7FF] p-1 w-52 h-28 flex-shrink-0">
                                        <img src="{{ asset('images/landing-page/services/2w.png') }}"
                                             class="w-full h-full object-contain"
                                             alt="" />
                                    </div>
                                    <p class="text-sm font-bold text-slate-600 mt-4">Two Wheeler</p>
                                </a>

                                <a href="https://web.mutualglobal.com/car-insurance/"
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
                                    <img src="{{ asset('images/landing-page/services/health.png') }}"
                                         class="w-full h-full object-contain"
                                         alt="" />
                                </div>

                                <p class="text-sm font-bold text-slate-600">Health</p>
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


    </header>

    <main class="grid gap-12 sm:gap-16 md:gap-24 lg:gap-32 sm:px-8 overflow-hidden">

        <section aria-labelledby="qualities"
                 class="relative min-[1280px]:hidden pt-8">
            <div
                 class="container mx-auto max-w-5xl flex max-[368px]:gap-2 gap-12 flex-wrap items-start justify-center md:justify-between">
                 <div class="product_items grid gap-4 justify-items-center text-center md:flex-1">
                    <a href="#"
                       class="text-decoration-none">
                        <div class="rounded shadow-lg bg-[#F2F7FF] p-1 w-32 h-20">
                            <img src="{{ asset('images/landing-page/services/health.png') }}"
                                 class="w-full h-full object-contain"
                                 alt="" />
                        </div>

                        <p class="text-sm font-bold text-slate-600 mt-4">Health</p>

                    </a>

                </div>


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
            <div class="flex flex-wrap justify-center gap-4 md:gap-x-4 max-w-2xl mx-auto">
                <div class="partner_img p-4 bg-white shadow-md rounded-md">
                    <img src="{{ asset('images/landing-page/partners/care.png') }}"
                         alt="Partner"
                         class="h-10 w-10" />
                </div>
                <div class="partner_img p-4 bg-white shadow-md rounded-md">
                    <img src="{{ asset('images/landing-page/partners/chola.png') }}"
                         alt="Partner"
                         class="h-10 w-10" />
                </div>
                <div class="partner_img p-4 bg-white shadow-md rounded-md">
                    <img src="{{ asset('images/landing-page/partners/future.png') }}"
                         alt="Partner"
                         class="h-10 w-10" />
                </div>
                <div class="partner_img p-4 bg-white shadow-md rounded-md">
                    <img src="{{ asset('images/landing-page/partners/hdfc1.png') }}"
                         alt="Partner"
                         class="h-10 w-10" />
                </div>
                <div class="partner_img p-4 bg-white shadow-md rounded-md">
                    <img src="{{ asset('images/landing-page/partners/icici1.png') }}"
                         alt="Partner"
                         class="h-10 w-10" />
                </div>
                <div class="partner_img p-4 bg-white shadow-md rounded-md">
                    <img src="{{ asset('images/landing-page/partners/ifco-tokio.png') }}"
                         alt="Partner"
                         class="h-10 w-10" />
                </div>
                <div class="partner_img p-4 bg-white shadow-md rounded-md">
                    <img src="{{ asset('images/landing-page/partners/liberty.png') }}"
                         alt="Partner"
                         class="h-10 w-10" />
                </div>

                <div class="partner_img p-4 bg-white shadow-md rounded-md">
                    <img src="{{ asset('images/landing-page/partners/magma.png') }}"
                         alt="Partner"
                         class="h-10 w-10" />
                </div>

                <div class="partner_img p-4 bg-white shadow-md rounded-md">
                    <img src="{{ asset('images/landing-page/partners/national-insurance.jpeg') }}"
                         alt="Partner"
                         class="h-10 w-10" />
                </div>

                <div class="partner_img p-4 bg-white shadow-md rounded-md">
                    <img src="{{ asset('images/landing-page/partners/reliance.png') }}"
                         alt="Partner"
                         class="h-10 w-10" />
                </div>

                <div class="partner_img p-4 bg-white shadow-md rounded-md">
                    <img src="{{ asset('images/landing-page/partners/royal.png') }}"
                         alt="Partner"
                         class="h-10 w-10" />
                </div>

                <div class="partner_img p-4 bg-white shadow-md rounded-md">
                    <img src="{{ asset('images/landing-page/partners/sbi1.png') }}"
                         alt="Partner"
                         class="h-10 w-10" />
                </div>

                <div class="partner_img p-4 bg-white shadow-md rounded-md">
                    <img src="{{ asset('images/landing-page/partners/star.png') }}"
                         alt="Partner"
                         class="h-10 w-10" />
                </div>

                <div class="partner_img p-4 bg-white shadow-md rounded-md">
                    <img src="{{ asset('images/landing-page/partners/tata.png') }}"
                         alt="Partner"
                         class="h-10 w-10" />
                </div>

                <div class="partner_img p-4 bg-white shadow-md rounded-md">
                    <img src="{{ asset('images/landing-page/partners/the-new-india.png') }}"
                         alt="Partner"
                         class="h-10 w-10" />
                </div>

                <div class="partner_img p-4 bg-white shadow-md rounded-md">
                    <img src="{{ asset('images/landing-page/partners/the-oriental.png') }}"
                         alt="Partner"
                         class="h-10 w-10" />
                </div>

                <div class="partner_img p-4 bg-white shadow-md rounded-md">
                    <img src="{{ asset('images/landing-page/partners/zuno.png') }}"
                         alt="Partner"
                         class="h-10 w-10" />
                </div>
            </div>
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
@endsection


@push('third_party_scripts')
    {{-- <script src="{{ asset('js/scrollreveal.min.js') }}"></script> --}}
@endpush

@push('page_scripts')
    {{-- <script>
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
    </script> --}}
@endpush

@push('page_css')
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
@endpush
