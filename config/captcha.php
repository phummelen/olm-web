<?php

return [
    'secret' => env('VITE_GOOGLE_RECAPTCHA_SECRET'),
    'sitekey' => env('VITE_GOOGLE_RECAPTCHA_KEY'),
    'options' => [
        'timeout' => 30,
    ],
];
