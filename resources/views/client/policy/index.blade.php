@extends('client.layouts.app')

@section('content')
    <x-common.card>
        @slot('card_content')
            <table class="w-full  table-auto"
                   id="policiesDataTable">
                <thead class="text-black">
                    <tr>
                        <th>SL NO</th>
                        <th>Policy Number</th>
                        <th>Policy Start Date</th>
                        <th>Policy End Date</th>
                        <th>Insurer Name</th>
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
                        d.product_category = $('#product_category').val();
                        d.insurer = $('#insurer').val();
                        d.quarter = $('#quarter').val();
                        d.half_year = $('#half_year').val();
                        d.financial_year = $('#financial_year').val();
                        d.date_range = $('#date_range').val();
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
                        data: 'customer_name',
                        name: 'customer_name',
                    },
                    {
                        data: 'business_type',
                        name: 'business_type',
                    },
                    {
                        data: 'product_name',
                        name: 'product_name',
                    },
                    {
                        data: 'insurer',
                        name: 'insurer',
                    },
                    {
                        data: 'net_premium',
                        name: 'net_premium',
                    },
                    {
                        data: 'total_brokerage',
                        name: 'total_brokerage',
                    },
                    {
                        data: 'policy_issue_date',
                        name: 'policy_issue_date',
                    }
                ]
            });
        }
    </script>
@endsection
