<?
// Just add following string to your layout

use zyx\widgets\ImageX;

// And call widget where the image is supposed to be instead of usual Html::img():

echo ImageX::widget([
                  'src' => 'http://static.yiiframework.com/css/img/logo.png',
                  'options' => ['width' => 280, 'height' => 60],
                  'og' => [],
                  'md' => ['div_class' => 'image_wrap']
                ]);

// Note: only 'src' parameter is mandatory. Array of 'options' is the same you use for image options in Html::img(). If both 'og' (OpenGraph) and 'md' (schema.org) configuration arrays are empty - you may not declare them at all. You can to disable one of them (they are both enabled by default) - e.g. 'md' => ['enable' => false].