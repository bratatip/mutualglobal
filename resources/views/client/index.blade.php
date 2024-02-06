@extends('layouts.master')

@section('content')
    <div class="min-h-screen flex flex-col justify-center" style="background-color:#666666 !important">
        @include('common.partials._message')

        <div class="mt-1 sm:mx-auto sm:w-full sm:max-w-md">
            <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
                <form class="space-y-6"
                    action="{{ route('client.uhid-show') }}"
                    method="POST">
                    @csrf
                    @method('post')

                    <div>
                        <x-forms.input-field type="text"
                            class="h-8"
                            name="policy_name"
                            label="Policy Name"
                            placeholder="Enter Company Name"
                            required />
                        @include('common.partials._error', ['name' => 'policy_name'])
                    </div>

                    <div>
                        <x-forms.input-field type="text"
                            class="h-8"
                            name="insured_name"
                            label="Insured Name"
                            placeholder="Enter Name"
                            required />
                        @include('common.partials._error', ['name' => 'insured_name'])
                    </div>

                    <div class="flex justify-between items-center">
                        <div class="w-10/12">
                            <x-forms.input-field type="date"
                                class="h-8"
                                name="dob"
                                label="DOB"
                                placeholder="Enter Name"
                                required />
                            @include('common.partials._error', ['name' => 'dob'])
                        </div>

                        <span class="text-red-500 text-sm mx-[20px]">OR</span>
                        <div class="w-10/12">
                            <x-forms.input-field type="text"
                                class="h-8"
                                name="emp_id"
                                label="Employee ID"
                                placeholder="Employee ID"
                                required />
                            @include('common.partials._error', ['name' => 'emp_id'])
                        </div>
                    </div>

                    <div class="flex justify-center">
                        <button type="submit"
                            class="px-6 py-2 mt-3 border border-solid border-[#CCCCCC] rounded-2xl bg-gray-500 text-xs text-white ml-2 font-bold">
                            Search
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
