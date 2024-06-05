@extends('client.layouts.app')

@section('content')
    <link href="{{ config('app.url') }}/css/dt.css"
          rel="stylesheet"
          type="text/css" />

    <link href="{{ config('app.url') }}/css/data_table.css"
          rel="stylesheet"
          type="text/css" />
    <link rel="stylesheet"
          href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css">
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>

    <x-common.card>
        @slot('card_content')
            <table class="w-full table-auto z-10"
                   id="policiesDataTable">
                <thead class="text-black">
                    <tr>
                        <th>SL NO</th>
                        <th>Policy Number</th>
                        <th>Policy Start Date</th>
                        <th>Policy End Date</th>
                        <th>Insurer Name</th>
                        <th>Property Add</th>
                        <th>Occupancy</th>
                        <th>Premium Inc Gst</th>
                        <th>Action</th>
                    </tr>
                </thead>
            </table>
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
                    "url": "{{ route('Client.clientPolicyTableJson') }}",
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
                        targets: [0, 1, 2, 3, 4, 5, 6, 7, 8]
                    }
                ],
                columns: [{
                        data: null,
                        render: function(data, type, row, meta) {
                            return meta.row + 1;
                        }
                    },
                    {
                        data: 'policy_no',
                        name: 'policy_no',
                    },
                    {
                        data: 'policy_start_date',
                        name: 'policy_start_date',
                    },
                    {
                        data: 'policy_end_date',
                        name: 'policy_end_date',
                    },
                    {
                        data: 'insurer',
                        name: 'insurer',
                    },
                    {
                        data: 'property_address',
                        name: 'property_address',
                    },
                    {
                        data: 'occupancy',
                        name: 'occupancy',
                    },
                    {
                        data: 'premium_inc_gst',
                        name: 'premium_inc_gst',
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
