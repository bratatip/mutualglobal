@extends('layouts.master')

@section('content')
    @include('common.partials._message')
    <div class="min-h-screen bg-zinc-200 flex flex-col justify-center">
        <div>
            <h2 class="mt-6 text-center text-md font-sans font-extrabold text-gray-500">
                Login
            </h2>
        </div>

        <div class="mt-1 sm:mx-auto sm:w-full sm:max-w-md">
            <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
                <form class="space-y-6"
                    action="{{ route('admin.store-uhid') }}"
                    method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('post')

                    <div>
                        {{-- <label for="email"
                            class="text-[#0F628B]">Select Excel File: <span
                                class="text-red-600"><strong>*</strong></span></label>
                        <div class="mb-4 relative">
                            <input type="file"
                                name="excel_file"
                                accept=".xlsx, .xls"
                                class="text-xs text-gray-500 rounded-sm px-3 border-solid border-[#CCCCCC] focus:border-[#FFC451] focus:outline-0 focus:ring-0"
                                id="fileInput">
                        </div> --}}

                        <x-forms.input-field type="file"
                            class="w-11/12"
                            name="excel_uhid"
                            label="Select Excel File"
                            acceptedFileTypes=".xlsx, .xls, .csv "
                            required />
                    </div>

                    <div class="flex justify-center">
                        <button type="submit"
                            class="px-6 py-2 mt-3 border border-solid border-[#CCCCCC] rounded-2xl bg-gray-500 text-xs text-white ml-2 font-bold">
                            Import
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
