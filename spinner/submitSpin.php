<?
Defaults option:

<?= \c006\spinner\SubmitSpinner::widget(); ?>

All options: (using defaults)

<?=
    c006\spinner\SubmitSpinner::widget(
                           [
                               'form_id'                => $form->id,
                               'bg_color'               => '#444444',
                               'bg_opacity'             => 0.8,
                               'spin_speed'             => 4,
                               'radius'                 => 200,
                               'bg_spinner_opacity'     => 0.5,
                               'bg_spinner_color'       => '#000000',
                               'sections'               => 15,
                               'section_size'           => 20,
                               'section_color'          => '#FFFFFF',
                               'section_offset'         => 80,
                               'section_opacity_base'   => .2,
                               'proportionate_increase' => 1,
                           ]
    ) ?>

All options: (5 large dots only, no background spinner)

<?= c006\spinner\SubmitSpinner::widget(
                              [
                                  'form_id'                => $form->id,
                                  'bg_color'               => '#333333',
                                  'bg_opacity'             => 0.8,
                                  'spin_speed'             => 4,
                                  'radius'                 => 250,
                                  'bg_spinner_opacity'     => 0.0,
                                  'bg_spinner_color'       => '#000000',
                                  'sections'               => 5,
                                  'section_size'           => 80,
                                  'section_color'          => '#FFFFFF',
                                  'section_offset'         => 80,
                                  'section_opacity_base'   => .2,
                                  'proportionate_increase' => 0,
                              ]
       ) ?>
