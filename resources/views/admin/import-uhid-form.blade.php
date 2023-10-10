@extends('layouts.master')

@section('content')
    <div class="min-h-screen bg-zinc-200 flex flex-col justify-center">
        @include('common.partials._message')

        <div>
            <h2 class="mt-6 text-center text-md font-sans font-extrabold text-gray-500">
                Import Uhids
            </h2>
        </div>
        <div class="flex justify-center">
            <form class="space-y-6"
                action="{{ route('admin.downloadSampleCSV') }}"
                method="POST">
                @csrf
                @method('post')
                <button type="submit"
                    class="px-6 py-2 mt-3 border border-solid border-[#CCCCCC] rounded-2xl bg-gray-500 text-xs text-white ml-2 font-bold">
                    Download Sample File
                </button>

            </form>
        </div>
        <div class="mt-1 sm:mx-auto sm:w-full sm:max-w-md">
            <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">

                <div id="skipped_block"
                    class="flex hidden flex-row space-y-4 text-sm">
                    <button type="button"
                        class="text-[#0F628B] bg-white border-[#0F628B] border border-solid font-medium rounded-full px-5 py-2.5 text-center text-xs mt-3 mb-8 w-50 max-md:mt-2d"
                        id="download-btn">Download Skipped File</button>
                </div>

                <div>
                    <x-forms.input-field type="file"
                        class="w-11/12"
                        name="excel_uhid"
                        id="excel_uhid"
                        label="Select Excel File"
                        acceptedFileTypes=".csv"
                        required />

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
                </div>

                <div class="flex justify-center">
                    <button type="button"
                        id="import-btn"
                        class="px-6 py-2 mt-3 border border-solid border-[#CCCCCC] rounded-2xl bg-gray-500 text-xs text-white font-bold">
                        Import csv
                    </button>


                </div>

            </div>
        </div>
    </div>

    {{-- Import Function  --}}
    <script>
        $('#import-btn').on('click', function() {
            var formData = new FormData();
            var excel_uhid = $('#excel_uhid')[0].files[0];
            formData.append('excel_uhid', excel_uhid);
            formData.append('_token', "{{ csrf_token() }}");

            $.ajax({
                type: 'POST',
                url: "{{ route('admin.store-uhid') }}",
                data: formData,
                contentType: false,
                processData: false,
                beforeSend: function() {
                    $('.atom-spinner').addClass('show')
                    $('.atom-spinner').removeClass('hide')
                },
                success: function(data) {
                    if (data.status == 'success') {
                        $('#skipped_block').addClass();
                        $('#skipped_block').removeClass('hidden');

                        toastr.success('Data imported successfully.');
                    } else {
                        toastr.error(data.message);
                    }
                },
                error: function(xhr, status, error) {
                    toastr.error('Please try again');
                },
                complete: function() {
                    $('.atom-spinner').addClass('hide')
                    $('.atom-spinner').removeClass('show')
                },
            });
        });

        $('#download_candidate_sample_csv').on('click', function(event) {
            event.preventDefault();
            toastr.success('Downloaded');
        });

        $('#close-import-popup-btn').on('click', function() {
            $('#import-popup').addClass('hidden');
        });

        $('#open-import-popup-btn').on('click', function() {
            $('#import-popup').removeClass('hidden');
        });
    </script>
@endsection
