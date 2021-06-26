<?
use kartik\range\RangeInput;

// Usage with rangeinput and model
echo $form->field($model, 'rating')->widget(RangeInput::classname(), [
    'options' => ['placeholder' => 'Select range ...'],
    'html5Options' => ['min'=>0, 'max'=>1, 'step'=>1],
    'html5Container' => ['style' => 'width:350px'],
    'addon' => ['append'=>['content'=>'star']],
    
]);

// With model & without rangeinput
echo '<label class="control-label">Adjust Contrast</label>';
echo RangeInput::widget([
    'model' => $model,
    'attribute' => 'contrast',
    'html5Container' => ['style' => 'width:350px'],
    'addon' => ['append'=>['content'=>'%']],
]);

// Vertical orientation
echo '<label class="control-label">Adjust Contrast</label>';
echo RangeInput::widget([
    'name' => 'slider',
    'value' => 70,
    'orientation' => 'vertical',
    'html5Container' => ['style' => 'width:350px'],
]);