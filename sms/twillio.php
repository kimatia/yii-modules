<?
//Then add a new sms component to your main-local.php (advanced) or web.php (basic) like so:

'sms' => [
    'class' => 'wadeshuler\sms\twilio\Sms',

    // Advanced app use '@common/sms', basic use '@app/sms'
    'viewPath' => '@common/sms',     // Optional: defaults to '@app/sms'

    // send all sms to a file by default. You have to set
    // 'useFileTransport' to false and configure the messageConfig['from'],
    // 'sid', and 'token' to send real messages
    'useFileTransport' => true,

    'messageConfig' => [
        'from' => '+15552221234',  // Your Twilio number (full or shortcode)
    ],

    // Find your Account Sid and Auth Token at https://twilio.com/console
    'sid' => 'ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX',
    'token' => 'your_auth_token',

    // Tell Twilio where to POST information about your message.
    // @see https://www.twilio.com/docs/sms/send-messages#monitor-the-status-of-your-message
    //'statusCallback' => 'https://example.com/path/to/callback',      // optional
],

    // Note: This package does not provide a route for the statusCallback. You will need to create your own route to handle this. It isn't necessary to send SMS messages with Twilio, and is used for deeper tracking of each message's status.

//Then add a new sms component to your main-local.php (advanced) or web.php (basic) like so:

'sms' => [
    'class' => 'wadeshuler\sms\twilio\Sms',

    // Advanced app use '@common/sms', basic use '@app/sms'
    'viewPath' => '@common/sms',     // Optional: defaults to '@app/sms'

    // send all sms to a file by default. You have to set
    // 'useFileTransport' to false and configure the messageConfig['from'],
    // 'sid', and 'token' to send real messages
    'useFileTransport' => true,

    'messageConfig' => [
        'from' => '+15552221234',  // Your Twilio number (full or shortcode)
    ],

    // Find your Account Sid and Auth Token at https://twilio.com/console
    'sid' => 'ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX',
    'token' => 'your_auth_token',

    // Tell Twilio where to POST information about your message.
    // @see https://www.twilio.com/docs/sms/send-messages#monitor-the-status-of-your-message
    //'statusCallback' => 'https://example.com/path/to/callback',      // optional
],

    // Note: This package does not provide a route for the statusCallback. You will need to create your own route to handle this. It isn't necessary to send SMS messages with Twilio, and is used for deeper tracking of each message's status.

// Usage

// You can send SMS messages two ways. One uses a view file, just like how the mailer does, by passing it in the compose() call. Only difference is, you don't specify html/text array keys. Just pass the string, since text messages don't use html.
// With a view file

// In your controller/model use it like so:

Yii::$app->sms->compose('test-message', ['name' => 'Wade'])
    //->setFrom('12345')  // if not set in config, or to override
    ->setTo('+15558881234')
    ->send();

// You will need a view file located where your viewPath points to. By default, it is @app/sms. You can see in the configuration above that we overrode it to @common/sms. This is similar to the location Yii2 Advanced uses for the email views, the "common" directory.

// View File: common/sms/test-message.php (advanced) or /sms/test-message.php (basic)

Hello <?= $name ?> This is a test!

<!-- Thanks! -->

?>