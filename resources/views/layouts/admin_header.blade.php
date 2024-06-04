<header class="bg-black fixed top-0 left-0 w-full h-15 z-50">
    <nav class="bg-transparent shadow-lg">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex justify-between items-center">
                <div>
                    <!-- Website Logo -->
                    <a href="/">
                        <img class="w-46 h-[40px] p-3 cursor-pointer"
                            src="/assets/img/logo_mg1.png"
                            alt="..." />
                    </a>
                </div>

                <div class="flex items-center gap-6 ml-auto hidden md:flex items-center space-x-1">
                    <x-forms.button type="link"
                        text="Import Uhids"
                        class="py-4 px-2 text-gray-500 font-semibold hover:text-[#FFC451] transition duration-300 no-underline "
                        href="{{ route('Admin.import-uhid-form') }}" />

                    <x-forms.button type="link"
                        text="Delete Uhids"
                        class="py-4 px-2 text-gray-500 font-semibold hover:text-[#FFC451] transition duration-300 no-underline"
                        href="{{ route('Admin.delete-uhid-form') }}" />

                    <div class="flex mr-2 text-white text-lg items-center transition duration-300 no-underline">
                        {{ auth()->user()->name }}
                    </div>
                    <a href="{{ route('logout') }}"
                        class="bg-transparent text-white rounded-full transition duration-300"><img
                            src="{{ asset('images/logout.png') }}"
                            width="15px"
                            height="15px"
                            alt="...">
                    </a>
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden flex items-center">
                    <button class="outline-none border-0 bg-transparent mobile-menu-button">
                        <svg class="cursor-pointer w-6 h-6 text-white hover:text-[#FFC451] "
                            x-show="!showMenu"
                            fill="none"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <!-- mobile menu -->
        <div class="hidden mobile-menu">
            <ul class="">
                <li class="active"><a href="{{ route('Admin.import-uhid-form') }}"
                        class="block text-md px-2 py-4 text-white bg-[#FFC451] font-semibold no-underline">Import
                        Uhids</a></li>
                <li><a href="{{ route('Admin.delete-uhid-form') }}"
                        class="block text-md px-2 py-4 text-white hover:bg-[#FFC451] transition duration-300 no-underline">Delete
                        Uhids</a></li>
                <li><a href="{{ route('logout') }}"
                        class="block text-md px-2 py-4 text-white hover:bg-[#FFC451] transition duration-300 no-underline">Log
                        Out</a></li>
            </ul>
        </div>
        <script>
            const btn = document.querySelector("button.mobile-menu-button");
            const menu = document.querySelector(".mobile-menu");

            btn.addEventListener("click", () => {
                menu.classList.toggle("hidden");
            });
        </script>
    </nav>
</header>
