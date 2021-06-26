<?
// Using the Collapse widget

// Using the Collapse widget in an Yii2 view file can be as simple as:

<?php
use sjaakp\collapse\Collapse;
?>
    ...
    <?php Collapse::begin('Details') ?>
        <h4>Some more details</h4>
        <p>The first detail... </p>
    <?php Collapse::end() ?>
    ... 

<!-- The HTML between begin() and end() can be as complicated as you like.

Instead of initializing Collapse with the label text, it can also be initialized with an array of several options, like:
 -->
<?php
use sjaakp\collapse\Collapse;
?>
    ...
    <?php Collapse::begin([
        'label' => 'Details',
        'options' => [ 'class' => 'bg-info' ], // give the panel an extra class
        'open' => true      // initially open the panel
    ]) ?>
        <h4>Some more details</h4>
        <p>The first detail... </p>
    <?php Collapse::end() ?>
    ... 

<!-- Using the CollapseGroup widget

The CollapseGroup widget can be used like:
 -->
<?php
use sjaakp\collapse\CollapseGroup;
?>
    ...
    <?php CollapseGroup::begin([/* options */]) ?>
    ...
    <?php CollapseGroup::beginCollapse('Details) ?>
        <h4>Some details</h4>
        <p>The first detail... </p>
    <?php CollapseGroup::endCollapse() ?>
    ...
    <?php CollapseGroup::beginCollapse('More details) ?>
        <h4>Some more details</h4>
        <p>The first detail... </p>
    <?php CollapseGroup::endCollapse() ?>
    ...
    <?php CollapseGroup::end() ?>
    ... 

<!-- Using the Accordion widget

Use the Accordion widget as follows:
 -->
<?php
use sjaakp\collapse\Accordion;
?>
    ...
    <?php Accordion::begin('Details') ?>
        <h4>Some details</h4>
        <p>The first detail... </p>
    <?php Accordion::next('More details') ?>
        <h4>Some more details</h4>
        <p>The tenth detail... </p>
    <?php Accordion::next('Even more details') ?>
        <h4>Even some more details</h4>
        <p>The twentieth detail... </p>
    <?php Accordion::end() ?>
    ... 

?>