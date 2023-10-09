<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport"
            content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
        <style>
            .clientData {
                color: white;
                font-size: 12px;
                margin: 100px 0 0 120px;
            }
            .data-row{
                margin-bottom: 5px;
            }
        </style>
    </head>

    <body>

        <div class="flip-card-front">
            <img src="{{ asset('images/reliance-uhid-front.jpg') }}"
                alt="..."
                style="width: 50%; height: 22%;  position: absolute; top: 0; left: 0; z-index: -2;">
            <div class="clientData">
                <div>
                    {{-- <div class="data-row">
                        <span class="label">Company Name</span>
                        <span class="data">{{ $data['policy_name'] }}</span>
                    </div> --}}
                    <div class="data-row">
                        {{-- <span class="label">Name</span> --}}
                        <span class="data" style="font-weight: bold;">{{ $data['insured_name'] }}</span>
                    </div>
                    <div class="data-row" style="margin-top: 20px;!important">
                        <span class="label">AGE:</span>
                        <span class="data">{{ $data['age'] }}</span>
                        <span class="label" style="margin-left: 50px;">Gender:</span>
                        <span class="data">{{ $data['gender'] }}</span>
                    </div>
                    <div class="data-row">
                        <span class="label">UHID No:</span>
                        <span class="data">{{ $data['uhid'] }}</span>
                    </div>
                    <div class="data-row">
                        <span class="label">Policy No:</span>
                        <span class="data">{{ $data['policy_number'] }}</span>
                    </div>
                    <div class="data-row">
                        <span class="label">EMP Code:</span>
                        <span class="data">{{ $data['emp_id'] }}</span>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <img src="{{ asset('images/reliance-uhid-back.jpg') }}"
                alt="..."
                style="width: 50%; height: 22%;  position: absolute; top: 0; left: 51%; z-index: 1;">
        </div>
    </body>

</html>
