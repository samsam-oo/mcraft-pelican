<?php

return [
    'secret' => env('MCRAFT_SSO_SECRET'),
    'token' => [
        'length' => 48,
        'lifetime' => 60
    ],
];
