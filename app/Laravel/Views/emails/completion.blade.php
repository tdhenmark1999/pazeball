<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Thesis Application</title>
    <style>
        body{ font-family: 'Calibri', sans-serif; }
    </style>
</head>
<body>
    
    <table style="width: 500px; border: 1px dotted #323232; padding: 15px;">
        <tr>
            <td >
                <table style="width: 100%">
                    <tr style="font-size: 24px;">
                        <td><strong>{{ $details['title']  }}</strong></td>
                    </tr>
                </table>
            </td>
        </tr> 
        <tr>
            <td>
               please click the link <a href="{{ route('frontend.auth.email_verification', [$details['body'] ]) }}"> Verify Account</a>  <br><br><br>
            </td>
        </tr>
        <tr>
        
        </tr>
        <tr>
           {{--  <td style="letter-spacing: 2px; text-align: center; padding: 25px;"><a href="{{route('generic.reset_password',[$token])}}" style="padding: 10px 15px; background-color: #217a42; color: #e2e2e2; border-radius: 10px; text-decoration: none;" target="_blank"><strong>RESET PASSWORD</strong></a></td> --}}
        </tr>
        
        <tr>
            {{-- <td style="letter-spacing: 2px; text-align: center;"><a href="{{route('generic.reset_password',[$token])}}" target="_blank"><strong>sada</strong></a></td> --}}
        </tr>
        <tr style="margin-top-top: 40px;">
            {{-- <td ><br><br><br>Please ignore this message if you didn't request and send a report to our contact us form.<br><br><br></td> --}}
        </tr>
        <tr style="margin-top-top: 50px">
            <td >Regards,<br>Support Team</td>
        </tr>
    </table>
</body>
</html>