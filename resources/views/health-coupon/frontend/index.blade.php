@extends('layouts.master')

@section('content')
    <div class="min-h-screen flex flex-col justify-center">
        {{-- @include('common.partials._message') --}}
        <div class="mt-1 sm:mx-auto sm:w-full sm:max-w-md">
            <div class="border-solid border border-indigo-600 bg-opacity-50 py-8 px-4 shadow-lg sm:rounded-lg sm:px-10">
                <div class="flex justify-center">
                    <img src="{{ asset('assets/img/globe_logo.png') }}"
                         alt="LOGO"
                         width=200
                         height=50>

                </div>

                <form class="space-y-1"
                      action="{{ route('getCoupon') }}"
                      method="POST">
                    @csrf
                    @method('post')

                    <div>
                        <x-forms.input-field type="text"
                                             class="h-[15px]"
                                             name="name"
                                             label="Name"
                                             id="userName"
                                             placeholder="Enter Your Name"
                                             :value="old('name')"
                                             required />
                        @include('common.partials._error', ['name' => 'name'])
                    </div>

                    <div>
                        <x-forms.input-field type="email"
                                             class="h-[15px]"
                                             name="email"
                                             label="email"
                                             placeholder="Enter Email"
                                             required />
                        @include('common.partials._error', ['name' => 'email'])
                    </div>

                    <div>
                        <x-forms.input-field type="text"
                                             class="h-[15px]"
                                             name="contact_no"
                                             label="Phone Number"
                                             pattern="[0-9]{10}"
                                             placeholder="Enter Phone"
                                             title="10 digit Mob No"
                                             required />
                        @include('common.partials._error', ['name' => 'contact_no'])
                    </div>

                    <div>
                        <x-forms.input-field type="text"
                                             class="h-[15px]"
                                             name="locality"
                                             label="Locality"
                                             pattern="^[A-Za-z0-9,() ]{10,50}$"
                                             placeholder="Enter Locality"
                                             required />
                        @include('common.partials._error', ['name' => 'locality'])

                    </div>

                    <div>
                        <x-forms.select class="js-select2"
                                        label="City"
                                        name="city"
                                        :options="[
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
                                        ]" />
                        @include('common.partials._error', ['name' => 'area'])
                    </div>

                    <div>
                        <x-forms.select class="js-select2"
                                        label="Hospitals"
                                        name="hospital"
                                        :options="[
                                            'ekana_hospital_begur' => 'EKANA HOSPITAL BEGUR',
                                        ]" />
                        @include('common.partials._error', ['name' => 'hospital'])
                    </div>

                    <div class="flex flex-row items-center mt-2">
                        <div class="w-full flex items-center">
                            <x-forms.checkbox id=""
                                              name="terms&conditions" />



                            <span class="mt-2 ml-2 text-[8px] text-[#0F628B]">
                                I agree and authorise MUTUALGLOBAL to share data with connected hospitals.<a
                                   href='/privacy_policy'
                                   class="no-underline italic"> For More details visit </a>
                            </span>
                        </div>
                    </div>
                    @include('common.partials._error', ['name' => 'terms&conditions'])

                    <div class="flex justify-center">
                        <button type="submit"
                                id="submitBtn"
                                class="px-6  py-2 mt-3 border border-solid border-[#CCCCCC] rounded-2xl bg-gray-500 text-xs text-white ml-2 font-bold  cursor-not-allowed"
                                disabled>
                            Generate Coupon
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <script>
        // Check if there's an error message in the session
        let errorMessage = "{{ session('error') }}";

        // If there's an error message, display it using Toastr
        if (errorMessage) {
            toastr.error(errorMessage);
        }
    </script>


    <script>
        $(document).ready(function() {
            $(".js-select2").select2({
                closeOnSelect: true,
                theme: "classic",

            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const submitButton = document.getElementById("submitBtn");
            const inputs = document.querySelectorAll('input, select');


            // Function to check if all inputs are filled
            function checkInputs() {
                let allFilled = true;
                inputs.forEach(input => {
                    if (input.type === 'checkbox') {
                        if (!input.checked) {
                            allFilled = false;
                        }
                    } else {
                        if (input.value.trim() === '') {
                            allFilled = false;
                        }
                    }
                });

                if (allFilled) {
                    submitButton.disabled = false;
                    submitButton.classList.remove("cursor-not-allowed");
                    submitButton.classList.add("cursor-pointer");
                } else {
                    submitButton.disabled = true;
                    submitButton.classList.remove("cursor-pointer");
                    submitButton.classList.add("cursor-not-allowed");
                }
            }

            // Listen for changes in any input field or select box
            inputs.forEach(input => {
                input.addEventListener('input', checkInputs);
            });
        });
    </script>
@endsection
