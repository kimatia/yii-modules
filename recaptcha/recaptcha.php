<?
// Usage

// Once the extension is installed, simply use it in your code by :

// add this to your components main.php

'components' => [
    ...
    'reCaptcha3' => [
        'class'      => 'kekaadrenalin\recaptcha3\ReCaptcha',
        'site_key'   => 'site_key_###',
        'secret_key' => 'secret_key_###',
    ],

//     and in your model

// acceptance_score the minimum score for this request (0.0 - 1.0) or null

public $reCaptcha;
 
public function rules()
{
 	return [
 		...
 		 [['reCaptcha'], \kekaadrenalin\recaptcha3\ReCaptchaValidator::className(), 'acceptance_score' => 0]
 	];
}

<?= $form->field($model, 'reCaptcha')->widget(\kekaadrenalin\recaptcha3\ReCaptchaWidget::class) ?>

// For tests

// When use YII_ENV_TEST in index-test.php then disabled recaptcha's validate:

defined('YII_ENV') or define('YII_ENV', 'test');
?>