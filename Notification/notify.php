<?
//To include js and css files, add floor12\notification\NotificationAsset as dependency in your AppAsset:

use floor12\notification\NotificationAsset;
use yii\web\AssetBundle;

class AppAsset extends AssetBundle
{
    ...
    public $depends = [
        NotificationAsset::class
    ];
}

// Using as JS

// To show notification in browser just pass message text to one of the f12notification object methods:

f12notification.info(text);    //information message;
f12notification.success(text); //success message;
f12notification.error(text);   //error message;

//For example:

if (userSucces == true)
  f12notification.success('Registration success'.)
else
  f12notification.error('Registration failed.')

//Using as PHP

//Its also possible to show notifications by passing message text to one of the floor12\notification\Notification methods:

use floor12\notification\Notification;

Notification::info('The form is loading...');
Notification::error('Pleas fill all required fields');
Notification::success('This model is saved');
?>