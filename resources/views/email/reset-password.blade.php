<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Your Password</title>
</head>
<body style="font-family: Arial, sans-serif; padding: 20px; background-color: #f4f4f4;">
    <div style="max-width: 600px; margin: 0 auto; background: #fff; padding: 20px; border-radius: 5px;">
        <h2 style="text-align: center; color: #333;">Password Reset Request</h2>
        <p>Hello {{ $name }},</p>
        <p>You requested to reset your password. Click the button below to proceed:</p>
        <p style="text-align: center;">
           @if( $isAdmin == 1 )
            <a href="{{ route('admin.password.reset', ['token' => $token, 'email' => $email]) }}" style="display: inline-block; background: #007bff; color: #fff; padding: 10px 20px; text-decoration: none; border-radius: 5px;">
                Reset Password
            </a> 
           @else
                <a href="{{ route('password.reset', ['token' => $token, 'email' => $email]) }}" style="display: inline-block; background: #007bff; color: #fff; padding: 10px 20px; text-decoration: none; border-radius: 5px;">
                    Reset Password
                </a>     
           @endif       
        </p>
        <p>If you didn’t request this, please ignore this email.</p>
        <p>Thank you!</p>
    </div>
</body>
</html>
