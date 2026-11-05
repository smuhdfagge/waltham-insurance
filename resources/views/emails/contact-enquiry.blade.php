<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New enquiry</title>
</head>
<body style="margin:0;padding:0;background:#F4F7FB;font-family:Arial,sans-serif;color:#0B1B33;">
    <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="background:#F4F7FB;padding:32px 0;">
        <tr>
            <td align="center">
                <table role="presentation" width="600" cellpadding="0" cellspacing="0" style="background:#FFFFFF;border:1px solid #E3E9F2;border-radius:16px;overflow:hidden;max-width:600px;">
                    <tr>
                        <td style="background:#0B1B33;padding:24px 32px;">
                            <img src="{{ asset('logo.png') }}" alt="" width="36" height="36" style="display:inline-block;vertical-align:middle;">
                            <span style="font-size:24px;font-weight:bold;color:#FFFFFF;vertical-align:middle;margin-left:12px;">{{ config('company.legal_name') }}</span>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:32px;">
                            <p style="margin:0 0 18px;font-size:16px;line-height:1.8;">You have received a new enquiry from <strong>{{ $submission->name }}</strong>.</p>
                            <p style="margin:0 0 10px;font-size:15px;line-height:1.8;"><strong>Email:</strong> {{ $submission->email }}</p>
                            <p style="margin:0 0 10px;font-size:15px;line-height:1.8;"><strong>Phone:</strong> {{ $submission->phone }}</p>
                            <p style="margin:0 0 10px;font-size:15px;line-height:1.8;"><strong>Subject:</strong> {{ $submission->service ?: 'General enquiry' }}</p>
                            <div style="margin-top:18px;padding:18px;background:#F4F7FB;border-left:4px solid #1453E0;border-radius:12px;font-size:15px;line-height:1.8;">{{ $submission->message }}</div>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
