<?
use kartik\typeahead\TypeaheadBasic;
use kartik\typeahead\Typeahead;

// TypeaheadBasic usage with ActiveForm and model
echo $form->field($model, 'state_3')->widget(TypeaheadBasic::classname(), [
    'data' => $data,
    'pluginOptions' => ['highlight' => true],
    'options' => ['placeholder' => 'Filter as you type ...'],
]);

// Typeahead usage with ActiveForm and model
echo $form->field($model, 'state_4')->widget(Typeahead::classname(), [
    'dataset' => [
        [
            'local' => $data,
            'limit' => 10
        ]
    ],
    'pluginOptions' => ['highlight' => true],
    'options' => ['placeholder' => 'Filter as you type ...'],
]);