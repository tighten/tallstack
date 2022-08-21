<?php

/*
 * You can place your custom package configuration in here.
 */
return [
    'api_key' => env('TAILS_API_KEY', null),
    'api_endpoint' => 'https://devdojo.com/api/v1',
    'webhook_key' => env('TAILS_WEBHOOK_KEY', null),

    'view_folder' => 'tails',
    'blade_tags' => [
        '<resourceloop>' => '@foreach(\App\Models\Resource::where("approved", 1)->get() as $resource)',
        '</resourceloop>' => '@endforeach',
    ]
];