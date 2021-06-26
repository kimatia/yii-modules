<?
// A Yii 2.0 widget that allows you to create sortable lists and grids and manipulate them using simple drag and drop. It is based on the lightweight html5sortable jQuery plugin, which uses native HTML5 API for drag and drop. It is a leaner alternative for the JUI Sortable plugin and offers very similar functionality. The yii2-sortable widget offers these features:

//     Less than 1KB of javascript used (minified and gzipped).
//     Built using native HTML5 drag and drop API.
//     Supports both list and grid style layouts.
//     Similar API and behaviour to jquery-ui sortable plugin.
//     Works in IE 5.5+, Firefox 3.5+, Chrome 3+, Safari 3+ and, Opera 12+.

use kartik\sortable\Sortable;
echo Sortable::widget([
    'type' => Sortable::TYPE_LIST,
    'items' => [
        ['content' => 'Item # 1'],
        ['content' => 'Item # 2'],
        ['content' => 'Item # 3'],
    ]   
]); 
?>