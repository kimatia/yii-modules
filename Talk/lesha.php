<?

Configure drivers for social networks in app config

'components' => [
    // ...
    'letsTalk' => [
        'class' => \vintage\lets\talk\configurators\DriversConfig::class,
        'messengers' => [
            'skype' => [
                'class' => \vintage\lets\talk\drivers\Skype::class,
                'config' => [
                    'contactData' => '', // nickname here
                    'isCall' => true,
                ],
            ],
            'snapchat' => [
                'class' => \vintage\lets\talk\drivers\Snapchat::class,
                'config' => [
                    'contactData' => '', // nickname here
                ],
            ],
            'telegram' => [
                'class' => \vintage\lets\talk\drivers\Telegram::class,
                'config' => [
                    'contactData' => '', // nickname here
                ],
            ],
            'viber' => [
                'class' => \vintage\lets\talk\drivers\Viber::class,
                'config' => [
                    'contactData' => '', // phone number here
                ],
            ],
            'whatsApp' => [
                'class' => \vintage\lets\talk\drivers\WhatsApp::class,
                'config' => [
                    'contactData' => '', // phone number here
                ],
            ],
        ],
    ],
],

Call widget in view file

<?= \vintage\lets\talk\widgets\LetsTalk::widget(); ?>