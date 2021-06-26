<?
// Using LoadMorePager

// Use LoadMorePager in a GridView just by setting the latter's pager property to a configuration array with the former's class, like:

<?php
    use yii\grid\GridView;
    use sjaakp\loadmore\LoadMorePager;
?>
...
<?= GridView::widget([
    'dataProvider' => ...
    'pager' => [
        'class' => LoadMorePager::class
    ],
    // ...other GridView options, like 'columns'... 
])  ?>
...

<!-- That's all that's needed for basic functionality. The Load More button will appear as a standard link. In a ListView, set the pager property likewise.
Options

LoadMorePager's options can be set like so: -->

<?php
    use yii\grid\GridView;
    use sjaakp\loadmore\LoadMorePager;
?>
...
<?= GridView::widget([
    'dataProvider' => ...
    'pager' => [
        'class' => LoadMorePager::class,
        'label' => 'Show more data'
    ], 
    // ...other GridView options, like 'columns'... 
])  ?>
...


<!-- LoadMorePager has four options:
label

string The text of the Load More button. Default: 'Load more'.
id

string The HTML ID of the Load More button. If not set (default) it will be auto-generated.
options

array The HTML options of the Load More button. Set this to something like [ 'class' => 'btn btn-secondary' ] to give the button the looks of a real button (assuming that you use Bootstrap). Default: [] (empty array).
indicator

string Optional. The CSS selector for the indicator element(s). While the list is waiting for new items, the indicator element(s) get the extra CSS class 'show'. Great for showing a 'spinner' after the Load More button is clicked. Default: null. -->

<!-- 
Refinement 1: summary

In its basic setup, LoadMorePager will not update the GridView's or ListView's summary, if present. To correct that, wrap the {end} token in the list's summary setting with a <span> having the class 'summary-end'. For example:

 --><?php
    use yii\grid\GridView;
    use sjaakp\loadmore\LoadMorePager;
?>
...
<?= GridView::widget([
    'dataProvider' => ...,
    'pager' => [
        'class' => LoadMorePager::class,
        'label' => 'Show more data'
    ], 
    'summary' => 'Showing {begin}-<span class="summary-end">{end}</span> of {totalCount} items',
    // ...other GridView options, like 'columns'... 
])  ?>
...

<!-- Refinement 2: efficiency

Clicking the Load More button sends an Ajax call to the server, which sends a complete page back to the browser. Only a small part is actuallly used. This works, but it could be made quite a bit more efficient by taking the following steps.
Put the list in a separate subview

In stead of the usual view file:
 -->
<?php
    /* loadmore.php */
    use yii\grid\GridView;
    use sjaakp\loadmore\LoadMorePager;
?>
<!-- // other stuff on the page
... -->
<?= GridView::widget(...) ?>
<!-- ...
// more other stuff
...

Create two view files, one main view which renders a subview:
 -->
<?php
    /* loadmore.php */
?>
// other stuff on the page
...
<?= $this->render('_loadmore.php', [
    'dataProvider' => $dataProvider
]) ?>
<!-- ...
// more other stuff
...

The subview: -->

<?php
    /* _loadmore.php */
    use yii\grid\GridView;
    use sjaakp\loadmore\LoadMorePager;
?>
// no other stuff!
<?= GridView::widget(...) ?>

<!-- Modify the action function in the controller

Change the usual: -->

public function actionLoadmore()    {
    $dataProvider = ...;

    return $this->render('loadmore', [
        'dataProvider' => $dataProvider,
    ]);
}

into:

public function actionLoadmore()    {
    $dataProvider = ...;

    if (Yii::$app->request->isAjax) {
        return $this->renderAjax('_loadmore', [
            'dataProvider' => $dataProvider,
        ]);
    }

    return $this->render('loadmore', [
        'dataProvider' => $dataProvider,
    ]);
}

<!-- This makes the server only render the subview if an Ajax call is made by the Load More button.

Important: if you use this technique, be sure to set an explicit id to the GridView or the ListView, as well as to the LoadMorePager, like so:
 -->
<?php
    use yii\grid\GridView;
    use sjaakp\loadmore\LoadMorePager;
?>
...
<?= GridView::widget([
    'dataProvider' => ...,
    'id' => 'myGrid',
    'pager' => [
        'class' => LoadMorePager::class,
        'id' => 'myPager',
        // ...other LoadMorePager options, like 'label'...
    ], 
    // ...other GridView options, like 'columns'... 
])  ?>
...

<!-- How do I change the number of returned items?

Do this by modifying the pagination value of the list's dataProvider, like:
 -->
 $dataProvider = new ActiveDataProvider([
     'query' => ... ,
     'pagination' => [
         'pageSize' => 12
     ]
 ]);

?>