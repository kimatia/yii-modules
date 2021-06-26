<?

// Examples

// Show selectbox with values from 2015 (current year) to 1995 year (-20 years from current year):

<?php echo $form->field($model, 'year')->widget(etsoft\widgets\YearSelectbox::classname(), [
    'yearStart' => 0,
    'yearEnd' => -20,
 ]);
?>

<!-- Show selectbox with values from 2005 (current year - 10 years) to 2025 year (+ 10 years from current year): -->

<?php echo $form->field($model, 'year')->widget(etsoft\widgets\YearSelectbox::classname(), [
    'yearStart' => -10,
    'yearEnd' => 10,
 ]);
?>

Show selectbox with fix values from 2000 to 2010 year:

<?php echo $form->field($model, 'year')->widget(etsoft\widgets\YearSelectbox::classname(), [
    'yearStart' => 2000,
    'yearStartType' => 'fix',
    'yearEnd' => 2010,
    'yearEndType' => 'fix',
 ]);
?>

<!-- Show selectbox with values from 2000 to current year:
 -->
<?php echo $form->field($model, 'year')->widget(etsoft\widgets\YearSelectbox::classname(), [
    'yearStart' => 2000,
    'yearStartType' => 'fix',
    'yearEnd' => 0,
 ]);
?>