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
                margin-top: 5rem;
                /* margin-left: 15%; */
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

            /* .flip-card-front, */
            .flip-card-back {
                background-color: rgba(247, 237, 237, 0.363);
                position: absolute;
                display: grid;
                width: 100%;
                height: 100%;
                -webkit-backface-visibility: hidden;
                backface-visibility: hidden;
                border-radius: 1rem;
                justify-content: center;
                /* box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.432); */
                border-style: groove;
                border-color: rgba(185, 74, 27, 1);
                border-width: 1px;
                justify-items: center;
            }

            .flip-card-front {
                background-image: url('{{ asset('images/uhid-front.jpg') }}');
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
                /* box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.432); */
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
            }

            .instruction {
                color: gray;
                font-size: 8px;
                font-weight: 600;
                line-height: 1.3;
                margin-inline-start: -10px;
                margin-inline-end: 10px;
                margin-top: 20px;
            }

            .terms p {
                color: gray;
                margin-bottom: 10px;
                font-size: 8px;
                font-weight: 600;
                line-height: 1.3;
                margin-inline-end: 10px;
                margin-inline-start: 10px;
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
            }

            @media print {
                /* .body {
                    margin-left: 15% !important;
                } */

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
                    /* Set a background color for printing */
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

    <body>
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
    </body>

    <script>
        window.onload = function() {
            window.print();
        }
    </script>

</html>
