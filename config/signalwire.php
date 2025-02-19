<?php

return [

    // The default phone number to send from
    'from'=>env('SMS_FROM'),

    // API credentials defined in your SignalWire space
    'credentials'=>[
        env('SIGNALWIRE_API_PROJECT'),  // 'XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX'
        env('SIGNALWIRE_API_TOKEN')     // 'PTXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX'
    ],

    // Application log output settings
    'log'=>[
        'include_context' => env('SIGNALWIRE_LOG_CONTEXT',true), // Include a verbose context object in log entries where possible
        'success_logging' => env('SIGNALWIRE_LOG_SUCCESSFUL','info') // Log level for successfully sent messages (NULL or FALSE disables)
    ]

];
