<!DOCTYPE html>
<html lang="en"
      xmlns="http://www.w3.org/1999/xhtml"
      xmlns:o="urn:schemas-microsoft-com:office:office">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width,initial-scale=1">
    <meta name="x-apple-disable-message-reformatting">
    <title></title>

    <style>
        table,
        td,
        div,
        h1,
        p {
            font-family: Arial, sans-serif;
        }
    </style>
</head>

<body style="margin:0;padding:0; ">
    <table role="presentation"
           style="background-color: #f5f5f5; width:100%;border-collapse:collapse;border:0;border-spacing:0;  height:100vh;">
        <td align="center"
            style="padding:0;">
            <table role="presentation"
                   width="602"
                   style="width:602px;border-collapse:collapse; border-spacing:0; text-align:left; border: 1px solid #dddddd;
                box-shadow: 5px 8px 15px rgb(0 0 0 / 12%); border-radius:15px;">

                <tbody style="background:#fff; ">
                    <tr>
                        <td align="center"
                            style="padding:5px 5px 5px 5px;">
                            <img src="{{ asset('/images/health-coupon/mail_logo.png') }}"
                                 alt="Logo"
                                 width="200"
                                 height="50"
                                 style="height:auto;display:block;" />
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:0px 30px 0px 30px;">
                            <p>Dear Sir/Madam,</p>
                            <p
                               style="font-size:14px; line-height: 18px; font-weight: 500px; color:#777777; margin-top:5px;">
                                Hope you are doing well!
                            </p>

                            <p
                               style="font-size:14px; line-height: 18px; font-weight: 500px; color:#777777; margin-top:5px;">
                                As a member of the MGIB community, we are thrilled to offer you a special discount of
                                20% for services at {{ $data['hospital'] }}.

                            </p>

                            <p
                               style="font-size:14px; line-height: 18px; font-weight: 500px; color:#777777; margin-top:5px;">
                                To redeem your discount, please present the attached coupon during your visit to
                                {{ $data['hospital'] }}. The offer is valid until [expiration date], so we encourage you
                                to
                                take advantage of this opportunity at your earliest convenience.

                            </p>
                            <p
                               style="font-size:14px; line-height: 18px; font-weight: 500px; color:#777777; margin-top:5px;">
                                We appreciate your continued support and hope this discount facilitates your access to
                                quality healthcare services.

                            </p>
                    </tr>

                    <tr>
                        <td style="padding:0px 30px 42px 30px;">

                            <p
                               style="margin-top: 0; margin-bottom: 0; font-size: 12px; color: #a8adad; font-style: italic;">
                                Disclaimer: This email and any files transmitted with it are confidential and intended
                                solely for the use of the individual or entity to whom they are addressed.</p>
                        </td>
                    </tr>

                </tbody>
            </table>
        </td>
        </tr>
    </table>
</body>

</html>
