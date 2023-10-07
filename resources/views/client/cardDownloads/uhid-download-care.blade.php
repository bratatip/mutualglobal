<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport"
            content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
        <style>

        </style>
    </head>

    <body>

        <div class="flip-card-front">
            <img src="{{ asset('images/care-uhid-front.jpg') }}"
                alt="..."
                style="width: 50%; height: 22%;  position: absolute; top: 0; left: 0; z-index: 1;">
            <div class="clientData">
            </div>
        </div>

        <div>
            <img src="{{ asset('images/care-uhid-back.jpg') }}"
                alt="..."
                style="width: 50%; height: 22%;  position: absolute; top: 0; left: 51%; z-index: 1;">
        </div>
    </body>

</html>
