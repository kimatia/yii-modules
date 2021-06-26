<?
use toriphes\lazyload\LazyLoad;

echo LazyLoad::widget(['src' => 'url/to/your/image.jpg']);

//enable fallback for non JavaScript user
echo LazyLoad::widget(['src' => 'url/to/your/image.jpg', 'fallback' => true]);