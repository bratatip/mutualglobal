    <!-- hide elements while page load -->

    <style>
        [x-cloak] {
            display: none;
        }

        /* .backdrop-blur {
            backdrop-filter: blur(10px);
        } */
    </style>

    <nav x-data="{ scrolledPastHeader: false }"
         x-init="() => {
             const header = document.querySelector('header');
         
             if (header) {
                 window.addEventListener('scroll', () => {
                     scrolledPastHeader = window.scrollY > header.offsetHeight;
                 });
             } else {
                 // Apply styles for non-scrolled header when no header is present
                 scrolledPastHeader = true;
             }
         }"
         :class="{ 'bg-white transition shadow-xl': scrolledPastHeader, 'bg-[#F2F7FF]': !scrolledPastHeader }"
         class="mx-auto p-0 fixed w-full z-50 ">
        <div class="container mx-auto flex items-center justify-between">

            <a href="/"
               class="focus:outline-none focus-visible:ring-4 ring-neutral-900 rounded-md ring-offset-4 ring-offset-amber-400 xl:pl-24 px-6 z-50 hover:opacity-75 transition-opacity"
               aria-label="Go to homepage">
                <img src="{{ asset('images/landing-page/app/brand.png') }}"
                     width="200"
                     class="w-48 md:w-64 lg:w-72"
                     alt="Brand Logo" />
            </a>

            {{-- hamburger for small screen --}}
            {{-- <button id="menu"
                class="lg:hidden focus:outline-none focus-visible:ring-4 ring-neutral-900 rounded-md ring-offset-4 ring-offset-amber-400 text-neutral-900 hover:text-neutral-600 transition-colors mx-3"
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
        </button> --}}

            <button @click="$store.sidebar.navOpen = !$store.sidebar.navOpen"
                    class="lg:hidden absolute top-5 right-5 focus:outline-none">
                <!-- Menu Icons -->
                <svg xmlns="http://www.w3.org/2000/svg"
                     class="h-6 w-6"
                     x-bind:class="$store.sidebar.navOpen ? 'hidden' : ''"
                     fill="none"
                     viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M4 6h16M4 12h16m-7 6h7" />
                </svg>

                <!-- Close Menu -->
                {{-- <svg x-cloak
                     xmlns="http://www.w3.org/2000/svg"
                     class="h-6 w-6"
                     x-bind:class="$store.sidebar.navOpen ? '' : 'hidden'"
                     fill="none"
                     viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M6 18L18 6M6 6l12 12" />
                </svg> --}}
            </button>

            {{-- Desktop Menue Bar --}}
            <div role="menubar"
                 :class="{ 'bg-white transition shadow-xl': scrolledPastHeader, 'bg-[#F2F7FF]': !scrolledPastHeader }"
                 class="hidden flex-col gap-4 absolute z-40 right-0 left-0 top-16 text-center text-md px-6 xl:pr-20 items-center lg:flex lg:flex-row lg:static lg:shadow-none lg:justify-between lg:w-full">
                <a role="menuitem"
                   class="py-1 px-2 focus:outline-none focus-visible:ring-4 ring-neutral-900 rounded-md ring-offset-4 ring-offset-amber-400 hover:text-amber-400 transition-colors lg:ms-auto"
                   href="/">Home</a>
                <a role="menuitem"
                   class="py-1 px-2 focus:outline-none focus-visible:ring-4 ring-neutral-900 rounded-md ring-offset-4 ring-offset-amber-400 hover:text-amber-400 transition-colors"
                   href="#">
                    Products
                </a>

                <div x-data="{ show: false, menu: false }">
                    {{-- <button class="text-md text-neutral px-4 py-2 border-0 rounded-md outline-none"
                        x-on:click="show = ! show">Open Dropdown</button> --}}

                    <button class="py-1 px-2 focus:outline-none focus-visible:ring-4 ring-neutral-900 rounded-md ring-offset-4 ring-offset-amber-400 hover:text-amber-400 transition-colors"
                            x-on:click="show = ! show">Services</button>
                    <div class="relative">
                        <div class="bg-[#e4e6e9] rounded-md p-3 min-w-max top-1 w-full absolute z-10"
                             x-show="show"
                             x-cloak
                             @click.away="show = false"
                             x-transition:enter="transition ease-out duration-100"
                             x-transition:enter-start="transform opacity-0 scale-95">
                            <ul
                                class="[&>li]:text-black [&>li]:text-md [&>li]:cursor-pointer [&>li]:px-2 [&>li]:py-1 [&>li]:rounded-md [&>li]:transition-all hover:[&>li]:bg-amber-300 active:[&>li]:bg-amber-400 active:[&>li]:scale-[0.99]">
                                <li><a class=""
                                       href="{{ route('client.index') }}">Health Card</a></li>
                                <li><a class=""
                                       href="{{ route('coupon.index') }}">Health Coupon</a></li>
                                <li><a class=""
                                       href="#">Risk Inspection</a></li>
                                <li><a class=""
                                       href="#">Quote Request</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
                <a role="menuitem"
                   class="py-1 px-2 focus:outline-none focus-visible:ring-4 ring-neutral-900 rounded-md ring-offset-4 ring-offset-amber-400 hover:text-amber-400 transition-colors"
                   href="#">
                    POS
                </a>

                <a role="menuitem"
                   class="py-1 px-2 focus:outline-none focus-visible:ring-4 ring-neutral-900 rounded-md ring-offset-4 ring-offset-amber-400 hover:text-amber-400 transition-colors"
                   href="#">
                    MGIB Prime
                </a>
            </div>

            {{-- Mobile Side Bar --}}


            <div class="h-screen bg-white transition-all duration-300 space-y-2 fixed z-20 lg:hidden"
                 x-cloak
                 x-bind:class="{
                     'w-64': $store.sidebar.full,
                     'w-64 sm:w-64': !$store.sidebar.full,
                     'top-0 left-0': $store.sidebar.navOpen,
                     'top-0 -left-64': !$store.sidebar.navOpen
                 }">

                <h1 class="text-white font-black py-4"
                    x-bind:class="$store.sidebar.full ? 'text-2xl px-4' : 'text-xl px-4 xm:px-2'"></h1>
                <h1 class="text-white font-black py-4"
                    x-bind:class="$store.sidebar.full ? 'text-2xl px-4' : 'text-xl px-4 xm:px-2'"></h1>

                <div class="px-4 space-y-2">

                    <!-- SideBar Toggle -->
                    {{-- <button @click="$store.sidebar.full = !$store.sidebar.full"
                            class="hidden md:block focus:outline-none absolute p-1 -right-3 top-10 bg-gray-900 rounded-full shadow-md">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="h-4 w-4 transition-all duration-300 text-white transform"
                             x-bind:class="$store.sidebar.full ? 'rotate-90' : '-rotate-90 '"
                             viewBox="0 0 20 20"
                             fill="currentColor">
                            <path fill-rule="evenodd"
                                  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                  clip-rule="evenodd" />
                        </svg>
                    </button> --}}
                    <!-- Home -->
                    <div x-data="tooltip"
                         x-on:mouseover="show = true"
                         x-on:mouseleave="show = false"
                         @click="$store.sidebar.active = 'home' "
                         class=" relative flex items-center hover:text-neutral-900 hover:bg-amber-200 space-x-2 rounded-md p-2 cursor-pointer"
                         x-bind:class="{
                             'justify-start': $store.sidebar.full,
                             'justify-start': !$store.sidebar
                                 .full,
                             'text-neutral-900 bg-amber-200': $store.sidebar.active ==
                                 'home',
                             'text-gray-400 ': $store.sidebar.active != 'home'
                         }">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 24 24"
                             height="24"
                             width="24"
                             id="Monitor-Home--Streamline-Ultimate">
                            <desc>Monitor Home Streamline Icon: https://streamlinehq.com</desc>
                            <defs></defs>
                            <title>monitor-home</title>
                            <path d="m5 22.004 14 0"
                                  fill="none"
                                  stroke="#000000"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="1"></path>
                            <path d="m11.5 20.004 0 2"
                                  fill="none"
                                  stroke="#000000"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="1"></path>
                            <path d="m0.5 16.004 23 0"
                                  fill="none"
                                  stroke="#000000"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="1"></path>
                            <path d="M2 2.004h20s1.5 0 1.5 1.5v15s0 1.5 -1.5 1.5H2s-1.5 0 -1.5 -1.5v-15s0 -1.5 1.5 -1.5"
                                  fill="none"
                                  stroke="#000000"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="1"></path>
                            <path d="M9 8.136V12a1 1 0 0 0 1 1h4a1 1 0 0 0 1 -1V8.136"
                                  fill="none"
                                  stroke="#000000"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="1"></path>
                            <path d="m8 9.011 3.012 -2.636a1.5 1.5 0 0 1 1.976 0L16 9.011"
                                  fill="none"
                                  stroke="#000000"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="1"></path>
                            <path d="M13 13h-2v-2a1 1 0 1 1 2 0Z"
                                  fill="none"
                                  stroke="#000000"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="1"></path>
                        </svg>
                        <h1 x-cloak
                            x-bind:class="!$store.sidebar.full && !show ?
                                'lg:hidden' : ''">
                            <a href="/"
                               class="text-decoration-none">Home</a>
                        </h1>
                    </div>

                    <!-- Products -->
                    <div x-data="dropdown"
                         class="relative">
                        <!-- Dropdown head -->
                        <div @click="toggle('products')"
                             x-data="tooltip"
                             x-on:mouseover="show = true"
                             x-on:mouseleave="show = false"
                             class="flex justify-between text-gray-400 hover:text-neutral-900 hover:bg-amber-200 items-center space-x-2 rounded-md p-2 cursor-pointer"
                             x-bind:class="{
                                 'justify-start': $store.sidebar.full,
                                 'justify-start': !$store.sidebar
                                     .full,
                                 'text-neutral-900 bg-amber-200': $store.sidebar.active ==
                                     'products',
                                 'text-gray-400 ': $store.sidebar.active != 'products'
                             }">
                            <div class="relative flex space-x-2 items-center">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 24 24"
                                     height="24"
                                     width="24"
                                     id="Products-Gifts--Streamline-Ultimate">
                                    <desc>Products Gifts Streamline Icon: https://streamlinehq.com</desc>
                                    <defs></defs>
                                    <title>products-gifts</title>
                                    <path d="m0.5 23.5 0 -10"
                                          fill="none"
                                          stroke="#000000"
                                          stroke-linecap="round"
                                          stroke-linejoin="round"
                                          stroke-width="1"></path>
                                    <path d="M0.5 15.5h7a3 3 0 0 1 3 3h6a3 3 0 0 1 3 3H0.5Z"
                                          fill="none"
                                          stroke="#000000"
                                          stroke-linecap="round"
                                          stroke-linejoin="round"
                                          stroke-width="1"></path>
                                    <path d="m10.5 18.5 -3 0"
                                          fill="none"
                                          stroke="#000000"
                                          stroke-linecap="round"
                                          stroke-linejoin="round"
                                          stroke-width="1"></path>
                                    <path d="M16.5 8.5h6s1 0 1 1v5s0 1 -1 1h-6s-1 0 -1 -1v-5s0 -1 1 -1"
                                          fill="none"
                                          stroke="#000000"
                                          stroke-linecap="round"
                                          stroke-linejoin="round"
                                          stroke-width="1"></path>
                                    <path d="m19.5 8.5 0 7"
                                          fill="none"
                                          stroke="#000000"
                                          stroke-linecap="round"
                                          stroke-linejoin="round"
                                          stroke-width="1"></path>
                                    <path d="m15.5 12.5 8 0"
                                          fill="none"
                                          stroke="#000000"
                                          stroke-linecap="round"
                                          stroke-linejoin="round"
                                          stroke-width="1"></path>
                                    <path d="M18.5 4.5h-7.1a1 1 0 0 0 -0.994 0.895l-0.79 7.5a1 1 0 0 0 1 1.105H15.5"
                                          fill="none"
                                          stroke="#000000"
                                          stroke-linecap="round"
                                          stroke-linejoin="round"
                                          stroke-width="1"></path>
                                    <path d="M16.5 4.5v-2a2 2 0 0 0 -2 -2h0a2 2 0 0 0 -2 2v2"
                                          fill="none"
                                          stroke="#000000"
                                          stroke-linecap="round"
                                          stroke-linejoin="round"
                                          stroke-width="1"></path>
                                    <path d="m19.5 8.5 -2 -2"
                                          fill="none"
                                          stroke="#000000"
                                          stroke-linecap="round"
                                          stroke-linejoin="round"
                                          stroke-width="1"></path>
                                    <path d="m21.5 6.5 -2 2"
                                          fill="none"
                                          stroke="#000000"
                                          stroke-linecap="round"
                                          stroke-linejoin="round"
                                          stroke-width="1"></path>
                                </svg>
                                <h1 x-cloak
                                    x-bind:class="!$store.sidebar.full && !show ?
                                        'lg:hidden' : ''">
                                    <a href="#"
                                       class="text-decoration-none">Products</a>
                                </h1>
                            </div>
                            <svg x-cloak
                                 x-bind:class="$store.sidebar.full ? '' : 'lg:hidden'"
                                 xmlns="http://www.w3.org/2000/svg"
                                 class="h-4 w-4"
                                 viewBox="0 0 20 20"
                                 fill="currentColor">
                                <path fill-rule="evenodd"
                                      d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                      clip-rule="evenodd" />
                            </svg>
                        </div>
                        <!-- Dropdown content -->
                        {{-- <div x-cloak
                             x-show="open"
                             @click.outside="open =false"
                             x-bind:class="$store.sidebar.full ? expandedClass : shrinkedClass"
                             class="text-gray-400 space-y-3 ">
                            <h1 class="hover:text-gray-200 cursor-pointer">Item 1</h1>
                            <h1 class="hover:text-gray-200 cursor-pointer">Item 2</h1>
                            <h1 class="hover:text-gray-200 cursor-pointer">Item 3</h1>
                            <h1 class="hover:text-gray-200 cursor-pointer">Item 4</h1>
                        </div> --}}
                    </div>

                    <!-- Services -->
                    <div x-data="dropdown"
                         class="relative">
                        <!-- Dropdown head -->
                        <div @click="toggle('services')"
                             x-data="tooltip"
                             x-on:mouseover="show = true"
                             x-on:mouseleave="show = false"
                             class="flex justify-between text-gray-400 hover:text-neutral-900 hover:bg-amber-200 items-center space-x-2 rounded-md p-2 cursor-pointer"
                             x-bind:class="{
                                 'justify-start': $store.sidebar.full,
                                 'justify-start': !$store.sidebar
                                     .full,
                                 'text-neutral-900 bg-amber-200': $store.sidebar.active ==
                                     'services',
                                 'text-gray-400 ': $store.sidebar.active != 'services'
                             }">
                            <div class="relative flex space-x-2 items-center">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                     fill="none"
                                     viewBox="0 0 24 24"
                                     height="24"
                                     width="24"
                                     id="Amazon-Web-Service-Managed-Service-1--Streamline-Ultimate">
                                    <desc>Amazon Web Service Managed Service 1 Streamline Icon: https://streamlinehq.com
                                    </desc>
                                    <path stroke="#000000"
                                          stroke-linecap="round"
                                          stroke-linejoin="round"
                                          stroke-miterlimit="10"
                                          d="m13.0666 6.82871 0.4 1.3c0.1 0.5 0.6 0.7 1.1 0.6l1.3 -0.3c1.2 -0.3 2 1.1 1.2 1.99999l-0.9 1c-0.3 0.4 -0.3 0.9 0 1.2l0.9 1c0.8 0.9 0 2.3 -1.2 2l-1.3 -0.3c-0.5 -0.1 -0.9 0.2 -1.1 0.6l-0.4 1.3c-0.4 1.2 -2 1.2 -2.3 0l-0.4 -1.3c-0.1 -0.5 -0.6 -0.7 -1.1 -0.6l-1.29999 0.3c-1.2 0.3 -2.00001 -1.1 -1.20001 -2l0.90001 -1c0.3 -0.4 0.3 -0.9 0 -1.2l-0.90001 -1c-0.8 -0.89999 0.00001 -2.29999 1.20001 -1.99999l1.29999 0.3c0.5 0.1 0.9 -0.2 1.1 -0.6l0.4 -1.3c0.3 -1.2 2 -1.2 2.3 0Z"
                                          stroke-width="1"></path>
                                    <path stroke="#000000"
                                          stroke-linecap="round"
                                          stroke-linejoin="round"
                                          stroke-miterlimit="10"
                                          d="M20.1417 15.2319c0.1 0.4 0.5 0.6 0.8 0.5l1 -0.2c0.9 -0.2 1.5 0.9 0.9 1.6l-0.7 0.8c-0.3 0.3 -0.3 0.7 0 1l0.7 0.8c0.6 0.7 0 1.8 -0.9 1.6l-1 -0.2c-0.4 -0.1 -0.7 0.1 -0.8 0.5l-0.3 1c-0.3 0.9 -1.5 0.9 -1.8 0l-0.3 -1c-0.1 -0.4 -0.5 -0.6 -0.8 -0.5l-1 0.2c-0.9 0.2 -1.5 -0.9 -0.9 -1.6l0.7 -0.8"
                                          stroke-width="1"></path>
                                    <path stroke="#000000"
                                          stroke-linecap="round"
                                          stroke-linejoin="round"
                                          stroke-miterlimit="10"
                                          d="M3.975 19.5888c-4.3 -4.3 -4.3 -11.29999 0 -15.59999 3.3 -3.300003 8.1 -4.100006 12.1 -2.30001"
                                          stroke-width="1"></path>
                                    <path stroke="#000000"
                                          stroke-linecap="round"
                                          stroke-linejoin="round"
                                          stroke-miterlimit="10"
                                          d="m22.275 4.28887 -2.8 -0.2 -0.2 2.8"
                                          stroke-width="1"></path>
                                    <path stroke="#000000"
                                          stroke-linecap="round"
                                          stroke-linejoin="round"
                                          stroke-miterlimit="10"
                                          d="m1.17493 19.2891 2.8 0.3 0.3 -2.8"
                                          stroke-width="1"></path>
                                    <path stroke="#000000"
                                          stroke-linecap="round"
                                          stroke-linejoin="round"
                                          stroke-miterlimit="10"
                                          d="M19.475 4.08887c2.3 2.3 3.4 5.3 3.2 8.30003"
                                          stroke-width="1"></path>
                                    <path stroke="#000000"
                                          stroke-linecap="round"
                                          stroke-linejoin="round"
                                          stroke-miterlimit="10"
                                          d="M11.975 22.8893c-1.6 0 -3.1 -0.3 -4.6 -0.9"
                                          stroke-width="1"></path>
                                    <path stroke="#000000"
                                          stroke-linecap="round"
                                          stroke-linejoin="round"
                                          stroke-miterlimit="10"
                                          d="M11.9166 13.4477c0.7836 0 1.4189 -0.6353 1.4189 -1.4189 0 -0.7837 -0.6353 -1.4189 -1.4189 -1.4189 -0.7836 0 -1.4189 0.6352 -1.4189 1.4189 0 0.7836 0.6353 1.4189 1.4189 1.4189Z"
                                          stroke-width="1"></path>
                                    <path stroke="#000000"
                                          stroke-linecap="round"
                                          stroke-linejoin="round"
                                          stroke-miterlimit="10"
                                          d="M18.9417 19.5064c0.5811 0 1.0522 -0.4711 1.0522 -1.0523 0 -0.5811 -0.4711 -1.0522 -1.0522 -1.0522 -0.5812 0 -1.0523 0.4711 -1.0523 1.0522 0 0.5812 0.4711 1.0523 1.0523 1.0523Z"
                                          stroke-width="1"></path>
                                </svg>
                                <h1 x-cloak
                                    x-bind:class="!$store.sidebar.full && !show ?
                                        'lg:hidden' : ''">
                                    Services</h1>
                            </div>
                            <svg x-cloak
                                 x-bind:class="$store.sidebar.full ? '' : 'lg:hidden'"
                                 xmlns="http://www.w3.org/2000/svg"
                                 class="h-4 w-4"
                                 viewBox="0 0 20 20"
                                 fill="currentColor">
                                <path fill-rule="evenodd"
                                      d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                      clip-rule="evenodd" />
                            </svg>
                        </div>
                        <!-- Dropdown content -->
                        <div x-cloak
                             x-show="open"
                             @click.outside="open=false"
                             x-bind:class="$store.sidebar.full ? expandedClass : shrinkedClass"
                             class="text-gray-400 space-y-3">
                            <h6 class="hover:text-amber-400 cursor-pointer"><a
                                   href="{{ route('client.index') }}">Health Card</a></h6>
                            <h6 class="hover:text-amber-400 cursor-pointer"><a
                                   href="{{ route('coupon.index') }}">Health Coupon</a></h6>
                            <h6 class="hover:text-amber-400 cursor-pointer"><a href="#">Risk Inspection</a></h6>
                            <h6 class="hover:text-amber-400 cursor-pointer"><a href="#">Quote Request</a></h6>
                        </div>
                    </div>

                    <!-- POS -->
                    <div x-data="tooltip"
                         x-on:mouseover="show = true"
                         x-on:mouseleave="show = false"
                         @click="$store.sidebar.active = 'pos' "
                         class=" relative flex items-center hover:text-neutral-900 hover:bg-amber-200 space-x-2 rounded-md p-2 cursor-pointer"
                         x-bind:class="{
                             'justify-start': $store.sidebar.full,
                             'justify-start': !$store.sidebar
                                 .full,
                             'text-neutral-900 bg-amber-200': $store.sidebar.active ==
                                 'pos',
                             'text-gray-400 ': $store.sidebar.active != 'pos'
                         }">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             fill="none"
                             viewBox="0 0 24 24"
                             height="24"
                             width="24"
                             id="Amazon-Web-Service-Internet-Of-Thing-Analytics-Services-2--Streamline-Ultimate">
                            <desc>Amazon Web Service Internet Of Thing Analytics Services 2 Streamline Icon:
                                https://streamlinehq.com</desc>
                            <path stroke="#000000"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                  d="M11.9999 8.74976c2.2091 0 4 -1.79087 4 -4 0 -2.20914 -1.7909 -4.000004 -4 -4.000004 -2.20916 0 -4.00002 1.790864 -4.00002 4.000004 0 2.20913 1.79086 4 4.00002 4Z"
                                  stroke-width="1"></path>
                            <path stroke="#000000"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                  d="M11.9999 20.5502c1.0494 0 1.9 -0.8506 1.9 -1.9 0 -1.0493 -0.8506 -1.9 -1.9 -1.9 -1.0493 0 -1.9 0.8507 -1.9 1.9 0 1.0494 0.8507 1.9 1.9 1.9Z"
                                  stroke-width="1"></path>
                            <path stroke="#000000"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                  d="m13.2499 20.3503 2.9 1.2 -4.1 1.7 -4.19999 -1.7 2.89999 -1.2"
                                  stroke-width="1"></path>
                            <path stroke="#000000"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                  d="m11.9999 16.7502 0 -8.00044"
                                  stroke-width="1"></path>
                            <path stroke="#000000"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                  d="M4.8499 13.6999c1.04934 0 1.89999 -0.8507 1.89999 -1.9s-0.85065 -1.9 -1.89999 -1.9 -1.90001 0.8507 -1.90001 1.9 0.85067 1.9 1.90001 1.9Z"
                                  stroke-width="1"></path>
                            <path stroke="#000000"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                  d="m6.14993 13.5 2.90001 1.2 -4.19999 1.7 -4.100011 -1.7 2.899991 -1.2"
                                  stroke-width="1"></path>
                            <path stroke="#000000"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                  d="M19.1499 13.6999c1.0494 0 1.9 -0.8507 1.9 -1.9s-0.8506 -1.9 -1.9 -1.9c-1.0493 0 -1.9 0.8507 -1.9 1.9s0.8507 1.9 1.9 1.9Z"
                                  stroke-width="1"></path>
                            <path stroke="#000000"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                  d="m17.85 13.5 -2.8 1.2 4.1 1.7 4.1 -1.7 -2.9 -1.2"
                                  stroke-width="1"></path>
                            <path stroke="#000000"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                  d="m6.29993 10.5857 2.8 -3.0669"
                                  stroke-width="1"></path>
                            <path stroke="#000000"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                  d="m17.6999 10.5857 -2.8 -3.0669"
                                  stroke-width="1"></path>
                        </svg>
                        <h1 x-cloak
                            x-bind:class="!$store.sidebar.full && !show ?
                                'lg:hidden' : ''">
                            <a href="#"
                               class="text-decoration-none">POS</a>
                        </h1>
                    </div>

                    <!-- MGIB Prime -->
                    <div x-data="tooltip"
                         x-on:mouseover="show = true"
                         x-on:mouseleave="show = false"
                         @click="$store.sidebar.active = 'prime' "
                         class=" relative flex items-center hover:text-neutral-900 hover:bg-amber-200 space-x-2 rounded-md p-2 cursor-pointer"
                         x-bind:class="{
                             'justify-start': $store.sidebar.full,
                             'justify-start': !$store.sidebar
                                 .full,
                             'text-neutral-900 bg-amber-200': $store.sidebar.active ==
                                 'prime',
                             'text-gray-400 ': $store.sidebar.active != 'prime'
                         }">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             fill="none"
                             viewBox="0 0 24 24"
                             height="24"
                             width="24"
                             id="Workflow-Manager-Male-Crown--Streamline-Ultimate">
                            <desc>Workflow Manager Male Crown Streamline Icon: https://streamlinehq.com</desc>
                            <path stroke="#000000"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                  d="M13.377 19.8598c-0.4161 0.3121 -0.9221 0.4807 -1.4421 0.4807 -0.5201 0 -1.0261 -0.1686 -1.4421 -0.4807"
                                  stroke-width="1"></path>
                            <path stroke="#000000"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                  d="M10.0159 17.7053c-0.13526 0 -0.24488 -0.1096 -0.24488 -0.2449 0 -0.1352 0.10962 -0.2448 0.24488 -0.2448"
                                  stroke-width="1"></path>
                            <path stroke="#000000"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                  d="M10.0159 17.7053c0.1352 0 0.2448 -0.1096 0.2448 -0.2449 0 -0.1352 -0.1096 -0.2448 -0.2448 -0.2448"
                                  stroke-width="1"></path>
                            <path stroke="#000000"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                  d="M13.8656 17.7053c-0.1352 0 -0.2448 -0.1096 -0.2448 -0.2449 0 -0.1352 0.1096 -0.2448 0.2448 -0.2448"
                                  stroke-width="1"></path>
                            <path stroke="#000000"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                  d="M13.8656 17.7053c0.1353 0 0.2449 -0.1096 0.2449 -0.2449 0 -0.1352 -0.1096 -0.2448 -0.2449 -0.2448"
                                  stroke-width="1"></path>
                            <path stroke="#000000"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                  d="M6.24441 14.5792c-0.05245 0.3153 -0.07865 0.6343 -0.07834 0.9539v1.9224c-0.00996 0.7639 0.13191 1.5222 0.41735 2.2308 0.28544 0.7087 0.70878 1.3536 1.24546 1.8973 0.53667 0.5437 1.17598 0.9754 1.88083 1.27 0.70489 0.2947 1.46119 0.4464 2.22519 0.4464 0.7639 0 1.5203 -0.1517 2.2251 -0.4464 0.7049 -0.2946 1.3442 -0.7263 1.8809 -1.27 0.5366 -0.5437 0.96 -1.1886 1.2454 -1.8973 0.2855 -0.7086 0.4273 -1.4669 0.4174 -2.2308v-1.9224c0.0003 -0.3196 -0.0259 -0.6386 -0.0784 -0.9539"
                                  stroke-width="1"></path>
                            <path stroke="#000000"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                  d="M17.7037 15.5331h-1.9225c-1.2731 0 -3.9017 0.3232 -5.7693 -1.9234 -0.47521 0.5658 -1.06241 1.0271 -1.72462 1.3549 -0.6622 0.3278 -1.38509 0.515 -2.12317 0.5499"
                                  stroke-width="1"></path>
                            <path stroke="#000000"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                  d="M6.48142 12.2876 4.22208 6.70531l4.94959 2.12321L12 4.58896l2.8283 4.23956 4.9496 -2.12125 -2.2583 5.58223c-1.7283 -0.8059 -3.612 -1.2236 -5.5189 -1.224 -1.9069 -0.0003 -3.79075 0.4168 -5.51928 1.2221Z"
                                  stroke-width="1"></path>
                            <path stroke="#000000"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                  d="M12 4.23543c0.9763 0 1.7677 -0.79143 1.7677 -1.76771 0 -0.97628 -0.7914 -1.767708 -1.7677 -1.767708 -0.9763 0 -1.7677 0.791428 -1.7677 1.767708S11.0237 4.23543 12 4.23543Z"
                                  stroke-width="1"></path>
                            <path stroke="#000000"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                  d="M20.485 6.71023c0.9763 0 1.7677 -0.79144 1.7677 -1.76772 0 -0.97627 -0.7914 -1.76771 -1.7677 -1.76771 -0.9763 0 -1.7677 0.79144 -1.7677 1.76771 0 0.97628 0.7914 1.76772 1.7677 1.76772Z"
                                  stroke-width="1"></path>
                            <path stroke="#000000"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                  d="M3.51499 6.71023c0.97628 0 1.76771 -0.79144 1.76771 -1.76772 0 -0.97627 -0.79143 -1.76771 -1.76771 -1.76771 -0.97628 0 -1.76771 0.79144 -1.76771 1.76771 0 0.97628 0.79143 1.76772 1.76771 1.76772Z"
                                  stroke-width="1"></path>
                        </svg>
                        <h1 x-cloak
                            x-bind:class="!$store.sidebar.full && !show ?
                                'lg:hidden' : ''">
                            <a href="#"
                               class="text-decoration-none">MGIB Prime</a>
                        </h1>
                    </div>

                    <!-- About -->
                    <div x-data="tooltip"
                         x-on:mouseover="show = true"
                         x-on:mouseleave="show = false"
                         @click="$store.sidebar.active = 'about' "
                         class=" relative flex items-center hover:text-neutral-900 hover:bg-amber-200 space-x-2 rounded-md p-2 cursor-pointer"
                         x-bind:class="{
                             'justify-start': $store.sidebar.full,
                             'justify-start': !$store.sidebar
                                 .full,
                             'text-neutral-900 bg-amber-200': $store.sidebar.active ==
                                 'about',
                             'text-gray-400 ': $store.sidebar.active != 'about'
                         }">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             fill="none"
                             viewBox="0 0 24 24"
                             height="24"
                             width="24"
                             id="Network-Information--Streamline-Ultimate">
                            <desc>Network Information Streamline Icon: https://streamlinehq.com</desc>
                            <path stroke="#000000"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                  d="M1.89801 17.5h7.603"
                                  stroke-width="1"></path>
                            <path stroke="#000000"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                  d="M2.51199 5.5H21.496"
                                  stroke-width="1"></path>
                            <path stroke="#000000"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                  d="M10.5 11.5H0.510986"
                                  stroke-width="1"></path>
                            <path stroke="#000000"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                  d="M11.378 23.484c-2.15855 -0.1195 -4.23972 -0.845 -6.00477 -2.0933 -1.76504 -1.2482 -3.14249 -2.9688 -3.97432 -4.9642 -0.831829 -1.9954 -1.08436 -4.1849 -0.728622 -6.3173C1.02603 7.97684 1.97562 5.98791 3.41016 4.37058 4.84469 2.75325 6.70605 1.57304 8.78073 0.965312 10.8554 0.357587 13.0594 0.346967 15.1398 0.93467c2.0805 0.5877 3.9531 1.74993 5.4032 3.35335C21.993 5.89145 22.9617 7.87114 23.338 10"
                                  stroke-width="1"></path>
                            <path stroke="#000000"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                  d="M11.269 0.526001C5.26899 7.026 5.37799 15.484 11.378 23.484"
                                  stroke-width="1"></path>
                            <path stroke="#000000"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                  d="M12.73 0.526001C14.9709 2.85853 16.4587 5.81104 17 9"
                                  stroke-width="1"></path>
                            <path stroke="#000000"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                  d="M17.5 23.5c3.3137 0 6 -2.6863 6 -6s-2.6863 -6 -6 -6 -6 2.6863 -6 6 2.6863 6 6 6Z"
                                  stroke-width="1"></path>
                            <path stroke="#000000"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                  d="M17.5 20.5V17c0 -0.1326 -0.0527 -0.2598 -0.1464 -0.3536 -0.0938 -0.0937 -0.221 -0.1464 -0.3536 -0.1464h-1"
                                  stroke-width="1"></path>
                            <path stroke="#000000"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                  d="M16 20.5h3"
                                  stroke-width="1"></path>
                            <path stroke="#000000"
                                  d="M16.75 14.5c-0.1381 0 -0.25 -0.1119 -0.25 -0.25s0.1119 -0.25 0.25 -0.25"
                                  stroke-width="1"></path>
                            <path stroke="#000000"
                                  d="M16.75 14.5c0.1381 0 0.25 -0.1119 0.25 -0.25s-0.1119 -0.25 -0.25 -0.25"
                                  stroke-width="1"></path>
                        </svg>
                        <h1 x-cloak
                            x-bind:class="!$store.sidebar.full && !show ?
                                'lg:hidden' : ''">
                            <a href="{{ route('static-web.about') }}"
                               class="text-decoration-none">About Us</a>
                        </h1>
                    </div>

                </div>
            </div>
            <div x-show="$store.sidebar.navOpen"
                 x-cloak
                 class="fixed top-0 right-0 h-full w-full z-10 lg:hidden"
                 x-bind:class="{
                     'backdrop-blur': $store.sidebar.navOpen,
                 }"
                 @click="$store.sidebar.navOpen = false"></div>
        </div>
    </nav>
    <script>
        document.addEventListener('alpine:init', () => {
            // Stores variable globally 
            Alpine.store('sidebar', {
                full: false,
                active: 'home',
                navOpen: false
            });
            // Creating component Dropdown
            Alpine.data('dropdown', () => ({
                open: false,
                toggle(tab) {
                    this.open = !this.open;
                    Alpine.store('sidebar').active = tab;
                },
                activeClass: 'bg-amber-800 text-gray-200',
                expandedClass: 'border-l border-gray-400 ml-4 pl-4',
                shrinkedClass: 'md:absolute top-0 left-20 md:shadow-md md:z-10 md:bg-gray-900 md:rounded-md md:p-4 border-l md:border-none border-gray-400 ml-4 pl-4 md:ml-0 w-28'
            }));
            // Creating component Sub Dropdown
            Alpine.data('sub_dropdown', () => ({
                sub_open: false,
                sub_toggle() {
                    this.sub_open = !this.sub_open;
                },
                sub_expandedClass: 'border-l border-gray-400 ml-4 pl-4',
                sub_shrinkedClass: 'md:absolute top-0 left-28 md:shadow-md md:z-10 md:bg-gray-900 md:rounded-md md:p-4 border-l md:border-none border-gray-400 ml-4 pl-4 md:ml-0 w-28'
            }));
            // Creating tooltip
            Alpine.data('tooltip', () => ({
                show: false,
                visibleClass: 'block md:absolute -top-7 md:border border-gray-800 left-5 md:text-md md:bg-gray-900 md:px-2 md:py-1 md:rounded-md'
            }))

        })
    </script>
