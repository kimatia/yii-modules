<?
use kartik\spinner\Spinner;
<div class="well">
<?= Spinner::widget([
    'preset' => Spinner::LARGE,
    'color' => 'blue',
    'align' => 'left'
])?>
</div>