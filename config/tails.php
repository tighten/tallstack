<?php

/*
 * You can place your custom package configuration in here.
 */
return [
    'api_key' => env('TAILS_API_KEY', null),
    'api_endpoint' => 'https://tails.devdojo.com/api/v2',
    'webhook_key' => env('TAILS_WEBHOOK_KEY', null),

    'blade_tags' => [
        '<resourceloop>' => '@foreach(\App\Models\Resource::where("approved", 1)->get() as $resource)',
        '</resourceloop>' => '@endforeach',
    ]
];
