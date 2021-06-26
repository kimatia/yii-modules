<?
use coderius\lightbox2\Lightbox2;

<?= coderius\lightbox2\Lightbox2::widget([
    'clientOptions' => [
        'resizeDuration' => 200,
        'wrapAround' => true,
        
    ]
]); ?>

<a href="<?= Yii::getAlias("@img-web-blog-posts/1/middle/pic.jpg"); ?>" data-lightbox="roadtrip" data-title="some title" data-alt="some alt">
    <!-- Thumbnail picture -->
    <?= Html::img("@img-web-blog-posts/pic.jpg"); ?>
</a>

<a href="<?= Yii::getAlias("@img-web-blog-posts/10/middle/pic2.jpg"); ?>" data-lightbox="roadtrip">
    <!-- Thumbnail picture -->
    <?= Html::img("@img-web-blog-posts/pic2.jpg"); ?>
</a>

<a href="<?= Yii::getAlias("@img-web-blog-posts/11/middle/pic3.jpg"); ?>" data-lightbox="roadtrip">
    <!-- Thumbnail picture -->
    <?= Html::img("@img-web-blog-posts/pic3.jpg"); ?>
</a>
?>