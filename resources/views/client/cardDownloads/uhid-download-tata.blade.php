<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport"
            content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
        <style>
            .clientData {
                color: black;
                font-size: 9px;
                margin: 80px 0 0 20px;
            }

            .data-row {
                display: flex;
                align-items: center;
                line-height: 1.2;
            }

            .label {
                font-weight: bold;
                /* min-width: 120px; */
                /* display: inline-block; */
            }

            .label-custome {
                position: absolute;
                left: 200px;
            }

            /* .data {
                display: inline-block;
                margin-left: -20px;
                word-wrap: break-word;
            } */

            .data::before {
                content: ":";
                margin-right: 5px;
                font-weight: bold;
            }
        </style>
    </head>

    <body>

        <div class="flip-card-front">
            <img src="{{ asset('images/tata-uhid-front.jpg') }}"
                alt="..."
                style="width: 50%; height: 22%;  position: absolute; top: 0; left: 0; z-index: -2;">
            <div class="clientData">
                <div>
                    <div class="data-row">
                        <span class="label">Name</span>
                        <span class="data">{{ $data['insured_name'] }}</span>
                    </div>
                    <div class="data-row">
                        <span class="label">Policy No</span>
                        <span class="data">{{ $data['policy_number'] }}</span>
                        <span class="label-custome">
                            <span class="label">Age</span>
                            <span class="data">{{ $data['age'] }}</span>
                        </span>

                    </div>
                    <div class="data-row">
                        <span class="label">Member Id</span>
                        <span class="data">{{ $data['emp_id'] }}</span>
                        <span class="label-custome">
                            <span class="label">DOB</span>
                            <span class="data">{{ $data['dob'] }}</span>
                        </span>
                    </div>
                    <div class="data-row">
                        <span class="label">Policy Period</span>

                        <?php $docCarbon = \Carbon\Carbon::parse($data['doc']); ?>
                        <?php $doeCarbon = \Carbon\Carbon::parse($data['doe']); ?>

                        <span class="data">{{ $docCarbon->format('d-m-Y') }} -
                            {{ $doeCarbon->format('d-m-Y') }}</span> <span class="label-custome">
                            <span class="label">Gendre</span>
                            <span class="data">{{ $data['gender'] }}</span>
                        </span>
                    </div>

                    <div class="data-row">
                        <span class="label">Organisation</span>
                        <span class="data">{{ $data['policy_name'] }}</span>
                    </div>

                </div>
            </div>
        </div>

        <div>
            <img src="{{ asset('images/tata-uhid-back.jpg') }}"
                alt="..."
                style="width: 50%; height: 22%;  position: absolute; top: 0; left: 51%; z-index: 1;">
        </div>
    </body>

</html>
