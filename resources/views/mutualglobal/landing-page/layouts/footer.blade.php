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

    <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 p-16 md:px-16 md:py-8">
        <!-- Address -->
        <div class="flex flex-col gap-2 mr-5 z-10">
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
                    <i class="fab fa-twitter"></i>
                </button>
                <button class="bg-white text-blue-600 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                        type="button">
                    <i class="fab fa-facebook-square"></i>
                </button>
                <button class="bg-white text-pink-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                        type="button">
                    <i class="fab fa-dribbble"></i>
                </button>
                <button class="bg-white text-gray-800 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                        type="button">
                    <i class="fab fa-github"></i>
                </button>
            </div>
        </div>

        <!-- Useful Links -->
        <div class="flex flex-col gap-5 z-10">
            <ul>
                <li class="text-[16px] list-none font-semibold text-stone-300 py-2 uppercase">
                    Useful Links
                </li>

                <li class="my-4 list-none text-sm">
                    <i class="fa-solid fa-chevron-right fa-fade-slow fa-sm me-1"
                       style="color: #ffd43b"></i>
                    <a href="{{ route('static-web.index')}}"
                       class="hover:text-amber-400">Home</a>
                </li>
                <li class="my-4 list-none text-sm">
                    <i class="fa-solid fa-chevron-right fa-fade-slow fa-sm me-1"
                       style="color: #ffd43b"></i>

                    <a href="{{ route('static-web.about') }}"
                       class="hover:text-amber-400">About Us</a>

                </li>

                <li class="my-4 list-none text-sm">
                    <i class="fa-solid fa-chevron-right fa-fade-slow fa-sm me-1"
                       style="color: #ffd43b"></i>
                    <a href="#"
                       onclick="return false;"
                       class="hover:text-amber-400">Services</a>
                </li>

                <li class="my-4 list-none text-sm">
                    <i class="fa-solid fa-chevron-right fa-fade-slow fa-sm me-1"
                       style="color: #ffd43b"></i>
                    <a href="#"
                       onclick="return false;"
                       class="hover:text-amber-400">Rate Us</a>
                </li>
            </ul>
        </div>

        <!-- Our Services -->
        <div class="flex flex-col gap-5 z-10">
            <ul>
                <li class="text-[16px] list-none font-semibold text-stone-300 py-2 uppercase">
                    Our Services

                </li>

                <li class="my-4 list-none text-sm">
                    <i class="fa-solid fa-chevron-right fa-fade-slow fa-sm me-1"
                       style="color: #ffd43b"></i>
                    <a href="#"
                       onclick="return false;"
                       class="hover:text-amber-400">General Insurance Placement</a>
                </li>

                <li class="my-4 list-none text-sm">
                    <i class="fa-solid fa-chevron-right fa-fade-slow fa-sm me-1"
                       style="color: #ffd43b"></i>
                    <a href="#"
                       onclick="return false;"
                       class="hover:text-amber-400">Claims Management</a>
                </li>

                <li class="my-4 list-none text-sm">
                    <i class="fa-solid fa-chevron-right fa-fade-slow fa-sm me-1"
                       style="color: #ffd43b"></i>
                    <a href="#"
                       onclick="return false;"
                       class="hover:text-amber-400">Risk Analysis and Risk Reportinge</a>
                </li>
            </ul>
        </div>

        <!-- Other Links -->

        <div class="flex flex-col gap-5 z-10">
            <ul>
                <li class="text-[16px] list-none font-semibold text-stone-300 py-2 uppercase">
                    Other Links

                </li>

                <li class="my-4 list-none text-sm">
                    <i class="fa-solid fa-chevron-right fa-fade-slow fa-sm me-1"
                       style="color: #ffd43b"></i>
                    <a href="#"
                       onclick="return false;"
                       class="hover:text-amber-400">Why Mutual Global</a>



                </li>

                <li class="my-4 list-none text-sm">
                    <i class="fa-solid fa-chevron-right fa-fade-slow fa-sm me-1"
                       style="color: #ffd43b"></i>
                    <a href="#"
                       onclick="return false;"
                       class="hover:text-amber-400">Terms</a>
                </li>

                <li class="my-4 list-none text-sm">
                    <i class="fa-solid fa-chevron-right fa-fade-slow fa-sm me-1"
                       style="color: #ffd43b"></i>
                    <a href="#"
                       onclick="return false;"
                       class="hover:text-amber-400">Privacy Policy</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="flex justify-center align-middle text-[12px] text-white pb-4">
        <p> © 2024 Copyright MutualGlobal.com. All Rights Reserved</p>
    </div>

    <!-- SVG Back grounds -->
    <div class="absolute top-0 left-0 opacity-5 w-[300px] h-[300px] md:w-[350px] md:h-[350px] ">
        <svg viewBox="0 0 200 200"
             xmlns="http://www.w3.org/2000/svg">
            <path fill="#FEEDCF"
                  d="M43.4,-9.2C51.9,12.2,51.6,41.4,37,52.3C22.4,63.2,-6.4,55.9,-25.7,40.7C-45,25.4,-54.7,2.2,-48.8,-15.5C-42.9,-33.3,-21.5,-45.7,-2,-45C17.4,-44.4,34.8,-30.7,43.4,-9.2Z"
                  transform="translate(100 100)" />
        </svg>
    </div>
    <div class="absolute top-0 md:top-10 left-0 opacity-10 w-[300px] h-[300px] md:w-[350px] md:h-[350px] ">
        <svg viewBox="0 0 200 200"
             xmlns="http://www.w3.org/2000/svg">
            <path fill="#FDB73E"
                  d="M37.1,-28.1C53.1,-21,74.8,-10.5,78.5,3.7C82.2,17.9,68,35.8,51.9,52.3C35.8,68.8,17.9,83.7,-1.7,85.5C-21.4,87.2,-42.7,75.6,-50.7,59.2C-58.7,42.7,-53.4,21.4,-54.4,-1C-55.3,-23.3,-62.6,-46.6,-54.6,-53.7C-46.6,-60.7,-23.3,-51.5,-6.4,-45.1C10.5,-38.7,21,-35.1,37.1,-28.1Z"
                  transform="translate(100 100)" />
        </svg>
    </div>

    <div class="absolute md:top-10 bottom-0 right-0 opacity-5 w-[300px] h-[300px] md:w-[350px] md:h-[350px] ">
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
