<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'google' => [
        'client_id' => '762749737436-vjblilaa7ijs906c3c9f5vgj7v3t78ks.apps.googleusercontent.com',
        'client_secret' => '5drmbvkdCIXqOelFlMHaiExi',
        'redirect' =>  'http://localhost:8000/callback/google',
    ],

    'facebook' => [
        'client_id' => ' 873055789965109',
        'client_secret' => '11cdb2a67bd57c3b9f3f70777a57d536',
        'redirect' => 'http://localhost:8000/callback/facebook',
    ],
    'github' => [
        'client_id' => '79f02d69b8205fe2282b',
        'client_secret' => 'c82b3d193f3bf22b590d13ce47bd1e9da148026c',
        'redirect' => 'http://localhost:8000/callback/github',
    ],


];
