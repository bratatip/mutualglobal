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
             class="hidden flex-col gap-4 absolute z-40 right-0 left-0 top-16 text-center text-md px-6 xl:pr-20 items-center lg:flex lg:flex-row lg:static lg:shadow-none lg:justify-between lg:w-full">
            <a role="menuitem"
               class="py-1 px-2 focus:outline-none focus-visible:ring-4 ring-neutral-900 rounded-sm ring-offset-4 ring-offset-amber-400 hover:text-amber-400 transition-colors lg:ms-auto"
               href="/">Home</a>
            <a role="menuitem"
               class="py-1 px-2 focus:outline-none focus-visible:ring-4 ring-neutral-900 rounded-sm ring-offset-4 ring-offset-amber-400 hover:text-amber-400 transition-colors"
               href="#">
                Products
            </a>

            <div x-data="{ show: false, menu: false }">
                {{-- <button class="text-sm text-neutral px-4 py-2 border-0 rounded-md outline-none"
                        x-on:click="show = ! show">Open Dropdown</button> --}}

                <button class="py-1 px-2 focus:outline-none focus-visible:ring-4 ring-neutral-900 rounded-sm ring-offset-4 ring-offset-amber-400 hover:text-amber-400 transition-colors"
                        x-on:click="show = ! show">Services</button>
                <div class="relative">
                    <div class="bg-[#e4e6e9] rounded-md p-3 min-w-max top-1 w-full absolute z-10"
                         x-show="show"
                         x-cloak
                         @click.away="show = false"
                         x-transition:enter="transition ease-out duration-100"
                         x-transition:enter-start="transform opacity-0 scale-95">
                        <ul
                            class="[&>li]:text-black [&>li]:text-sm [&>li]:cursor-pointer [&>li]:px-2 [&>li]:py-1 [&>li]:rounded-md [&>li]:transition-all hover:[&>li]:bg-amber-600 active:[&>li]:bg-amber-700 active:[&>li]:scale-[0.99]">
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
               class="py-1 px-2 focus:outline-none focus-visible:ring-4 ring-neutral-900 rounded-sm ring-offset-4 ring-offset-amber-400 hover:text-amber-400 transition-colors"
               href="#">
                POS
            </a>

            <a role="menuitem"
               class="py-1 px-2 focus:outline-none focus-visible:ring-4 ring-neutral-900 rounded-sm ring-offset-4 ring-offset-amber-400 hover:text-amber-400 transition-colors"
               href="#">
                MGIB Prime
            </a>
        </div>
    </div>
</nav>
