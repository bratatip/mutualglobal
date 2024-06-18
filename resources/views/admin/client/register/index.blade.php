@extends('layouts.master')

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
            <div class="overflow-auto">
                <table class="w-full"
                       id="policiesDataTable">
                    <thead class="text-black w-full">
                        <tr>
                            <th>SL NO:</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Registerd At</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                </table>
            </div>
        @endslot
    </x-common.card>

    <script>
        var table;
        // Function to initialize DataTable
        function initializeDataTable() {
            table = $('#policiesDataTable').DataTable({
                order: [
                    [2, "desc"]
                ],
                lengthMenu: [
                    [10, 15000],
                    [10, "All"]
                ],
                buttons: [
                    'excel'
                ],
                dom: 'Blfrtip',
                processing: true,
                serverSide: true,
                responsive: true,
                scrollX: true,
                scrollY: true,
                scrollCollapse: true,
                lengthChange: true,
                pageLength: 10,
                'language': {
                    "emptyTable": "No data available",
                    "loadingRecords": "&nbsp;",
                    "processing": "<div>Processing...</div>"
                },
                "destroy": true,
                "ajax": {
                    "type": "GET",
                    "headers": {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}"
                    },
                    "url": "{{ route('Admin.registerClientTableJson') }}",
                    "dataType": "json",
                    "contentType": 'application/jsondt; charset=utf-8',
                    data: function(d) {

                    }
                },
                "columnDefs": [{
                        "className": "dt-center no-click",
                        "targets": [-1]
                    },
                    {
                        className: "child-control",
                        targets: [0, 1, 2, 3, 4, 5]
                    }
                ],
                columns: [{
                        data: null,
                        render: function(data, type, row, meta) {
                            return meta.row + 1;
                        }
                    },
                    {
                        data: 'name',
                        name: 'name',
                    },
                    {
                        data: 'email',
                        name: 'email',
                    },
                    {
                        data: 'phone',
                        name: 'phone',
                    },
                    {
                        data: 'created_at',
                        name: 'created_at',
                    },
                    {
                        data: 'action',
                        name: 'action',
                    },
                ]
            });
        }

        $(document).ready(function() {
            initializeDataTable();
        });
    </script>
@endsection
