<!DOCTYPE html>
<html>

<head>
    <title>Smartflyer Crm</title>
    <style type="text/css">
        #mail>div>div:nth-child(2) {
            box-shadow: 0px 4px 27px #E1E1E1;
            display: inline-block;
            max-width: 50%;
            margin: 0 auto !important;
            padding: 40px;
            text-align: left;
            font-weight: 400;
            font-size: 16px;
            line-height: 28px;
        }

        #mail>div>div:nth-child(1) {
            text-align: center;
            max-width: 50%;
            padding: 20px 40px 30px;
            margin: 0 auto;
        }

        #mail>div {
            text-align: center;
        }

        #mail>div>div:nth-child(2) a button {
            width: 100%;
            display: inline-block;
            background: #14347d;
            color: #fff;
            padding: 17px 10px;
            text-transform: uppercase;
            border: 1px solid transparent;
            text-align: center;
            letter-spacing: 0.24em;
            text-transform: uppercase;
            font-style: normal;
            font-weight: 700;
            font-size: 16px;
            line-height: 24px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="image" style="text-align: center; max-width: 50%; padding: 20px 40px 30px;">
        <img src="{{ asset('assets/images/logo-blue.png') }}">
    </div>
    <div class="mail-template"
        style="box-shadow: 0px 4px 27px #E1E1E1; display: inline-block; max-width: 50%; margin: 0 auto !important; padding: 40px; text-align: left; font-weight: 400; font-size: 16px; line-height: 28px;">
        <h1 style="line-height: normal;">Thanks for your interest in the Elevate Partnership</h1>
        <div style="font-family: 'Montserrat';font-style: normal;font-weight: 400;font-size: 16px;line-height: 28px;">
            <p>Thank you for your interest in SmartFlyer Elevate, our premier partnership program. Please complete this
                form
                in
                order to be considered for membership. Our team will analyze your responses and determine wheter your
                business
                is appropriately aligned with the mission/vision of the SmartFlyer Elevate program.</p>
            <br>
            <p style=" margin-bottom: 0;">All the best,</p>
            <p style=" margin-top: 0"> SmartFlyer Team</p>
        </div>
        <a href="{{ $mailData }}"><button
                style=" width: 100%; display: inline-block; background: #14347d; color: #fff; padding: 17px 10px; text-transform: uppercase; border: 1px solid transparent; text-align: center; letter-spacing: 0.24em; text-transform: uppercase; font-style: normal; font-weight: 700; font-size: 16px; line-height: 24px; cursor: pointer;">Complete
                elevate partnership form</button></a>
    </div>
    <div style="width: 50%; padding: 26px 40px 0;">
        <ul style="padding: 0; display: flex; align-items: center; justify-content: center;">
            <li style="list-style: none;"><a href="javascript:void(0)"><img
                        src="{{ asset('assets/images/fb.png') }}"></a></li>
            <li style="list-style: none; padding: 0 24px;"><a href="javascript:void(0)"><img
                        src="{{ asset('assets/images/instagram.png') }}"></a></li>
            <li style="list-style: none;"><a href="javascript:void(0)"><img
                        src="{{ asset('assets/images/pinterest.png') }}"></a></li>
        </ul>
        <div
            style="font-family: Trade Gothic LT Pro; color: rgba(0, 0, 0, 1);padding: 17px 0 8px; font-style: normal; font-weight: 400; font-size: 14px; line-height: 21px;    text-align: center;">
            © Copyright 2021 SmartFlyer. All rights reserved.</div>
        <div>
            <ul style="    display: flex; align-items: center; justify-content: center; padding: 0;margin: 0">
                <li style="list-style: none;color: #1D3C86;">
                    <a href="#"
                        style="color: #1D3C86;text-decoration: underline;font-size: 14px;line-height: 21px;">Unsubscribe</a>
                    |
                    <a href="#"
                        style="color: #1D3C86;text-decoration: underline;font-size: 14px;line-height: 21px;">Manage
                        Preferences</a>
                </li>
            </ul>
        </div>
    </div>
</body>

</html>
