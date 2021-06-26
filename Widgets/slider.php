<?
use kartik\slider\Slider;
echo Slider::widget([
    'name' => 'slider',
    'sliderColor' => Slider::TYPE_DANGER,
    'handleColor' => Slider::TYPE_DANGER,
    'pluginOptions' => [
        'orientation' => 'horizontal',
        'handle' => 'round',
        'min' => 0,
        'max' => 255,
        'step' => 1
    ],
]); 