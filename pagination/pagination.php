<?
// Usage

// Way to add page size widget to each GridView and ListView of an application using DI container definition:

<?php
return [
    'container' => [
        'definitions' => [
            \yii\widgets\LinkPager::class => \zhuravljov\yii\pagination\LinkPager::class,
        ],
    ],
];

// Advanced container configuration of LinkPager and LinkSizer widgets:

<?php
return [
    'container' => [
        'definitions' => [
            \yii\widgets\LinkPager::class => \zhuravljov\yii\pagination\LinkPager::class,
            \zhuravljov\yii\pagination\LinkPager::class => [
                'maxButtonCount' => 5,
            ],
            \zhuravljov\yii\pagination\LinkSizer::class => [
                'sizes' => [5, 10, 20, 50, 100],
            ],
            \yii\data\Pagination::class => [
                'defaultPageSize' => 10,
                'pageSizeLimit' => [1, 100],
            ],
        ],
    ],
];

// There is StoredPagination to store page size that was selected before by user. DI container definition looks like:

<?php
return [
    'container' => [
        'definitions' => [
            \yii\data\Pagination::class => \zhuravljov\yii\pagination\StoredPagination::class,
        ],
    ],
];

// There is StoredSort to store selected sorting. DI container definition looks like:

<?php
return [
    'container' => [
        'definitions' => [
            \yii\data\Sort::class => \zhuravljov\yii\pagination\StoredSort::class,
        ],
    ],
];
?>