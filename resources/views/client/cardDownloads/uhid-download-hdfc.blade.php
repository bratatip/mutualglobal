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
                font-size: 12px;
                margin: 80px 0 0 10px;
            }

            .data-row {
                display: flex;
                align-items: center;
                line-height: 2;
            }

            .label {
                font-weight: bold;
                min-width: 120px;
                display: inline-block;
            }

            .data {
                display: inline-block;
                margin-left: -20px;
                word-wrap: break-word;
            }

            .data::before {
                content: ":";
                margin-right: 5px;
                font-weight: bold;
            }
        </style>
    </head>

    <body>

        <div class="flip-card-front">
            <img src="{{ asset('images/hdfc-uhid-front.jpg') }}"
                alt="..."
                style="width: 50%; height: 25%;  position: absolute; top: 0; left: 0; z-index: -2;">
            <div class="clientData">
                <div>
                    <div class="data-row">
                        <span class="label">Corporate Name</span>
                        <span class="data">{{ $data['policy_name'] }}</span>
                    </div>
                    <div class="data-row">
                        <span class="label">HDFC EGRO ID</span>
                        <span class="data">{{ $data['uhid'] }}</span>
                    </div>
                    <div class="data-row">
                        <span class="label">Member Name</span>
                        <span class="data">{{ $data['insured_name'] }}</span>
                    </div>
                    <div class="data-row">
                        <span class="label">Gender</span>
                        <span class="data">{{ $data['gender'] }}</span>
                    </div>

                </div>
            </div>
            <div>
                <img src="{{ asset('images/hdfc-uhid-back.jpg') }}"
                    alt="..."
                    style="width: 50%; height: 25%;  position: absolute; top: 0; left: 51%; z-index: 1;">
            </div>
    </body>

</html>
