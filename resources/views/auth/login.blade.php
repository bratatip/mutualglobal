@extends('layouts.master')

@section('content')
    {{-- <div class="min-h-screen flex flex-col justify-center">
        @include('common.partials._message')
        <div>
            <h2 class="mt-6 text-center text-md font-sans font-extrabold text-white">
                Login
            </h2>
        </div>
        <div class="mt-1 sm:mx-auto sm:w-full sm:max-w-md">
            <div class="bg-white py-8 px-4 shadow-2xl sm:rounded-lg sm:px-10">
                <form class="space-y-6"
                      id="login-form"
                      action="{{ route('doLogin') }}"
                      method="POST">
                    @csrf
                    @method('post')

                    <div>
                        <x-forms.input-field type="email"
                                             class="h-8"
                                             name="email"
                                             label="Email"
                                             placeholder="Enter Registered Email Address"
                                             required />
                        @include('common.partials._error', ['name' => 'policy_name'])
                    </div>

                    <div>
                        <x-forms.input-field type="password"
                                             class="h-8"
                                             name="password"
                                             label="Password"
                                             placeholder="Enter Password"
                                             required />
                        @include('common.partials._error', ['name' => 'insured_name'])
                    </div>

                    <div class="mt-3 flex justify-center">
                        <div class="overlay">
                            <div class="atom-spinner hide">
                                <div class="spinner-inner">
                                    <div class="spinner-line"></div>
                                    <div class="spinner-line"></div>
                                    <div class="spinner-line"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input id="remember_me"
                                   name="remember_me"
                                   type="checkbox"
                                   value="1"
                                   class="border-solid border-red-300 text-red-500 focus:ring-0">
                            <label for="remember_me"
                                   class="ml-2 text-sm text-gray-900">
                                Remember me
                            </label>
                        </div>

                        <div class="text-sm">
                            <a href="#"
                               class="font-medium text-red-300 no-underline">
                                Forgot your password?
                            </a>
                        </div>
                    </div>

                    <div class="flex justify-center">
                        <button type="button"
                                class="px-6 py-2 mt-3 border border-solid border-[#CCCCCC] rounded-2xl bg-gray-500 text-xs text-white ml-2 font-bold"
                                id="login-button">
                            Sign in
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <div class="sm:mx-auto sm:w-full sm:max-w-md">
            <h2 class="mt-6 text-center text-sm font-extrabold text-white">
                Mutual Global Insurance Broking Pvt Ltd
            </h2>
        </div>
    </div> --}}

    <div class="min-h-screen flex flex-col justify-center">
        @include('common.partials._message')
        <div class="flex justify-center">
            <button id="login-tab"
                    class="py-2 px-4 bg-gray-300 text-gray-700 font-bold rounded-l-xl">Login</button>
            <button id="register-tab"
                    class="py-2 px-4 bg-gray-300 text-gray-700 font-bold rounded-r-xl">Register</button>
        </div>
        <div id="login-form-container"
             class="mt-6 sm:mx-auto sm:w-full sm:max-w-md">
            <!-- Login Form -->
            <div class="bg-white py-8 px-4 shadow-2xl sm:rounded-lg sm:px-10">
                <form class="space-y-6"
                      id="login-form"
                      action="{{ route('doLogin') }}"
                      method="POST">
                    @csrf
                    <div>
                        <x-forms.input-field type="email"
                                             class="h-8"
                                             name="email"
                                             label="Email"
                                             placeholder="Enter Registered Email Address"
                                             required />
                        @include('common.partials._error', ['name' => 'policy_name'])
                    </div>

                    <div>
                        <x-forms.input-field type="password"
                                             class="h-8"
                                             name="password"
                                             label="Password"
                                             placeholder="Enter Password"
                                             required />
                        @include('common.partials._error', ['name' => 'insured_name'])
                    </div>

                    <div class="mt-3 flex justify-center">
                        <div class="overlay">
                            <div class="atom-spinner hide">
                                <div class="spinner-inner">
                                    <div class="spinner-line"></div>
                                    <div class="spinner-line"></div>
                                    <div class="spinner-line"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input id="remember_me"
                                   name="remember_me"
                                   type="checkbox"
                                   value="1"
                                   class="border-solid border-red-300 text-red-500 focus:ring-0">
                            <label for="remember_me"
                                   class="ml-2 text-sm text-gray-900">
                                Remember me
                            </label>
                        </div>

                        <div class="text-sm">
                            <a href="#"
                               class="font-medium text-red-300 no-underline">
                                Forgot your password?
                            </a>
                        </div>
                    </div>

                    <div class="flex justify-center">
                        <button type="button"
                                class="px-6 py-2 mt-3 border border-solid border-[#CCCCCC] rounded-2xl bg-gray-500 text-xs text-white ml-2 font-bold"
                                id="login-button">
                            Sign in
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div id="register-form-container"
             class="hidden mt-6 sm:mx-auto sm:w-full sm:max-w-md">
            <!-- Register Form (initially hidden) -->
            <div class="bg-white py-8 px-4 shadow-2xl sm:rounded-lg sm:px-10">
                <form class="space-y-6"
                      id="register-form"
                      action="#"
                      method="POST">
                    @csrf
                    <div>
                        <x-forms.input-field type="text"
                                             class="h-8"
                                             name="name"
                                             label="Name"
                                             placeholder="Enter Full Name"
                                             required />
                        @include('common.partials._error', ['name' => 'name'])
                    </div>
                    <div>
                        <x-forms.input-field type="email"
                                             class="h-8"
                                             name="email"
                                             label="Email"
                                             placeholder="Enter Email Address"
                                             required />
                        @include('common.partials._error', ['name' => 'email'])
                    </div>

                    <div>
                        <x-forms.input-field type="text"
                                             class="h-8"
                                             name="phone"
                                             label="Mobile Number"
                                             placeholder="Enter Mobile Number"
                                             required />
                        @include('common.partials._error', ['name' => 'phone'])
                    </div>

                    <div class="mt-3 flex justify-center">
                        <div class="overlay">
                            <div class="atom-spinner hide">
                                <div class="spinner-inner">
                                    <div class="spinner-line"></div>
                                    <div class="spinner-line"></div>
                                    <div class="spinner-line"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-center">
                        <button type="button"
                                class="px-6 py-2 mt-3 border border-solid border-[#CCCCCC] rounded-2xl bg-gray-500 text-xs text-white ml-2 font-bold"
                                id="login-button">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
            <h2 class="mt-6 text-center text-sm font-extrabold text-white">Mutual Global Insurance Broking Pvt Ltd</h2>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const loginTab = document.getElementById('login-tab');
            const registerTab = document.getElementById('register-tab');
            const loginFormContainer = document.getElementById('login-form-container');
            const registerFormContainer = document.getElementById('register-form-container');

            loginTab.addEventListener('click', function() {
                loginTab.classList.add('bg-gray-300', 'text-gray-700');
                registerTab.classList.remove('bg-gray-300', 'text-gray-700');
                loginFormContainer.classList.remove('hidden');
                registerFormContainer.classList.add('hidden');
            });

            registerTab.addEventListener('click', function() {
                registerTab.classList.add('bg-gray-300', 'text-gray-700');
                loginTab.classList.remove('bg-gray-300', 'text-gray-700');
                registerFormContainer.classList.remove('hidden');
                loginFormContainer.classList.add('hidden');
            });
        });
    </script>


    {{-- <script src="{{ asset('js/login.js') }}"></script> --}}

    <script>
        // public/js/login.js

        $(document).ready(function() {
            $('#login-button').click(function() {
                // Get form data
                var formData = $('#login-form').serialize();

                $.ajax({
                    url: "{{ route('doLogin') }}",
                    type: "POST",
                    data: formData,
                    dataType: "json",
                    beforeSend: function() {
                        $('.atom-spinner').addClass('show')
                        $('.atom-spinner').removeClass('hide')
                    },
                    success: function(response) {
                        if (response.success) {
                            // Redirect to the appropriate page
                            window.location.href = response.routeName;
                        } else {
                            // Display error message using Toastr
                            toastr.error(response.message, 'Error');
                        }
                    },
                    error: function(xhr) {
                        // Handle AJAX error
                        toastr.error('An error occurred. Please try again later.', 'Error');
                    },
                    complete: function() {
                        $('.atom-spinner').addClass('hide')
                        $('.atom-spinner').removeClass('show')
                    },
                });
            });
        });
    </script>
@endsection
