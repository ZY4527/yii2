<?php

    /*use yii\helpers\Html;
    use yii\helpers\Url;*/
    use yii\grid\GridView;

?>
<a href="<?=\yii\helpers\Url::to(['add'])?>">添加</a>
<!--<a href="<?/*=Url::to(['add'])*/?>">添加</a>
<table border="1">
    <tr>
        <td>id</td>
        <td>name</td>
        <td>category</td>
        <td>photo</td>
        <td>操作</td>
    </tr>
    <?php /*foreach ($data as $v):*/?>
        <tr>
            <td><?/*=Html::encode($v['id'])*/?></td>
            <td><?/*=Html::encode($v['name'])*/?></td>
            <td><?/*=Html::encode($v['category'])*/?></td>
            <td><?/*=Html::encode($v['photo'])*/?></td>
            <td><a href="<?/*=Url::to(['edit','id'=>$v['id']])*/?>">编辑</a>
                <a href="<?/*=Url::to(['delete','id'=>$v['id']])*/?>">删除</a></td>
        </tr>
    <?php /*endforeach; */?>
</table>-->
<?=GridView::widget([
        'dataProvider'=>$dataProvider,
    'columns'=>[
            [
                    'class'=>'yii\grid\SerialColumn',

            ],
        'id',
        'name',
        'category',
        'photo',
        [
                'class'=>'yii\grid\ActionColumn',
        ]
    ],
])?>
