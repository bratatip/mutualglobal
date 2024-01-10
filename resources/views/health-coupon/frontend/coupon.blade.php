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

        <p
           style="position:absolute; top: 200px;right:45px; font-size: 70px; color: #0e0e0ea2; margin-top: 20px; position: absolute; line-height: 20px; font-weight:bolder; font-style:'Calisto MT' !important;">
            <strong>
                <span>20 %</span><br>
            </strong>

        </p>

        <p
           style="position:absolute; top: 150px;left:50px; font-size: 20px; color: #666; margin-top: 20px; position: absolute; bottom: 0; line-height: 35px; font-style: italic;">
            <strong>
                <span>{{ $data['name'] }}</span><br>
                <span>{{ $data['email'] }}</span><br>
                <span>{{ $data['locality'] }}</span><br>
                <span>{{ ucwords(str_replace('_', ' ', $data['hospital'])) }}</span>
            </strong>

        </p>



        {{-- <p style="font-size: 16px; line-height: 1.5; color: #666; margin-top: 30px; margin-bottom: 20px;"><strong>Please
                advise
                of the following candidate:</strong></p>


        <div style="font-size: 15px; line-height: 1.5; color: #333; margin-bottom: 20px;">

            <p><strong>NAME: </strong>Sumit</p>

            <p><strong>RATE: </strong> u38743</p>
            <p><strong>RATE AMOUNT: </strong>43jiu</p>
            <p><strong>NOTES: </strong> fdkjkgkjhfd8er</p>
        </div>

        <hr style="border-color: #e25e14; border-color: #e25e14; border-top-width: 2px; margin: 30px 0 20px;">

        <div style="font-size: 15px; line-height: 1.5; color: #333; margin-bottom: 20px;">

            <p style="font-size: 16px; line-height: 1.5; color: #666; margin-top: 30px; margin-bottom: 20px;">
                <strong>Sourced By:</strong>
            </p>

            <p><strong>Agency Name:</strong> hiureyiutureiytiureyt</p>
            <p><strong>Agency Key Contact Name:</strong> kjwhf984378</p>
            <p><strong>Agency Key Contact Phone Number:</strong> dh9847874</p>
            <p><strong>Agency Key Contact Email:</strong> 9843798jehthjkfd</p>
        </div> --}}
        {{-- <p
           style="text-align: center; font-size: 14px; color: #333; margin-top: 20px; position: absolute; bottom: 0; line-height: 20px; font-style: italic; ">
            <span style="text-decoration: underline">Not intended to be used as criteria for hire</span><br>
            For more information regarding the Professional Sourcing Solutions Platform and the SourceMe app, please
            contact <strong style="text-decoration: underline">info@professionalsourcingsolutions.ca</strong>
        </p> --}}
    </div>
</body>

</html>
