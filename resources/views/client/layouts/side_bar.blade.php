<div class="fixed w-32 h-[95%] m-3 p-3 rounded-lg bg-blue-300 flex flex-col shadow-2xl text-white font-bold select-none">
    <div>
        <a href="#"
           class="flex justify-center p-3 rounded-xl shadow-2xl">
            <img src="{{ asset('images/app/logo.png') }}"
                 alt="..."
                 width="50">
        </a>

        <hr class=" my-3 h-[5px] border-none bg-gradient-to-b from-white opacity-10">
    </div>
    <div class="grid gap-4">
        <a href="{{ route('Client.dashboard') }}"
           class="flex flex-col text-center p-3 rounded-xl shadow-2xl bg-blue-300">
            <i class="fa-solid fa-house-user text-4xl"></i>
            <p class="text-xs">Home</p>
        </a>

        <a href="{{ route('Client.policy') }}"
           class="flex flex-col text-center p-3 rounded-xl shadow-2xl bg-blue-300">
            <i class="fa-solid fa-file-export text-4xl"></i>
            <p class="text-xs">Policy</p>
        </a>

        <a href="#"
           class="flex flex-col text-center p-3 rounded-xl shadow-2xl bg-blue-300">
            <i class="fa-solid fa-ellipsis text-4xl"></i>
            <p class="text-xs">View More</p>
        </a>
    </div>
    <div>
        <hr class=" my-3 h-[5px] border-none bg-gradient-to-t from-white opacity-10">
        <a href="#"
           class="flex flex-col text-center p-3 rounded-xl shadow-2xl bg-blue-300">
            <i class="fa-solid fa-headset text-4xl"></i>
            <p class="text-xs">Support</p>
        </a>

    </div>
</div>
