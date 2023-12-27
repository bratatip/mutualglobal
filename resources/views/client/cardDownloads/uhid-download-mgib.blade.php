<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <style>
        /* @page {
                size: landscape;
            } */

        body {
            color: rgb(255, 255, 255);
            font-size: 17px;
            font-family: "Heebo", sans-serif;
            background-color: rgba(243, 235, 235, 0.178);
            backdrop-filter: blur(5px);
            display: flex;
            justify-content: center;
            align-items: baseline;
            height: 100vh;
            margin-top: 0;
            margin-left: 0;
        }


        .flip-card-front {
            position: relative;
            left: 20%;
            width: 430px;
            height: 250px;
            border-radius: 0.5rem;
            justify-content: center;
            border-style: groove;
            border-color: rgb(1, 1, 1);
            border-width: 1px;
            justify-content: center;
            display: flex;
            align-items: center;
        }

        .flip-card-front img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 0.5rem;
        }

        .clientData {
            color: black;
            font-size: 12px;
            margin: 85px 0 0 20px;
        }

        .data-row {
            display: flex;
            align-items: center;
            line-height: 1.5;
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

        .label {
            font-weight: bold;
        }

        .data::before {
            content: ":";
            margin-right: 2px;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="flip-card-front">
        <img src="{{ asset('images/HC_MGIB.jpg') }}"
             alt="..."
             style="width: 100%; height: 100%;  position: absolute; top: 0; left: 0; z-index: -1;">
        <div class="clientData">
            <div>
                <div class="data-row">
                    <span class="label">Company Name</span>
                    <span class="data">{{ $data['policy_name'] }}</span>
                </div>
                <div class="data-row">
                    <span class="label">Name</span>
                    <span class="data">{{ $data['insured_name'] }}</span>
                </div>
                <div class="data-row">
                    <span class="label">Age</span>
                    <span class="data">{{ $data['age'] }}</span>
                </div>
                <div class="data-row">
                    <span class="label">Card No</span>
                    <span class="data">{{ $data['uhid'] }}</span>
                </div>

                <div class="data-row">
                    <span class="label">Insurer</span>
                    <span class="data">{{ $data['insurer'] }}</span>
                </div>

                <div class="data-row">
                    <span style="font-weight: bold;">Valid From</span>
                    <span><span
                              style="font-weight: bold; margin-left: 38px;">:</span>{{ date('d-M-Y', strtotime($data['doc'])) }}</span>
                    <span style="font-weight: bold; margin-left:10px;">Valid To :</span>
                    <span>{{ date('d-M-Y', strtotime($data['doe'])) }}</span>
                </div>

            </div>
        </div>


    </div>
</body>

</html>
