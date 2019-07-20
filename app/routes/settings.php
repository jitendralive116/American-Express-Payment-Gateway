<?php
return [
    'settings' => [
        'displayErrorDetails' => true, // set to false in production
        'addContentLengthHeader' => false, // Allow the web server to send the content-length header

        // Renderer settings
        'renderer' => [
            'template_path' => __DIR__ . '/../../templates/',
        ],

        // Monolog settings
        'logger' => [
            'name' => 'gateway-php-sample-code',
            'path' => isset($_ENV['docker']) ? 'php://stdout' : __DIR__ . '/../logs/app.log',
            'level' => \Monolog\Logger::DEBUG,
        ],
        //Details needed for Merchant creation. Use ReadMe for details on how to set these variables.
        'configArray' => [
            'gatewayBaseUrl' => 'https://gateway-japa.americanexpress.com',
            'pkiBaseUrl' => 'https://gateway-japa.americanexpress.com',
            'hostedSessionUrl' => 'https://gateway-japa.americanexpress.com' . '/form',
            'gatewayUrl' => 'https://gateway-japa.americanexpress.com' . '/api/rest',
            'merchantId' => 'test9828635912',
            'apiUsername' => "merchant." . 'test9828635912',
            'password' => 'e8b3db08f71da80388f8551789d06c05',
            'debug' => 'FALSE',
            'version' => getenv('GATEWAY_API_VERSION') ?: '45' ,
            'currency' => getenv('GATEWAY_DEFAULT_CURRENCY') ?: 'INR',
            'certificatePath' => getenv('GATEWAY_SSL_CERT_PATH'),
            //IMPORTANT: Ensure that you set these flags to TRUE in Production. The Test certificate is self signed and doesn't really need these to be set in Development.
            // By default they are set to PRODUCTION env values
            'verifyPeer' => getenv('VERIFY_PEER') ?: FALSE,
            'verifyHost' => getenv('VERIFY_HOST') ?: 0
        ]

    ],
];
