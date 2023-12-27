@extends('layouts.master')

@section('content')
    <style>
        .container {
            font-size: 17px;
            font-family: "Heebo", sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            display: flex;

            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .flip-card {
            background-color: transparent;
            width: 520px;
            height: 300px;
            perspective: 1000px;
            color: white;
        }


        .flip-card-front {
            background-image: url('{{ asset('images/HC_MGIB.jpg') }}');
            background-size: cover;
            position: absolute;
            width: 100%;
            height: 100%;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            border-radius: 0.5rem;
            justify-content: center;
            box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.432);
            border-style: groove;
            border-color: black;
            border-width: 1px;
            justify-items: center;
        }

        .clientData {
            display: grid;
            grid-template-columns: max-content 1fr;
            color: black;
            margin: 100px 0 0 40px;
            font-size: medium;
            line-height: 1.4;
        }

        .label {
            font-weight: bold;
        }

        /* Specific styling for colons */
        .data::before {
            content: ":";
            margin-left: 10px;
            margin-right: 2px;
            font-weight: bold;
        }

        .downloadButton {
            color: grey;
            cursor: pointer;
            font-size: x-small;
            font-weight: bold;
            border: 1px gray solid;
            border-radius: 20px;
            padding: 5px;
        }

        a {
            text-decoration: none !important;
        }

        @media (max-width: 768px) {
            .flip-card {
                background-color: transparent;
                width: 400px;
                height: 232px;
                perspective: 1000px;
                color: white;
            }

            .flip-card-front {
                background-image: url('{{ asset('images/HC_MGIB.jpg') }}');
                background-size: cover;
                background-repeat: no-repeat;
                /* background-position-x: -26px; */
                position: absolute;
                width: 100%;
                height: 100%;
                -webkit-backface-visibility: hidden;
                backface-visibility: hidden;
                border-radius: 0.5rem;
                justify-content: center;
                box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.432);
                border-style: groove;
                border-color: black;
                border-width: 1px;
                justify-items: center;
            }

            .clientData {
                display: grid;
                grid-template-columns: max-content 1fr;
                color: black;
                margin: 80px 0 0 8px;
                font-size: small;
            }
        }

        @media (max-width: 400px) {
            .flip-card {
                background-color: transparent;
                width: 350px;
                height: 203px;
                perspective: 1000px;
                color: white;
            }

            .flip-card-front {
                background-position-x: -5px;
            }

            .clientData {
                margin: 70px 0 0 10px;
                font-size: 10px;
            }
        }
    </style>


    <div class="container">

        <div class="flip-card"
             id="card">
            <div class="flip-card-front">
                <div class="clientData">
                    <div>
                        <span class="label">Company Name</span>
                    </div>
                    <div>
                        <span class="data">{{ $data['policy_name'] }}</span>
                    </div>

                    <div>
                        <span class="label">Name</span>
                    </div>
                    <div>
                        <span class="data">{{ $data['insured_name'] }}</span>
                    </div>

                    <div>
                        <span class="label">Age</span>
                    </div>
                    <div>
                        <span class="data">{{ $data['age'] }}</span>
                    </div>

                    <div>
                        <span class="label">Card No</span>
                    </div>
                    <div>
                        <span class="data">{{ $data['uhid'] }}</span>
                    </div>

                    <div>
                        <span class="label">Valid From</span>
                    </div>
                    <div>
                        <span class="data">{{ date('d-M-Y', strtotime($data['doc'])) }}</span>
                        <span class="label"
                              style="margin-left: 5px;">Valid To</span>
                        <span class="data">{{ date('d-M-Y', strtotime($data['doe'])) }}</span>

                    </div>

                    <div>
                        <span class="label">Insurer</span>
                    </div>
                    <div>
                        <span class="data">{{ $data['insurer'] }}</span>
                    </div>

                </div>
            </div>
        </div>



        <div class="downloadDiv mt-5">
            <a href="{{ route('client.uhid-download', ['id' => $data['uuid']]) }}"
               class="downloadButton">Download</a>
        </div>
    </div>
@endsection
