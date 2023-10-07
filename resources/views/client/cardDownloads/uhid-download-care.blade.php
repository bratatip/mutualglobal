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
                background-color: rgba(243, 235, 235, 0.178);
                backdrop-filter: blur(5px);
                display: flex;
                justify-content: center;
                align-items: baseline;
                height: 100vh;
                margin-top: 5rem;
            }

            .container {
                display: grid;
                grid-template-columns: 1fr 1fr;
                gap: 30px;
                align-items: center;
                justify-content: space-around;
            }

            .flip-card {
                background-color: transparent;
                width: 500px;
                height: 300px;
                perspective: 1000px;
                color: white;
            }

            .flip-card-back {
                background-image: url('{{ asset('images/care-uhid-back.png') }}');
                background-size: cover;
                position: absolute;
                width: 100%;
                height: 100%;
                -webkit-backface-visibility: hidden;
                backface-visibility: hidden;
                border-radius: 1rem;
                justify-content: center;
                justify-items: center;
            }

            .flip-card-front {
                background-image: url('{{ asset('images/care-uhid-front.png') }}');
                background-size: cover;
                position: absolute;
                width: 100%;
                height: 100%;
                -webkit-backface-visibility: hidden;
                backface-visibility: hidden;
                border-radius: 1rem;
                justify-content: center;
                justify-items: center;
            }

            .clientData {
                display: grid;
                grid-template-columns: max-content 1fr;
                color: black;
                margin: 100px 0 0 50px;
                font-size: small;
            }

            .label {
                font-weight: bold;
            }

            .data::before {
                content: ":";
                margin-left: 10px;
                margin-right: 2px;
                font-weight: bold;
            }

            .text-block {
                color: black;
                cursor: pointer;
                margin-top: 1rem;
                transition: color 0.8s;
            }


            @media print {

                .header {
                    background: rgb(225, 113, 24);
                    background: linear-gradient(0deg, rgba(225, 113, 24, 1) 100%, rgba(185, 74, 27, 1) 100%);
                    height: 20px;
                    position: absolute;
                    top: 0;
                    left: 0;
                    right: 0;
                    border-top-right-radius: 1rem;
                    border-top-left-radius: 1rem;
                    background-color: rgba(225, 113, 24, 1);
                }

                .container {
                    padding: 5px !important;
                }

                .container::after {
                    content: "For the best printing experience, please enable background graphics in your browser settings.";
                    display: flex;
                    align-items: stretch;
                    font-size: 20px;
                    font-weight: bold;
                    color: red;
                    margin-bottom: 10px;

                }
            }
        </style>
    </head>

    <body style="display: block; position:absolute">
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
                            <span class="data">{{ $data['doc'] }}</span>
                            <span class="label"
                                style="margin-left: 10px;">Valid To</span>
                            <span class="data">{{ $data['doe'] }}</span>

                        </div>

                    </div>
                </div>


            </div>

            <div class="flip-card"
                id="card">
                <div class="flip-card-back">
                </div>
            </div>


        </div>
        <br>
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
                            <span class="data">{{ $data['doc'] }}</span>
                            <span class="label"
                                style="margin-left: 10px;">Valid To</span>
                            <span class="data">{{ $data['doe'] }}</span>

                        </div>

                    </div>
                </div>


            </div>

            <div class="flip-card"
                id="card">
                <div class="flip-card-back">
                </div>
            </div>


        </div>
    </body>

    <script>
        window.onload = function() {
            window.print();
            window.addEventListener('afterprint', function() {
                window.close();
            });
        }
    </script>



</html>
