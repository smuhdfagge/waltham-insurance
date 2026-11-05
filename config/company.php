<?php

/*
|--------------------------------------------------------------------------
| Company details
|--------------------------------------------------------------------------
|
| Everything the public site shows about Waltham lives here. Each value can
| be overridden from .env (COMPANY_*) without touching code. The contact
| form sends enquiries to COMPANY_EMAIL.
|
*/

return [
    'name' => env('COMPANY_NAME', 'Waltham Insurance Brokers'),
    'legal_name' => env('COMPANY_LEGAL_NAME', 'Waltham Insurance Brokers Ltd.'),
    'tagline' => env('COMPANY_TAGLINE', 'Welcome to our Business World'),
    'slogan' => env('COMPANY_SLOGAN', 'Good Hands For The Good Life'),
    'rc_number' => env('COMPANY_RC_NUMBER', 'RC 410208'),
    'founded' => (int) env('COMPANY_FOUNDED', 1990),
    'license' => env('COMPANY_LICENSE', 'National Insurance Commission (NAICOM)'),
    'membership' => env('COMPANY_MEMBERSHIP', 'Nigerian Council of Registered Insurance Brokers (NCRIB)'),

    'email' => env('COMPANY_EMAIL', 'info@waltham.com.ng'),
    'phone' => env('COMPANY_PHONE', '0803 661 3580'),
    'phone_raw' => env('COMPANY_PHONE_RAW', '+2348036613580'),
    'phone_secondary' => env('COMPANY_PHONE_SECONDARY', '0806 771 3959'),
    'phone_secondary_raw' => env('COMPANY_PHONE_SECONDARY_RAW', '+2348067713959'),
    'whatsapp' => env('COMPANY_WHATSAPP'),
    'hours' => env('COMPANY_HOURS'),

    'linkedin' => env('COMPANY_LINKEDIN'),
    'facebook' => env('COMPANY_FACEBOOK'),
    'instagram' => env('COMPANY_INSTAGRAM'),
    'x' => env('COMPANY_X'),

    'head_office' => [
        'name' => 'Head office',
        'address' => env('COMPANY_HEAD_OFFICE', '27, Mahatma Ghandi Street, off Lord Lugard Street, Area 11, Garki, FCT, Abuja.'),
    ],
    'map_query' => env('COMPANY_MAP_QUERY', '27 Mahatma Ghandi Street, Area 11, Garki, Abuja'),
];
