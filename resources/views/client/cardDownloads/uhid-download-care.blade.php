<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport"
            content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
        <style>
            .clientData {
                position: absolute;
                flex-direction: column;
                align-items: center;
                justify-content: space-around;
                color: white;
                font-size: small;
                height: 22%;
                width: 50%;
                margin-top: 50px;
                margin-left: 20px;
            }

            .data::before {
                content: ":";
                margin-right: 5px;
            }

            .data-table {
                width: 100%;
                table-layout: fixed;
                text-align: center;
            }

            .data-table td {
                word-wrap: break-word;
            }

            table {
                width: inherit;
                font-size: 13px;
                font-family: "Heebo", sans-serif;
            }
            thead th{
                text-align: left;
            }
            tr {
                text-align: left;
            }
        </style>
    </head>

    <body>
        <div class="flip-card-front">
            <img src="{{ asset('images/care-uhid-front.jpg') }}"
                alt="..."
                style="width: 50%; height: 22%;  position: absolute; top: 0; left: 0; z-index: -2;">
            <div class="clientData">
                <div class="data-row">
                    <span class="label">Policy Number</span>
                    <span class="data">{{ $data['policy_number'] }}</span>
                </div>
                <div class="data-row">
                    <span class="label">Policy Type</span>
                    <span class="data"
                        style="">Health Insurance</span>
                </div>

                <div class="data-row">
                    <span class="label">Member Id</span>
                    <span class="data"
                        style="">{{ $data['emp_id'] }}</span>
                </div>

                <div class="data-row" style="margin-top: 10px; margin-bottom: 10px;">
                    <span style="display: inline-block; width: 50%;">{{ $data['policy_name'] }}</span>
                    <span style="float: right; margin-right:25px;">Valid Upto
                        <span class="data">{{ date('d-M-y', strtotime($data['doe'])) }}</span>
                    </span>
                </div>
                
                

                <table class="data-table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Client Id</th>
                            <th>Dob</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $data['insured_name'] }}</td>
                            <td>{{ $data['uhid'] }}</td>
                            <td>{{ date('d-M-y', strtotime($data['dob'])) }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div>
                <img src="{{ asset('images/care-uhid-back.jpg') }}"
                    alt="..."
                    style="width: 50%; height: 22%;  position: absolute; top: 0; left: 51%; z-index: 1;">
            </div>
        </div>
    </body>

</html>
