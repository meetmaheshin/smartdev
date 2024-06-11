<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Email Verification Mail</title>
    <style>
        p {
            margin: 0px !important;
            padding: 0px !important;
        }
    </style>
</head>

<body>
    <table style="margin: 0; background: #f9f5f2; width: 600px; padding:15px; margin:0 auto;font-size: 20px; text-align: center;">
        <tr>
            <td style="text-align:center;padding: 15px 0;"><img src="{{asset('images/logo.png')}}" style="width:200px;"></td>
        </tr>
        <tr>
            <td style="font-size: 24px;padding: 15px 0;font-weight: bold;">Verify your email address to complete your registration</td>
        </tr>
        <tr>
            <td style="padding: 0 0 15px 0;text-align: left;">Hello {{$firstname}},</td>
        </tr>
        <tr>
            <td style="text-align: left;"> Please verify your email address so you can get full access to qualified freelancers eager to tackle your project. </td>
        </tr>
        <tr>
            <td style="padding: 10px 0;text-align: left;"> We're thrilled to have you on board! </td>
        </tr>
        <tr>
            <td style="padding: 10px 0;"><a href="{{ route('user.verify', $token) }}" style="background: #00b050;color: #fff;padding: 7px 10px;font-size: 16px;text-decoration: none;border-radius: 4px;">Verify Email</a></td>
        </tr>
        <tr>
            <td style="padding: 10px 0 0 0;text-align: left;"><b>Thanks for your time,</b></td>
        </tr>
        <tr>
            <td style="text-align: left;"><a href="https://smartdev3.com/">smartdev3.com</a></td>
        </tr>
    </table>
</body>

</html>