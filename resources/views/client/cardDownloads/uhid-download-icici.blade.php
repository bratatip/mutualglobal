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

            /* .container {
                display: flex;
                align-items: center;
                justify-content: space-around;
            } */

            /* .flip-card-front, */


            .flip-card-front {
                position: relative;
                width: 350px;
                height: 225px;
                border-radius: 1rem;
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
                border-radius: 1rem;
            }

            .clientData {
                color: black;
                font-size: 12px;
                margin: 80px 0 0 20px;
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

            .flip-card-back {
                background-color: rgba(247, 237, 237, 0.363);
                position: absolute;
                right: -5px;
                top: 0;
                width: 350px;
                height: 225px;
                border-radius: 1rem;
                justify-content: center;
                border-style: groove;
                border-color: rgba(185, 74, 27, 1);
                border-width: 1px;
                justify-items: center;
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
                font-size: 6px;
                font-weight: 600;
                line-height: 1.3;
                margin-inline-start: 1px;
                margin-inline-end: 10px;
                margin-top: 20px;
            }

            li {
                margin-left: -20px;
                margin-right: 10px;
            }

            .terms {
                margin-top: -10px;
            }

            .terms p {
                color: gray;
                margin-bottom: 10px;
                font-size: 6px;
                font-weight: 600;
                line-height: 1.3;
                margin-left: 15px;
                margin-right: 15px;
            }

            .redColor {
                color: #a71920;
                font-size: 6px;
                font-weight: bold;
            }

            .contactInfo {
                display: inline-block;
                color: black;
                font-size: 7px;
                gap: 30px;
                margin-bottom: 10px;
                margin-left: 15px;
            }

            .contactInfoHeader {
                color: black;
                font-size: 7px;
                font-weight: bold;
            }

            .note {
                color: black;
                font-size: 6px;
                margin-left: 15px;
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
                        <span style="font-weight: bold;">Valid From</span>
                        <span><span style="font-weight: bold; margin-left: 38px;">:</span>{{ date('d-M-Y', strtotime($data['doc'])) }}</span>
                        <span style="font-weight: bold; margin-left:10px;">Valid To :</span>
                        <span>{{ date('d-M-Y', strtotime($data['doe'])) }}</span>
                    </div>
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

                <div style="position: absolute; top:155px; left:150px;">
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


    </body>

</html>
