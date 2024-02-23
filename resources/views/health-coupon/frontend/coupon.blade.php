<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Security-Policy"
          content="upgrade-insecure-requests">
    <title>Coupon</title>
    <style>
        html,
        body {
            display: block;
            font-family: 'Adobe Gothic Std', sans-serif !important;
            /* Add the Adobe Gothic font */
        }

        /* Add additional styles for customization */
        p {
            font-family: 'Adobe Gothic Std', sans-serif !important;
        }

        strong {
            font-family: 'Adobe Gothic Std', sans-serif !important;
            font-weight: bold;
        }

        img {
            display: inline-block;
            vertical-align: middle;
            max-width: 100%;
            border: black solid 1px;
            border-radius: 10px;
            margin: -2px;
        }

        .header {
            position: absolute;
            top: 80px;
            left: 30px;
            font-size: 40px;
            color: #F07E01;
            margin-top: 20px;
            position: absolute;
            line-height: 28px;
            font-weight: bold;
        }

        .info {
            position: absolute;
            top: 150px;
            left: 30px;
            font-size: 16px;
            font-weight: 300;
            color: black;
            margin-top: 20px;
            position: absolute;
            bottom: 0;
            line-height: 25px;
        }

        .hospital-info {
            position: absolute;
            top: 250px;
            left: 30px;
            font-size: 20px;
            color: #666;
            margin-top: 20px;
            position: absolute;
            bottom: 0;
            line-height: 25px;
        }

        .info-header {
            font-size: 18px;
        }

        .consultancy_discount_percentage_header {
            position: absolute;
            top: 130px;
            right: 45px;
            font-size: 25px;
            color: black;
            margin-top: 20px;
            position: absolute;
            line-height: 20px;
            font-weight: bolder;
        }

        .consultancy_discount_percentage {
            position: absolute;
            top: 200px;
            right: 45px;
            font-size: 70px;
            color: #F07E01;
            margin-top: 20px;
            position: absolute;
            line-height: 20px;
            font-weight: bolder;
        }

        .treatment_discount_percentage_header {
            position: absolute;
            top: 230px;
            right: 45px;
            font-size: 20px;
            color: black;
            margin-top: 20px;
            position: absolute;
            line-height: 20px;
            font-weight: bolder;
        }

        .treatment_discount_percentage {
            position: absolute;
            top: 300px;
            right: 45px;
            font-size: 70px;
            color: #F07E01;
            margin-top: 20px;
            position: absolute;
            line-height: 20px;
            font-weight: bolder;
        }

        /* Add more custom styles as needed */
    </style>
</head>

<body style="background:white;">
    <div style="position: relative; padding-bottom: 80px;">
        <table style="width: 100%;">
            <tbody style="padding: 0;">
                <tr>
                    <td style="max-width: 100%">
                        {{-- <img style="display: inline-block; vertical-align: middle; max-width: 200px; margin-right: 20px;"
                             src="{{ str_replace('http://', 'https://', config('app.url')) }}/assets/img/globe_logo.png"> --}}
                        <img src="{{ asset('/images/health-coupon/health_coupon.jpg') }}">
                    </td>
                    <td style="max-width: 50%; text-align: right">



                    </td>
                </tr>
            </tbody>
        </table>

        <p class="header">
            <strong>
                <span>Discount Voucher</span><br>
            </strong>
        </p>

        @if ($discount['consultancy_discount_percentage'])
            <p class="consultancy_discount_percentage_header">
                Consultancy
            </p>

            <p class="consultancy_discount_percentage">
                <strong>
                    <span>{{ $discount['consultancy_discount_percentage'] }} %</span><br>
                </strong>
            </p>
        @endif

        @if ($discount['treatment_discount_percentage'])
            <p class="treatment_discount_percentage_header">
                Investigations/Diagnosis
            </p>

            <p class="treatment_discount_percentage">
                <strong>
                    <span>{{ $discount['treatment_discount_percentage'] }} %</span><br>
                </strong>
            </p>
        @endif



        <p class="info">
            <span class="info-header">Name :</span> <span>{{ $data['name'] }}</span><br>
            <span class="info-header">E-Mail :</span> <span>{{ $data['email'] }}</span><br>
            <span class="info-header">Locality :</span> <span>{{ $data['locality'] }}</span><br>
        </p>

        <p class="hospital-info">
            <strong>
                <span class="info-header">Hospital Name :</span>
                <span>{{ ucwords(str_replace('_', ' ', $data['hospital'])) }}</span><br>
                <span class="info-header">Hospital Area :</span> <span>{{ $data['area'] }}</span>
            </strong>

        </p>

        <p style="font-weight: 500; position:absolute; top: 360px;left:500px; ">
            Valid Date : {{ \Carbon\Carbon::parse($data['current_date'])->format('d M, Y') }}
        </p>


    </div>
</body>

</html>
