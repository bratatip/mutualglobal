@extends('client.layouts.app')

@section('content')
    <x-common.card>
        @slot('card_content')
            <div class="modal fixed w-full h-full top-0 left-0 flex items-center justify-center"
                 id="modal_logout"
                 style="z-index: 9999 !important">
                <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>

                <div
                     class="bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto modal_604px border_bg" style="margin-inline: 10px;">

                    <!-- Modal content -->
                    <div class="modal-content py-4 text-left px-6">

                        <div class="flex justify-end">
                            <p
                               class="modal-close cursor-pointer px-3 py-1 bg-[#F5F5F5] hover:text-red-500 rounded-full shadow-xl">
                                <a href="{{ route('Client.dashboard') }}">x</a>
                            </p>
                        </div>

                        <img src="{{ asset('images/app/support.jpg') }}"
                             alt="..."
                             class="relative">
                        <div class="mt-[50px] max-md:mt-[10px]"></div>

                        <div class="mt-[50px] max-md:mt-[10px]"></div>

                    </div>

                </div>
            </div>
        @endslot
    </x-common.card>
@endsection
<style>
    .modal-container{
        max-width: 750px !important;
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
