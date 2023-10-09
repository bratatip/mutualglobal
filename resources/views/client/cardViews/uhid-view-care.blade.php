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
                font-weight: 100 !important;
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
                border-radius: 1rem;/
            }


            .flip-card-front {
                background-image: url('{{ asset('images/care-uhid-front.jpg') }}');
                background-size: cover;
                position: absolute;
                width: 100%;
                height: 100%;
                -webkit-backface-visibility: hidden;
                backface-visibility: hidden;
                border-radius: 1rem;
                justify-content: center;
                box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.432);
                justify-items: center;
            }

            .clientData {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: space-around;
                /* Use space-around to distribute content equally */
                color: white;
                margin: -20px 0 0 -20px;
                font-size: small;
                height: 100%;
            }


            /* Specific styling for colons */
            .data::before {
                content: ":";
                margin-right: 5px;
            }

            table {
                width: 90%;
                margin-left: 30px;
                margin-top: -90px;
                font-size: 13px;
                font-family: "Heebo", sans-serif;
                font-weight: 100 !important;
            }

            tr {
                text-align: left;
            }

            .flip-card-back {
                background-image: url('{{ asset('images/care-uhid-back.jpg') }}');
                background-size: cover;
                position: absolute;
                box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.432);
                /* background-color: rgba(247, 237, 237, 0.363); */
                /* border-style: groove; */
                /* border-width: 1px; */
                /* border-color: rgb(225, 113, 24);
                border-color: linear-gradient(0deg,
                        rgba(225, 113, 24, 1) 100%,
                        rgba(185, 74, 27, 1) 100%); */
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

            @media (max-width: 700px) {
                .flip-card {
                    background-color: transparent;
                    width: 400px;
                    height: 260px;
                    perspective: 1000px;
                    color: white;
                }

                .flip-card-front {
                    background-image: url('{{ asset('images/care-uhid-front.jpg') }}');
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
                    display: flex;
                    grid-template-columns: max-content 1fr;
                    color: white;
                    margin: 30px 0 0 30px;
                    font-size: small;
                }
            }

            @media (max-width: 400px) {

                body {
                    font-size:8px;
                }

                .flip-card {
                    background-color: transparent;
                    width: 350px;
                    height: 230px;
                    perspective: 1000px;
                    color: white;
                }

                .flip-card-front {
                    background-image: url('{{ asset('images/care-uhid-front.jpg') }}');
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
                    margin: -10px 0 0 20px;
                    font-size: small;
                }

                .responsive-custome{
                    font-size:10px !important;
                }

                .responsive-custom-label{
                    margin-left: 20px !important;
                }

                table {
                margin-left: 30px;
                margin-top: -60px;
                font-size: 10px;
                font-family: "Heebo", sans-serif;
                font-weight: 100 !important;
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

                                <div class="data-row responsive-custome"
                                    style="margin-top: 20px;!important">
                                    <span>{{ $data['policy_name'] }}</span>
                                    <span class="label responsive-custom-label"
                                        style="margin-left: 50px;">Valid Upto</span>
                                    <span class="data">{{ date('d-M-y', strtotime($data['doe'])) }}
                                    </span>
                                </div>

                            </div>

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
