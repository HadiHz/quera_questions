<?php

    return [

        // WHITELIST EXAMPLE
        'whitelist' => [
            'allowed_group_1' => [
            ],
        ],

        // BLACKLIST EXAMPLE
        'blacklist' => [
            'blocked_ips_1' => [
                //'127.0.0.1',
            ],
        ],

        // RESPONSE SETTINGS
        'redirect_to'      => '',   // URL TO REDIRECT IF BLOCKED (LEAVE BLANK TO THROW STATUS)
        'response_status'  => 403,  // STATUS CODE (403, 404 ...)
        'response_message' => ''    // MESSAGE (COMBINED WITH STATUS CODE)

    ];
