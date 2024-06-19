@extends('layouts.master')

@section('content')
    <div class="modal z-50 opacity-100 fixed w-full h-full top-0 left-0 flex items-center justify-center"
         id="modal_logout">
        <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-15"></div>

        <div
             class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto modal_604px border_bg mob_350px block">

            <!-- Modal content -->
            <div class="modal-content py-4 text-left px-6">
                <div class="flex flex-col justify-center">
                    <div class="flex justify-center align-middle mb-5">
                        <img src="{{ asset('images/app/mail_logo.png') }}"
                             alt="..."
                             width="300"
                             class="rounded-sm shadow-sm">
                    </div>
                    {{-- <div class="sm:mx-auto sm:w-full sm:max-w-md mb-3">
                        <h2 class="mt-6 text-center text-sm font-extrabold text-indigo-600">Mutual Global Insurance Broking
                            Pvt
                            Ltd</h2>
                    </div> --}}

                    <div class="flex justify-center text-xs">

                        <button id="login-tab"
                                class="block px-6  py-2 border border-solid rounded-s-md bg-[#F5F5F5] text-xs text-[#0F628B] hover:bg-gray-200 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white font-bold shadow-xl ">
                            Login
                        </button>

                        <button id="register-tab"
                                class="block px-6  py-2 border border-solid rounded-e-md bg-[#F5F5F5] text-xs text-[#0F628B] hover:bg-gray-200 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white font-bold shadow-xl ">
                            Register
                        </button>
                    </div>

                    <div class="m-4">
                        @include('common.partials._message')
                    </div>
                    
                    <div id="login-form-container"
                         class="mt-6 sm:mx-auto sm:w-full sm:max-w-md">
                        <!-- Login Form -->

                        <form class="space-y-6"
                              id="login-form"
                              action="{{ route('doLogin') }}"
                              method="POST">
                            @csrf
                            <div class="flex flex-col gap-3">
                                <label for="email"
                                       class="text-indigo-500 font-bold text-xs">Email <span
                                          class="text-red-500 font-bold">*</span></label>
                                <input type="text"
                                       id="email"
                                       name="email"
                                       placeholder="Enter Registered Email Address"
                                       class="text-xs text-gray-500 font-bold border border-indigo-500 outline-none focus:border-none rounded-sm shadow-xl">

                                @include('common.partials._error', ['name' => 'email'])
                            </div>

                            <div class="flex flex-col gap-3 relative">
                                <label for="password"
                                       class="text-indigo-500 font-bold text-xs">Password <span
                                          class="text-red-500 font-bold">*</span></label>
                                <input type="password"
                                       id="password"
                                       name="password"
                                       placeholder="Enter Password"
                                       class="text-xs text-gray-500 font-bold border border-indigo-500 outline-none focus:border-none rounded-sm shadow-xl">
                                <span class="absolute inset-y-0 right-0 flex items-center pr-3">
                                    <i id="toggle-password"
                                       class="fa-solid fa-eye text-indigo-500 cursor-pointer mt-8"></i>
                                    <i id="toggle-password-hidden"
                                       class="hidden fa-solid fa-eye-slash text-indigo-500 cursor-pointer mt-8"></i>
                                </span>

                                @include('common.partials._error', ['name' => 'password'])
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
                                           class="border-solid border-indigo-500 text-indigo-500 focus:ring-0">
                                    <label for="remember_me"
                                           class="ml-2 text-sm text-gray-900">
                                        Remember me
                                    </label>
                                </div>

                                <div class="text-sm">
                                    <a href="#"
                                       class="font-medium text-indigo-500 no-underline">
                                        Forgot your password?
                                    </a>
                                </div>
                            </div>

                            <div class="flex justify-center">
                                <button type="button"
                                        id="login-button"
                                        class="block px-6  py-2 border border-solid rounded-2xl bg-indigo-100 text-xs text-[#0F628B] hover:bg-gray-200 ml-2 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white font-bold shadow-xl">
                                    Sign in
                                </button>
                            </div>
                        </form>
                    </div>
                    <div id="register-form-container"
                         class="hidden mt-6 sm:mx-auto sm:w-full sm:max-w-md">

                        <!-- Register Form (initially hidden) -->
                        <form class="space-y-6"
                              id="register-form"
                              action="{{ route('Client.clientRegistration') }}"
                              method="POST">
                            @csrf

                            <div class="flex flex-col gap-3">
                                <label for="name"
                                       class="text-indigo-500 font-bold text-xs">Name <span
                                          class="text-red-500 font-bold">*</span></label>
                                <input type="text"
                                       id="name"
                                       name="name"
                                       value="{{ old('name') }}"
                                       placeholder="Enter Full Name"
                                       class="text-xs text-gray-500 font-bold border border-indigo-500 outline-none focus:border-none rounded-sm shadow-xl">

                                @include('common.partials._error', ['name' => 'name'])
                            </div>

                            <div class="flex flex-col gap-3">
                                <label for="email"
                                       class="text-indigo-500 font-bold text-xs">Email <span
                                          class="text-red-500 font-bold">*</span></label>
                                <input type="text"
                                       id="email"
                                       name="email"
                                       value="{{ old('email') }}"
                                       placeholder="Enter Email"
                                       class="text-xs text-gray-500 font-bold border border-indigo-500 outline-none focus:border-none rounded-sm shadow-xl">

                                @include('common.partials._error', ['name' => 'email'])
                            </div>

                            <div class="flex flex-col gap-3">
                                <label for="phone"
                                       class="text-indigo-500 font-bold text-xs">Email <span
                                          class="text-red-500 font-bold">*</span></label>
                                <input type="number"
                                       id="phone"
                                       name="phone"
                                       value="{{ old('phone') }}"
                                       placeholder="Enter Mobile Number"
                                       class="text-xs text-gray-500 font-bold border border-indigo-500 outline-none focus:border-none rounded-sm shadow-xl"
                                       oninput="this.value = this.value.slice(0, 10)">

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
                                <button type="submit"
                                        id="login-button"
                                        class="block px-6  py-2 border border-solid rounded-2xl bg-indigo-100 text-xs text-[#0F628B] hover:bg-gray-200 ml-2 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white font-bold shadow-xl">
                                    Sign up
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Show And Hide Password Toggle -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const passwordInput = document.getElementById('password');
            const togglePasswordBtn = document.getElementById('toggle-password');
            const togglePasswordHiddenBtn = document.getElementById('toggle-password-hidden');

            // Function to toggle password visibility
            function togglePasswordVisibility() {
                if (passwordInput.type === 'password') {
                    passwordInput.type = 'text';
                    togglePasswordBtn.classList.add('hidden');
                    togglePasswordHiddenBtn.classList.remove('hidden');
                } else {
                    passwordInput.type = 'password';
                    togglePasswordBtn.classList.remove('hidden');
                    togglePasswordHiddenBtn.classList.add('hidden');
                }
            }

            // Event listener to toggle password visibility when eye icon is clicked
            togglePasswordBtn.addEventListener('click', function() {
                togglePasswordVisibility();
            });

            togglePasswordHiddenBtn.addEventListener('click', function() {
                togglePasswordVisibility();
            });
        });
    </script>

    <!-- Show And Hide Password Toggle -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const loginTab = document.getElementById('login-tab');
            const registerTab = document.getElementById('register-tab');
            const loginFormContainer = document.getElementById('login-form-container');
            const registerFormContainer = document.getElementById('register-form-container');

            // Retrieve tab info from local storage
            const activeTab = localStorage.getItem('activeTab');
            if (activeTab === 'register') {
                // If 'register' tab was active, show register form
                registerTab.classList.add('bg-gray-200');
                loginFormContainer.classList.add('hidden');
                registerFormContainer.classList.remove('hidden');
            } else {
                // Otherwise, show login form (default behavior)
                loginTab.classList.add('bg-gray-200');
                registerFormContainer.classList.add('hidden');
                loginFormContainer.classList.remove('hidden');
            }

            loginTab.addEventListener('click', function() {
                // Set active tab to 'login' in local storage
                localStorage.setItem('activeTab', 'login');

                loginTab.classList.add('bg-gray-200');
                registerTab.classList.remove('bg-gray-200');
                loginFormContainer.classList.remove('hidden');
                registerFormContainer.classList.add('hidden');
            });

            registerTab.addEventListener('click', function() {
                // Set active tab to 'register' in local storage
                localStorage.setItem('activeTab', 'register');

                registerTab.classList.add('bg-gray-200');
                loginTab.classList.remove('bg-gray-200');
                registerFormContainer.classList.remove('hidden');
                loginFormContainer.classList.add('hidden');
            });
        });
    </script>


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
<style>
    /* Chrome, Safari, Edge, Opera */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    /* Firefox */
    input[type=number] {
        -moz-appearance: textfield;
    }
</style>
