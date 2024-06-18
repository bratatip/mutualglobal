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


        .leave-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            font-size: 14px;
            font-weight: 500px;
            color: #777777;
        }

        .leave-table th,
        .leave-table td {
            border: 1px solid #dddddd;
            padding: 8px;
            text-align: left;
        }

        .leave-table th {
            background-color: #f5f5f5;
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
                            <img src="{{ asset('/images/mail_logo.png') }}"
                                 alt="Logo"
                                 width="200"
                                 height="50"
                                 style="height:auto;display:block;" />
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:0px 30px 0px 30px;">
                            <p>Hello, Admin !</p>

                            <p
                               style="font-size:14px; line-height: 18px; font-weight: 500px; color:#777777; margin-top:5px;">
                               A new client has been registered. Here are the details:
                            </p>

                    </tr>

                    <tr>
                        <td style="padding:0px 30px 0px 30px;">
                            <table class="leave-table">
                                <tr>
                                    <th>Applicant</th>
                                    <td>{{ $clientData->name }}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{{ $clientData->email }}</td>
                                </tr>
                                <tr>
                                    <th>Phone</th>
                                    <td>{{ $clientData->phone }}</td>
                                </tr>
                                <tr>
                                    <th>Registered on</th>
                                    <td>{{ \Carbon\Carbon::parse($clientData->created_at)->format('d M, Y (h:i A)') }}
                                    </td>
                                </tr>
                                
                            </table>
                        </td>
                    </tr>


                    <tr>
                        <td style="padding:0px 30px 0px 30px;">
                            <p
                               style="font-size:14px; line-height: 18px; font-weight: 500px; color:#777777; margin-top:15px;">
                                In order to access you profile, please <a href="{{ config('app.url') }}">click Here</a>
                            <p>

                        </td>
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
