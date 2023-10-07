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
                background-image: url('{{ asset('images/icici-uhid-front.jpg') }}');
                background-size: cover;
                position: absolute;
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
                border-style: groove;
                border-color: rgba(185, 74, 27, 1);
                border-width: 1px;
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

            /* Specific styling for colons */
            .data::before {
                content: ":";
                margin-left: 10px;
                margin-right: 2px;
                font-weight: bold;
            }

            .flip-card-back {
                box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.432);
                background-color: rgba(247, 237, 237, 0.363);
                border-style: groove;
                border-width: 1px;
                border-color: rgb(225, 113, 24);
                border-color: linear-gradient(0deg,
                        rgba(225, 113, 24, 1) 100%,
                        rgba(185, 74, 27, 1) 100%);
                transform: rotateY(180deg);
            }

            .header {
                background: rgb(225, 113, 24);
                background: linear-gradient(0deg,
                        rgba(225, 113, 24, 1) 100%,
                        rgba(185, 74, 27, 1) 100%);
                height: 20px;
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                border-top-right-radius: 1rem;
                border-top-left-radius: 1rem;
            }

            ul {
                display: block;
                list-style-type: disc;
                margin-block-start: 0px;
                margin-block-end: 0px;
                margin-inline-start: 0px;
                margin-inline-end: 0px;
                padding-inline-start: 25px;
                padding-inline-end: 25px;
            }


            .instruction {
                color: gray;
                font-size: 8px;
                font-weight: 600;
                line-height: 1.3;
            }

            .terms p {
                color: gray;
                margin-bottom: 10px;
                padding-inline-start: 15px;
                padding-inline-end: 15px;
                font-size: 8px;
                font-weight: 600;
                line-height: 1.3;
            }

            .redColor {
                color: #a71920;
                font-size: 9px;
                font-weight: bold;
            }

            .contactInfo {
                color: black;
                font-size: 9px;
                display: grid;
                grid-template-columns: 1fr 1fr;
                gap: 30px;
                margin-bottom: 10px;
            }

            .contactInfoHeader {
                color: black;
                font-size: 9px;
                font-weight: bold;
            }

            .note {
                color: black;
                font-size: 8px;
            }

            .italic {
                font-style: italic;
            }

            .text-block {
                color: black;
                cursor: pointer;
                margin-top: 1rem;
                transition: color 0.8s;
                margin-bottom: 1rem;
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
                    background-image: url('{{ asset('images/icici-uhid-front.jpg') }}');
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
                    display: grid;
                    grid-template-columns: max-content 1fr;
                    color: black;
                    margin: 60px 0 0 10px;
                    font-size: small;
                }

                .instruction {
                    color: gray;
                    font-size: 6px;
                    font-weight: 600;
                    line-height: 1.3;
                }

                .terms p {
                    color: gray;
                    margin-bottom: 10px;
                    padding-inline-start: 15px;
                    padding-inline-end: 15px;
                    font-size: 6px;
                    font-weight: 600;
                    line-height: 1.3;
                }

                .redColor {
                    color: #a71920;
                    font-size: 6px;
                    font-weight: bold;
                }

                .contactInfo {
                    color: black;
                    font-size: 6px;
                    display: grid;
                    grid-template-columns: 1fr 1fr;
                    gap: 30px;
                    margin-bottom: 10px;
                }

                .contactInfoHeader {
                    color: black;
                    font-size: 7px;
                    font-weight: bold;
                }

                .note {
                    color: black;
                    font-size: 6px;
                }

                .italic {
                    font-style: italic;
                }

                .text-block {
                    color: black;
                    cursor: pointer;
                    margin-top: 1rem;
                    transition: color 0.8s;
                    margin-bottom: 1rem;
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
                    <div class="flip-card-back">
                        <div class="header"></div>
                        <div class="instruction">
                            <ul>
                                <li>
                                    *For services like second opinion, doctor appointment,
                                    facilitating hospitalization, post hospitalization care, call
                                    our Health Assistance Helpline at 040-66274205 (8 AM to 8 PM
                                    Monday to Saturday except public holidays)
                                </li>

                                <li>
                                    This card is nontransferable and is valid at network hospitals
                                    only
                                </li>

                                <li>
                                    Use of this card is governed by the policy terms and conditions
                                </li>

                                <li>
                                    Cashless access to the network provider can only be obtained
                                    when accompanied with an authorization letter issued by ICICI
                                    Lombard GIC Ltd.
                                </li>

                                <li>
                                    In case of non photo cards, to prove your identity, please
                                    produce this card along with any photo id card issued by
                                    Government.
                                </li>

                                <li>
                                    Valid up to policy expiry date or cancellation date whichever is
                                    earlier.
                                </li>
                            </ul>
                        </div>

                        <div class="terms">
                            <p>
                                <span class="redColor">ICICI Lombard Health Care Pays:</span>
                                Hospitalisation bills for admissible claim, subject to prior
                                approval. In case of emergency, approval can be taken within 24
                                hours of hospitalization. <br />
                                <span class="redColor">Insured Pays:</span>All non-medical
                                hospitalization bills and expenses not covered under the policy.
                                <br />
                                <span class="redColor">Mailing Address:</span>ICICI Lombard Health
                                Care, ICICI Bank Tower, Plot Number 12, Financial District,
                                Nanakram Guda, Gachibowli, Hyderabad-500032.
                                <br />
                                <span class="redColor">Registered Address:</span>ICICI Lombard
                                General Insurance Company Limited, ICICI Lombard House, 414, Veer
                                Savarkar Marg, Near Siddhivinayak Temple, Prabhadevi,
                                Mumbai-400025
                            </p>
                        </div>

                        <div class="contactInfo">
                            <div>
                                <span class="contactInfoHeader">Fax Number:</span>(040) 6698 9160/61 <br>
                                <span class="contactInfoHeader">Email:</span>healthcare@icicilombard.com
                            </div>

                            <div>
                                <span class="contactInfoHeader">Toll Free Number:</span>1800 2666 <br>
                                <span class="contactInfoHeader">Visit us at:</span> www.icicilombard.com
                            </div>
                        </div>

                        <div class="note">
                            <span>Insurance is the subject matter of the solicitation. IRDA Reg. No.: 115. CIN:
                                L67200MH2000PLC129408</span><br><span class="italic">"The mentioned covers are add-ons
                                by paying
                                additional premium and available only if opted by the policyholders</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-block"
                id="frontBackView"
                onclick="rotateFunction()">Back View</div>


            <div class="downloadDiv">
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
