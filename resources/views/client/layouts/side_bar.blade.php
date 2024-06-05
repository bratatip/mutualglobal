<div
     class="side_bar fixed max-md:bottom-0 md:w-32 md:h-[97%] max-md:mt-[-50px] m-3 p-1 md:p-3 rounded-lg bg-blue-300 flex md:flex-col shadow-2xl text-white font-bold select-none z-1">
    <div class="hidden md:block">
        <a href="#"
           class="flex justify-center p-3 rounded-xl shadow-2xl">
            <img src="{{ asset('images/app/logo.png') }}"
                 alt="..."
                 width="50">
        </a>

        <hr class=" my-3 h-[5px] border-none bg-gradient-to-b from-white opacity-10">
    </div>
    <div class="md:grid md:gap-4 flex gap-4">
        <a href="{{ route('Client.dashboard') }}"
           class="flex flex-col text-center p-3 rounded-xl shadow-2xl bg-blue-300 max-md:h-max">
            <i class="fa-solid fa-house-user text-md md:text-4xl"></i>
            <p class="text-xs">Home</p>
        </a>

        <a href="{{ route('Client.policy') }}"
           class="flex flex-col text-center p-3 rounded-xl shadow-2xl bg-blue-300 max-md:h-max">
            <i class="fa-solid fa-file-export text-md md:text-4xl"></i>
            <p class="text-xs">Policy</p>
        </a>

        <a href="#"
           class="flex flex-col text-center p-3 rounded-xl shadow-2xl bg-blue-300 max-md:h-max">
            <i class="fa-solid fa-ellipsis text-md md:text-4xl"></i>
            <p class="text-xs">More</p>
        </a>
    </div>
    <div class="hidden md:block min:sm-ml-3">
        <hr class="hidden md:block my-3 h-[5px] border-none bg-gradient-to-t from-white opacity-10">
        <a href="#"
           class="flex flex-col text-center p-3 rounded-xl shadow-2xl bg-blue-300">
            <i class="fa-solid fa-headset md:text-4xl"></i>
            <p class="text-xs">Support</p>
        </a>

    </div>
</div>

<style>
    @media screen and (max-width: 767px) {
        .side_bar {
            width: -moz-available;
            width: -webkit-fill-available;
            justify-content: center;
        }
    }
</style>
