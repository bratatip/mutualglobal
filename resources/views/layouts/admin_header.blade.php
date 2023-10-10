<header class="bg-black fixed top-0 left-0 w-full h-15 z-50">
    <nav class="flex justify-between items-center w-[92%] mx-auto relative">
        <div>
            <a href="/">
                <img class="w-46 h-[40px] p-3 cursor-pointer"
                    src="/assets/img/logo_mg1.png"
                    alt="...">
            </a>
        </div>


        <div class="flex items-center gap-6 ml-auto"> <!-- Use ml-auto to push elements to the right -->
            <x-forms.button type="link"
                text="Import Uhids"
                classes=""
                href="{{ route('admin.import-uhid-form') }}" />

            <x-forms.button type="link"
                text="Delete Uhids"
                classes=""
                href="{{ route('admin.delete-uhid-form') }}" />

            <div class="flex mr-2 text-white text-lg items-center">
                {{ auth()->user()->name }}
            </div>
            <a href="{{ route('logOut') }}"
                class="bg-transparent text-white rounded-full"><img src="{{ asset('images/logout.png') }}"
                    width="15px"
                    height="15px"
                    alt="...">
            </a>
        </div>
    </nav>
</header>
