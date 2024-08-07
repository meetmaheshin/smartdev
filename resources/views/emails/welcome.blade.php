<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Welcome SmartDev3</title>
    <style>
        p {
            margin: 0px !important;
            padding: 0px !important;
        }
    </style>
</head>

<body>
    <table style="margin: 0; background: #f9f5f2; width: 600px; padding:15px; margin:0 auto;font-size: 20px;">
        <tr>
            <td style="text-align:center;padding: 15px 0;"><img src="{{asset('images/logo.png')}}" style="width:200px;"></td>
            {{-- <td style="text-align:center;padding: 15px 0;"><img src="{{asset('images/new-logo.svg')}}" style="width:200px;"></td> --}}
        </tr>
        <tr>
            <td style="font-size: 26px;padding: 15px 0;">Thanks for Registering at SmartDev3</td>
        </tr>
        <tr>
            <td style="padding: 0 0 15px 0;">Hi {{$data['firstname']}} {{$data['lastname']}},</td>
        </tr>
        <tr>
            <td style="padding: 0 0 15px 0;">Thank you for creating your account at SmartDev3. Your account details are as follows:</td>
        </tr>
        <tr>
            <td><b>Email Address:</b> {{$data['email']}}</td>
        </tr>
        <tr>
            <td style="padding: 10px 0;">To sign in to your account, please visit <a href="https://smartdev3.com/">SmartDev3.com</a> </td>
        </tr>
        <tr>
            <td style="padding: 10px 0;">If you have any questions regarding your account, click 'Reply' in your email client and we'll be only too happy to help.</td>
        </tr>
        <tr>
            <td style="padding: 10px 0 0 0;"><b>Smartdev3</b></td>
        </tr>
        <tr>
            <td><a href="https://SmartDev3.com/">smartdev3.com</a></td>
        </tr>
    </table>
</body>

</html>