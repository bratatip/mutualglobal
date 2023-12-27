@extends('layouts.master')

@section('content')
    <div class="min-h-screen flex flex-col justify-center"
         style="background-color:dimgray;">
        @include('common.partials._message')

        <div class="mt-1 sm:mx-auto sm:w-full sm:max-w-md">
            <div class="bg-white bg-opacity-50 py-8 px-4 shadow sm:rounded-lg sm:px-10">
                <div class="flex justify-center">
                    <img src="{{ asset('assets/img/globe_logo.png') }}"
                         alt="LOGO"
                         width=200
                         height=50>

                </div>

                <form class="space-y-6"
                      action="#"
                      method="POST">
                    @csrf
                    @method('post')

                    <div>
                        <x-forms.select class="js-select2"
                                        label="City"
                                        name="city"
                                        :options="[
                                            'bhubaneswar' => 'Bhubaneswar',
                                            'bengaluru' => 'Bengaluru',
                                        ]" />
                        @include('common.partials._error', ['name' => 'city'])
                    </div>

                    <div>
                        <x-forms.select class="js-select2"
                                        label="Area"
                                        name="area"
                                        :options="[
                                            'begur' => 'Begur',
                                            'kormangla' => 'Kormangla',
                                        ]" />
                        @include('common.partials._error', ['name' => 'area'])
                    </div>

                    <div>
                        <x-forms.select class="js-select2"
                                        label="Hospitals"
                                        name="hospital"
                                        :options="[
                                            'begur_govt_hospitals' => 'Begur Govt. Hospitals',
                                        ]" />
                        @include('common.partials._error', ['name' => 'hospital'])
                    </div>



                    <div class="flex justify-center">
                        <button type="submit"
                                class="px-6 py-2 mt-3 border border-solid border-[#CCCCCC] rounded-2xl bg-gray-500 text-xs text-white ml-2 font-bold">
                            Generate Coupon
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $(".js-select2").select2({
                closeOnSelect: true,
                theme: "classic",

            });
        });
    </script>
@endsection
