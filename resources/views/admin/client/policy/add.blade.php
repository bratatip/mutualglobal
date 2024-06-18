@extends('layouts.master')
@php
    use App\Helpers\OptionGeneratorHelper;
@endphp
@section('content')
    @if (Session::has('success') || Session::has('error'))
        <div class="mt-20 w-full flex justify-center">
            <div class="w-1/2">
                @include('common.partials._message')
            </div>
        </div>
    @endif
    <x-common.card>
        @slot('card_content')
            <form action="{{ route('Admin.storeClientPolicy') }}"
                  method="post"
                  enctype="multipart/form-data">
                @csrf
                <div class="grid md:grid-cols-3 gap-2 p-5">
                    <div>
                        <x-forms.select type="text"
                                        class="h-8"
                                        name="client"
                                        label="Clint Name"
                                        class="js-select2"
                                        :options="OptionGeneratorHelper::generateClientOption()"
                                        required />
                        @include('common.partials._error', ['name' => 'client'])

                    </div>
                    <div>
                        <x-forms.select type="text"
                                        class="h-8"
                                        name="insurer"
                                        label="Insurer Name"
                                        placeholder=""
                                        class="js-select2"
                                        :options="OptionGeneratorHelper::generateInsurerOption()"
                                        required />
                        @include('common.partials._error', ['name' => 'insurer'])

                    </div>

                    <div>
                        <x-forms.input-field type="text"
                                             class="h-8"
                                             name="policy_number"
                                             label="Policy Number"
                                             placeholder=""
                                             required />
                        @include('common.partials._error', ['name' => 'policy_number'])

                    </div>

                    <div>
                        <x-forms.input-field type="date"
                                             class="h-8"
                                             name="policy_start_date"
                                             label="Policy Start Date"
                                             placeholder=""
                                             required />
                        @include('common.partials._error', ['name' => 'policy_start_date'])

                    </div>

                    <div>
                        <x-forms.input-field type="date"
                                             class="h-8"
                                             name="policy_end_date"
                                             label="Policy End Date"
                                             placeholder=""
                                             required />
                        @include('common.partials._error', ['name' => 'policy_end_date'])
                    </div>

                    <div>
                        <x-forms.input-field type="text"
                                             class="h-8"
                                             name="premium_inc_gst"
                                             label="Premium Inc gst"
                                             placeholder=""
                                             required />
                        @include('common.partials._error', ['name' => 'premium_inc_gst'])

                    </div>

                    <div>
                        <x-forms.input-field type="text"
                                             class="h-8"
                                             name="occupancy"
                                             label="Occupancy"
                                             placeholder=""
                                             required />
                        @include('common.partials._error', ['name' => 'occupancy'])

                    </div>

                    <div>
                        <x-forms.input-field type="textarea"
                                             class="h-8"
                                             name="property_address"
                                             label="Property Address"
                                             placeholder=""
                                             required />
                        @include('common.partials._error', ['name' => 'property_address'])

                    </div>

                    <div>
                        <x-forms.input-field type="file"
                                             class="h-8"
                                             name="policy_copy"
                                             label="Policy Copy"
                                             placeholder=""
                                             class="bg-indigo-300"
                                             accept=".pdf,.zip"
                                             required />
                        @include('common.partials._error', ['name' => 'policy_copy'])

                    </div>
                </div>
                {{-- <div class="flex items-center justify-center w-full">
                    <label for="dropzone-file"
                           class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                            <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400"
                                 aria-hidden="true"
                                 xmlns="http://www.w3.org/2000/svg"
                                 fill="none"
                                 viewBox="0 0 20 16">
                                <path stroke="currentColor"
                                      stroke-linecap="round"
                                      stroke-linejoin="round"
                                      stroke-width="2"
                                      d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                            </svg>
                            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to
                                    upload</span> or drag and drop</p>
                            <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                        </div>
                        <input id="dropzone-file"
                               type="file"
                               class="hidden" />
                    </label>
                </div> --}}

                <div class="flex justify-end">
                    <button type="submit"
                            class="logout_button block mr-6 px-6  py-2 border border-solid rounded-2xl bg-[#F5F5F5] text-xs text-[#0F628B] hover:bg-gray-200 ml-2 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white font-bold shadow-xl ">
                        Submit
                    </button>
                </div>
            </form>
        @endslot
    </x-common.card>

    <script>
        $(document).ready(function() {
            $(".js-select2").select2({
                closeOnSelect: true,
                theme: "classic",
            });
        });
    </script>
@endsection
