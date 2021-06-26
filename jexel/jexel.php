<?= \lengnuan\jexcel\Jexcel::widget(['options' => [
        'minDimensions' => [10,10],
        'tableOverflow' => true
]]);?>
<?php $data = [
    ['US', 'Cheese', 'Yes', '2019-02-12'],
    ['CA;US;UK', 'Apples', 'Yes', '2019-03-01'],
    ['CA;BR', 'Carrots', 'No', '2018-11-10'],
    ['BR', 'Oranges', 'Yes', '2019-01-12'],
];
echo \lengnuan\jexcel\Jexcel::widget(['options' => [
        'data' => $data,
]]);?>