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

            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .flip-card {
            background-color: transparent;
            width: 500px;
            height: 300px;
            perspective: 1000px;
            color: white;
        }

        .flip-card-inner {
            position: relative;
            width: 100%;
            height: 100%;
            /* text-align: center; */
            transition: transform 0.8s;
            transform-style: preserve-3d;
            box-sizing: border-box;
        }

        .rotate .flip-card-inner {
            transform: rotateY(180deg);
        }

        .flip-card-back {
            background-color: rgba(247, 237, 237, 0.363);
            position: absolute;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100%;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            border-radius: 1rem;
        }


        .flip-card-front {
            background-image: url('{{ asset('images/hdfc-uhid-front.jpg') }}');
            background-size: cover;
            position: absolute;
            background-repeat: no-repeat;
            background-position: center 0px;
            width: 100%;
            height: 100%;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            border-radius: 1rem;
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
            margin: 120px 0 0 15px;
            font-size: small;
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
            margin-left: 5px;
            font-weight: bold;
        }

        .flip-card-back {
            background-image: url('{{ asset('images/hdfc-uhid-back.jpg') }}');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            position: relative;
            box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.432);
            border-style: groove;
            border-width: 2px;
            border-color: gray;
            transform: rotateY(180deg);
            height: 100%;
        }

        .text-block {
            color: rgb(205, 165, 8);
            cursor: pointer;
            font-size: medium;
            font-weight: bold;
            margin-top: 1rem;
            margin-bottom: 1rem;
            transition: color 0.8s;
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

        @media (max-width: 800px) {
            .flip-card {
                background-color: transparent;
                width: 400px;
                height: 260px;
                perspective: 1000px;
                color: white;
            }

            .flip-card-front {
                background-image: url('{{ asset('images/hdfc-uhid-front.jpg') }}');
                background-size: cover;
                background-repeat: no-repeat;
                position: absolute;
                width: 100%;
                height: 100%;
                -webkit-backface-visibility: hidden;
                backface-visibility: hidden;
                border-radius: 1rem;
                justify-content: center;
                box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.432);
                border-style: groove;
                border-color: rgba(185, 74, 27, 1);
                border-width: 1px;
                justify-items: center;
            }

            .clientData {
                display: grid;
                grid-template-columns: max-content 1fr;
                color: black;
                margin: 100px 0 0 15px;
                font-size: small;
            }
        }

        @media (max-width: 400px) {
            .flip-card {
                background-color: transparent;
                width: 350px;
                height: 230px;
                perspective: 1000px;
                color: white;
            }
        }
    </style>

    <div class="container">

        <div class="flip-card"
            id="card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
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
                </div>
                <div class="flip-card-back">

                </div>
            </div>
        </div>

        <div class="text-block"
            id="frontBackView"
            onclick="rotateFunction()">Back View</div>

        <div>
            <a href="{{ route('client.uhid-download', ['id' => $data['uuid']]) }}"
                class="downloadButton">Download</a>
        </div>
    </div>
    <script>
        const card = document.getElementById('card');
        const textBlock = document.getElementById('frontBackView');
        let isFlipped = false;

        function rotateFunction() {
            isFlipped = !isFlipped;

            textBlock.style.opacity = 0;
            setTimeout(() => {
                textBlock.textContent = isFlipped ? 'Front View' : 'Back View';

                textBlock.style.opacity = 1;
            }, 1000);

            if (isFlipped) {
                card.classList.add('rotate');
            } else {
                card.classList.remove('rotate');
            }
        }
    </script>
@endsection
