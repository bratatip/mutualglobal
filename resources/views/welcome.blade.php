<!doctype html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport"
            content="width=device-width, initial-scale=1.0">
        @include('layouts.js_cdn')
    </head>


    <body class="font-sans">
        <div class="min-h-screen bg-zinc-200 flex flex-col justify-center">
            <div>
                <h2 class="mt-6 text-center text-md font-sans font-extrabold text-gray-500">
                    Login
                </h2>
            </div>

            <div class="mt-1 sm:mx-auto sm:w-full sm:max-w-md">
                <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
                    <form class="space-y-6"
                        action="#"
                        method="POST">
                        @csrf
                        @method('post')

                        <div>
                            <label for="email"
                                class="text-sm font-bold text-[#0F628B]">
                                Email address
                            </label>
                            <div class="mt-1">
                                <input id="email"
                                    name="email"
                                    type="email"
                                    autocomplete="email"
                                    required
                                    class="h-8 text-xs text-gray-500 rounded-sm w-11/12 px-3 border-solid border-[#CCCCCC] focus:ring-0"
                                    placeholder="Enter your email address">
                            </div>
                        </div>

                        <div>
                            <label for="password"
                                class="text-sm font-bold text-[#0F628B]">
                                Password
                            </label>
                            <div class="mt-1">
                                <input id="password"
                                    name="password"
                                    type="password"
                                    autocomplete="current-password"
                                    required
                                    class="h-8  text-xs rounded-sm w-11/12 px-3 border-solid border-[#CCCCCC] focus:ring-0"
                                    placeholder="Enter your password">
                            </div>
                        </div>

                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <input id="remember_me"
                                    name="remember_me"
                                    type="checkbox"
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
                            <button type="submit"
                                class="px-6 py-2 mt-3 border border-solid border-[#CCCCCC] rounded-2xl bg-gray-500 text-xs text-white ml-2 font-bold">
                                Sign in
                            </button>
                        </div>
                    </form>

                </div>
            </div>

            <div class="sm:mx-auto sm:w-full sm:max-w-md">
                <h2 class="mt-6 text-center text-sm font-extrabold text-blue-900">
                    Mutual Global Insurance Broking Pvt Ltd
                </h2>
            </div>
        </div>
    </body>

</html>
