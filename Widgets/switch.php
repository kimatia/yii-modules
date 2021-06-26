<?
use kartik\switchinput\SwitchInput;

// Usage with ActiveForm and model
echo $form->field($model, 'status')->widget(SwitchInput::classname(), [
    'type' => SwitchInput::CHECKBOX
]);


// With model & without ActiveForm
echo SwitchInput::widget([
    'name' => 'status_1',
    'type' => SwitchInput::RADIO
]);