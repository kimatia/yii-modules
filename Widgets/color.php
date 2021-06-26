<?
use kartik\color\ColorInput;

// Usage with ActiveForm and model
echo $form->field($model, 'color')->widget(ColorInput::classname(), [
    'options' => ['placeholder' => 'Select color ...'],
]);

// With model & without ActiveForm
echo '<label>Select Color</label>';
echo ColorInput::widget([
    'model' => $model,
    'attribute' => 'saturation',
]);