<div>

    <div class="flex justify-between  p-5 max-md:items-center mob_relative">
        {{-- <button class="hamburger_icon lg:hidden"
                data-toggle="collapse"
                data-target="#mysidemenu"
                class="navbar-brand"
                style="font-size:30;cursor:pointer;padding:10px; padding-top:3px; width:20px; color: #0F628B;"
                onclick="openNav()"></button> --}}



        @if (isset($button_text))
            <a @if ($route) href="{{ route($route) }}" @else href="#" @endif
               class=" bg-[#E25E14] border-[#E25E14] text-white font-bold py-2 px-4 rounded-full shadow-md w-[177px] h-[31px] flex justify-center flex-row-reverse items-center text-xs  max-md:mt-3 max-md:mb-3 max-sm:w-full create_btn">{{ $button_text }}
                <img class="mr-2 my-0"
                     src="{{ config('app.url') }}/images/icons/plus.svg">

                @if (isset($is_create) && $is_create)
                    <img class="mr-2 my-0"
                         src="{{ config('app.url') }}/images/icons/plus.svg">
                @endif
            </a>
        @else
            <p class=" py-2 px-4 rounded-full w-[177px] h-0 justify-center items-center  text-sm"></p>
        @endif


        <div class="mb-2 text-[#0F628B] text-xs flex justify-end md:w-[100%] max-md:w-full">
            <div class="flex items-center mr-2 gap-4">
                <p class="hidden md:block">
                    <small>Member since {{ Auth::user()->created_at->format('d M. Y') }}</small>
                </p>
                <p class="font-bold ">
                    {{ Auth::user()->name }}
                </p>
            </div>
            <div class="text-center md-w[15%]">
                <button
                        class="logout_button block px-6  py-2 border border-solid rounded-2xl bg-[#F5F5F5] text-xs text-[#0F628B] hover:bg-gray-200 ml-2 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white font-bold shadow-xl ">
                    Logout
                </button>
            </div>

        </div>


    </div>
</div>





<div class="modal z-50 opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center"
     id="modal_logout">
    <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>

    <div
         class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto modal_604px border_bg mob_350px">

        <!-- Modal content -->
        <div class="modal-content py-4 text-left px-6">

            <div class="flex justify-end">
                <p class="modal-close cursor-pointer px-3 py-1 bg-[#F5F5F5] hover:text-red-500 rounded-full shadow-xl">x
                </p>
            </div>

            <div class="mt-[50px] max-md:mt-[10px]"></div>
            <div class="flex justify-center items-center pb-3">
                <p class="text-lg font-bold text-[#0F628B] text-center max-md:text-sm">Are you sure you want to logout?
                </p>
                <div class="modal-close cursor-pointer z-50">
                    <svg class="fill-current text-black"
                         xmlns="http://www.w3.org/2000/svg"
                         width="18"
                         height="18"
                         viewBox="0 0 18 18">
                        <path d="M1.5 1.5l15 15M16.5 1.5l-15 15"></path>
                    </svg>
                </div>
            </div>
            <div class="mt-[50px] max-md:mt-[10px]"></div>
            <div class="flex justify-center pt-2">

                <a href="#"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                   class="m-1 
                    rounded-full px-4 py-1
                    bg-[#F5F5F5]
                    text-[#0F628B]
                    hover:bg-gray-200
                    hover:text-red-500
                    border border-solid-gray-500
                text-sm
                font-bold
                w-[120px] h-[34px] flex justify-center items-center shadow-xl">
                    Logout
                </a>
                <form id="logout-form"
                      action="{{ route($logoutRouteName) }}"
                      method="POST"
                      style="display: none;">
                    @csrf
                </form>

            </div>
        </div>
    </div>
</div>


<script>
    $('.logout_button').click(function(e) {
        e.preventDefault();
        $('#modal_logout').addClass('opacity-100 pointer-events-auto');
        $('div.dt-container').css('z-index', -1);
        $('.select2.select2-container').css('z-index', -1);
        $('.side_bar').css('z-index', -1);
        $('#success-notification').css('z-index', -1);
        $('#error-notification').css('z-index', -1);
    });


    $('.modal-close, .modal-overlay').click(function() {
        $('.modal').removeClass('opacity-100 pointer-events-auto');
        $('div.dt-container').css('z-index', '');
        $('.select2.select2-container').css('z-index', '');
        $('.side_bar').css('z-index', '');
        $('#success-notification').css('z-index', '');
        $('#error-notification').css('z-index', '');

    });
</script>
<style>
    .modal-container{
        max-width: 450px !important;
        /* max-height: 300px !important; */
    }

    .modal_604px {
        width: 100%;
        max-width: 604px;
        margin: 0 auto;

    }

    /* .create_btn {
        position: relative;
        top: 46px;
        z-index: 1;
    } */

    .border_bg {
        border: 0.2px solid transparent;
        box-shadow: 0px 2px 4px rgb(0 0 0 / 25%);
        border-radius: 15px;
    }

    @media (max-width:768px) {
        .mob_350px {
            width: 100%;
            max-width: 350px;
            margin: 0 auto;
        }

    }

    @media (max-width:767px) {
        .mob_relative {
            position: relative;

        }

        .create_btn {
            position: relative;
            top: 47px;
        }

        div.dataTables_wrapper {
            position: relative;
            /* top: 35px; */
        }

        .hamburger_icon,
        .hamburger_icon:after,
        .hamburger_icon:before {
            background: #0F628B;

        }

    }

    @media (max-width:640px) {
        .create_btn {
            position: absolute;
            top: 57px;
            width: 100%;

        }
    }
</style>
