How to use

<?= \skeeks\yii2\nanogalleryWidget\NanogalleryWidget::widget([
    'items' => [
        [
            'src' => 'https://images.wallpaperscraft.ru/image/leopard_hischnik_morda_oskal_agressiya_58086_1280x720.jpg',
            'preview_src' => 'https://images.wallpaperscraft.ru/image/leopard_hischnik_morda_oskal_agressiya_58086_1280x720.jpg',
            'title' => 'title',
            'description' => 'description',
        ],
        [
            'src' => 'https://s1.1zoom.ru/b5050/261/348938-sepik_2048x1152.jpg',
            'preview_src' => 'https://s1.1zoom.ru/b5050/261/348938-sepik_2048x1152.jpg',
            'title' => 'title',
            'description' => 'description',
        ],
        [
            'src' => 'https://s1.1zoom.ru/big3/297/Canada_Mountains_Scenery_488936.jpg',
            'preview_src' => 'https://s1.1zoom.ru/big3/297/Canada_Mountains_Scenery_488936.jpg',
            'title' => 'title',
            'description' => 'description',
        ]
    ],
    'clientOptions' => [
        'thumbnailHeight' => 500
        
        //all options see http://nanogallery.brisbois.fr/
    ],
]); ?>


<!-- How to use for SkeekS CMS
 -->
<? 

$tree = \skeeks\cms\models\CmsTree::findOne(10);
$images = $tree->images; 
$items = \yii\helpers\ArrayHelper::map($images, "id", function (\skeeks\cms\models\StorageFile $model) {
    return [
        'src'         => $model->src,
        'preview_src' => \Yii::$app->imaging->thumbnailUrlOnRequest($model->src,
            new \skeeks\cms\components\imaging\filters\Thumbnail([
                'h' => 350,
                'w' => 0,
            ])
        ),
        'description' => $model->name,
        'title'       => $model->name,
    ];
}); 

?>


<?= \skeeks\yii2\nanogalleryWidget\NanogalleryWidget::widget([
    'items' => $items,
    'clientOptions' => [
        'thumbnailHeight' => 200
        
        //all options see http://nanogallery.brisbois.fr/
    ],
]); ?>