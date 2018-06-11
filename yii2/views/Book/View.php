<?php
    use yii\widgets\DetailView;
?>
<?=DetailView::widget([
    'model'=>$model,
    'attributes'=>[
        'id',
        'name',
        'category',
        'photo',
    ],
]);
?>
