<?

use yii\web\Controller;

class SiteController extends Controller
{
    public function actions()
    {
        return [
            ...
            'captcha' => [
                'class' => 'lesha724\MathCaptcha\MathCaptchaAction',
                //'imageLibrary'=>'imagick', only 'gd' and 'imagick' 
                'fixedVerifyCode' => YII_ENV_TEST ? '42' : null,
                //не задавайте значение foreColor и backColor (они заполняться случайными цветами)
                //остльные опции http://www.yiiframework.com/doc-2.0/yii-captcha-captchaaction.html
            ],
        ];
    }
}

<?php $form = ActiveForm::begin([]); ?>

....

<?= $form->field($model, 'verifyCode')->widget(\yii\captcha\Captcha::className(), [
    'template' => '{image} {input}',
]) ?>

....

<?php ActiveForm::end(); ?>