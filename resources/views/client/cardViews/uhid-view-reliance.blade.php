<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport"
            content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
        <style>
            body {
                color: rgb(255, 255, 255);
                font-size: 17px;
                font-family: "Heebo", sans-serif;
                margin: 0;
                background-color: rgba(243, 235, 235, 0.178);
                backdrop-filter: blur(5px);
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }

            .container {
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

            /* .flip-card-front, */
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
                /* padding-right: 15px;
                padding-left: 15px; */
            }

            /* .flip-card-front {
                box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.432);
                background-color: rgba(247, 237, 237, 0.363);
                border-style: groove;
                border-color: rgba(185, 74, 27, 1);
                border-width: 1px;
            } */


            .flip-card-front {
                background-image: url('{{ asset('images/reliance-uhid-front.jpg') }}');
                background-size: cover;
                position: absolute;
                background-size: cover;
                background-repeat: no-repeat;
                background-position: center;
                /* display: grid;
                grid-template-columns: 1fr 2fr 1fr; */
                /* grid-gap: 5px; */
                width: 100%;
                height: 100%;
                -webkit-backface-visibility: hidden;
                backface-visibility: hidden;
                border-radius: 1rem;
                justify-content: center;
                box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.432);
                /* border-style: groove;
                border-color: rgba(185, 74, 27, 1);
                border-width: 1px; */
                justify-items: center;
            }

            .clientData {
                color: white;
                font-size: 12px;
                margin: 120px 0 0 170px;
            }

            .data-row {
                margin-bottom: 5px;
            }

            .flip-card-back {
                background-image: url('{{ asset('images/reliance-uhid-back.jpg') }}');
                background-size: cover;
                background-repeat: no-repeat;
                background-position: center;
                position: relative;
                box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.432);
                /* background-color: rgba(247, 237, 237, 0.363); */
                border-style: groove;
                border-width: 2px;
                border-color: gray;
                transform: rotateY(180deg);
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

            @media (max-width: 768px) {
                .flip-card {
                    background-color: transparent;
                    width: 400px;
                    height: 260px;
                    perspective: 1000px;
                    color: white;
                }

                .flip-card-front {
                    background-image: url('{{ asset('images/reliance-uhid-front.jpg') }}');
                    background-size: cover;
                    background-repeat: no-repeat;
                    /* background-position-x: -26px; */
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
                    color: white;
                    font-size: 12px;
                    margin: 110px 0 0 140px;
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
                .clientData {
                    font-size: 10px;
                    margin: 110px 0 0 130px;
                }
                
            }
        </style>
    </head>

    <body>
        <div class="container">

            <div class="flip-card"
                id="card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <div class="clientData">
                            <div>
                                {{-- <div class="data-row">
                                    <span class="label">Company Name</span>
                                    <span class="data">{{ $data['policy_name'] }}</span>
                                </div> --}}
                                <div class="data-row">
                                    {{-- <span class="label">Name</span> --}}
                                    <span class="data"
                                        style="font-weight: bold;">{{ $data['insured_name'] }}</span>
                                </div>
                                <div class="data-row"
                                    style="margin-top: 20px;!important">
                                    <span class="label">AGE:</span>
                                    <span class="data">{{ $data['age'] }}</span>
                                    <span class="label"
                                        style="margin-left: 50px;">Gender:</span>
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
    </body>

</html>
