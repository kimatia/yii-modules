<?
<?= \arturoliveira\CheckOutProgressBar::widget([
  'current_step' => 1,
  'current_step_done' => TRUE, # Optional if you want this step to be checked
  'steps' => [
      [
        'label' => 1,
        'title' => 'Step 1',
        'url' => Url::toRoute('/step1'), # Optional if you want the label and title to be clickable
      ],
      [
        'label' => 2,
        'title' => 'Step 2',
        'url' => Url::toRoute('/step2'), # Optional if you want the label and title to be clickable
      ]
    ]
  ]);
  ?>
