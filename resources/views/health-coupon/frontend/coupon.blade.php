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
        }
    </style>
</head>

<body style="background:white; font-family: 'Quicksand', sans-serif; !important;">
    <div style="position: relative; padding-bottom: 80px;">
        <table style="width: 100%;">
            <tbody style="padding: 0;">
                <tr>
                    <td style="max-width: 100%">
                        {{-- <img style="display: inline-block; vertical-align: middle; max-width: 200px; margin-right: 20px;"
                             src="{{ str_replace('http://', 'https://', config('app.url')) }}/assets/img/globe_logo.png"> --}}
                        <img style="display: inline-block; vertical-align: middle; max-width: 100%;border:#333 solid 1px; border-radious:15px;"
                             src="{{ asset('/images/health-coupon/health_coupon.jpg') }}">
                    </td>
                    <td style="max-width: 50%; text-align: right">



                    </td>
                </tr>
            </tbody>
        </table>

        <p
           style="position: absolute; top: 60px; left: 50px; font-size: 24px; color: #2e2e2ebc; margin-top: 20px; position: absolute; line-height: 28px; font-weight: bold; font-family: 'Arial', sans-serif; text-transform: uppercase; font-style:italic;">
            <strong>
                <span>Discount Voucher</span><br>
            </strong>
        </p>

        @if ($discount['consultancy_discount_percentage'])
            <p
               style="position:absolute; top: 130px;right:45px; font-size: 30px; color: #0e0e0ea2; margin-top: 20px; position: absolute; line-height: 20px; font-weight:bolder; font-style:'Calisto MT' !important;">
                Consultancy
            </p>

            <p
               style="position:absolute; top: 200px;right:45px; font-size: 70px; color: #0e0e0ea2; margin-top: 20px; position: absolute; line-height: 20px; font-weight:bolder; font-style:'Calisto MT' !important;">
                <strong>
                    <span>{{ $discount['consultancy_discount_percentage'] }} %</span><br>
                </strong>
            </p>
        @endif

        @if ($discount['treatment_discount_percentage'])
            <p
               style="position:absolute; top: 230px;right:45px; font-size: 20px; color: #0e0e0ea2; margin-top: 20px; position: absolute; line-height: 20px; font-weight:bolder; font-style:'Calisto MT' !important;">
                Investigations/diagnosis
            </p>

            <p
               style="position:absolute; top: 300px;right:45px; font-size: 70px; color: #0e0e0ea2; margin-top: 20px; position: absolute; line-height: 20px; font-weight:bolder; font-style:'Calisto MT' !important;">
                <strong>
                    <span>{{ $discount['treatment_discount_percentage'] }} %</span><br>
                </strong>
            </p>
        @endif



        <p
           style="position:absolute; top: 150px;left:50px; font-size: 16px; color: #3606f5; margin-top: 20px; position: absolute; bottom: 0; line-height: 20px; font-style: italic;">
            <span>{{ $data['name'] }}</span><br>
            <span>{{ $data['email'] }}</span><br>
            <span>{{ $data['locality'] }}</span><br>
        </p>

        <p
           style="position:absolute; top: 250px;left:50px; font-size: 20px; color: #666; margin-top: 20px; position: absolute; bottom: 0; line-height: 25px; font-style: italic;">
            <strong>
                <span>{{ ucwords(str_replace('_', ' ', $data['hospital'])) }}</span><br>
                <span>{{ $data['area'] }}</span>
            </strong>

        </p>

        <p style="font-weight: 500; position:absolute; top: 360px;left:450px; ">
            Valid For 1 Visit on: {{ $data['current_date'] }}
        </p>


    </div>
</body>

</html>
