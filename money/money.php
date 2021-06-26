<?
// Global Settings

// You can globally set the plugin options for your money format across the application in the params section of your Yii configuration file. You need to set the maskMoneyOptions in your Yii application params. For example:

'params' => [
    'maskMoneyOptions' => [
        'prefix' => 'US$ ',
        'suffix' => ' c',
        'affixesStay' => true,
        'thousands' => ',',
        'decimal' => '.',
        'precision' => 2, 
        'allowZero' => false,
        'allowNegative' => false,
    ]
]
//Formatter Settings

// If you have not setup params like above, the plugin will default the thousandSeparator and decimalSeparator from Yii::$app->formatter settings in your configuration file.
'components' => [
    'formatter' => [
        'class' => 'yii\i18n\formatter',
        'thousandSeparator' => ',',
        'decimalSeparator' => '.',
    ]
]
// MaskMoney

// You can configure the widget as shown below. Any plugin option not passed, will be defaulted from the above two sections (params and formatter). Note that properties directly set in pluginOptions at the widget level as shown below, will override other global settings.
use kartik\money\MaskMoney;
echo MaskMoney::widget([
    'name' => 'currency',
    'value' => 122423.18,
    'pluginOptions' => [
        'prefix' => '$ ',
    ],
]); 


?>