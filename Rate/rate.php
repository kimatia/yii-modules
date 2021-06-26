<?
use kartik\rating\StarRating;

// Usage with ActiveForm and model
echo $form->field($model, 'rating')->widget(StarRating::classname(), [
    'pluginOptions' => ['size'=>'lg']
]);


// With model & without ActiveForm
echo StarRating::widget([
    'name' => 'rating_1',
    'pluginOptions' => ['disabled'=>true, 'showClear'=>false]
]);