<?php
/**
 * Created by PhpStorm.
 * User: 宋汝剑
 * Date: 2018/6/7
 * Time: 19:14
 */


?>
<a href=" <?=yii\helpers\Url::to(['add'])?>">添加</a>
<table border="1">
    <tr>
        <td>id</td>
        <td>username</td>
        <td>password</td>
        <td>create_time</td>
        <td>update_time</td>
        <td>操作</td>
    </tr>
    <?php foreach ($list as $v): ?>
        <tr>
            <td><?=\yii\helpers\Html::encode($v['id']) ?></td>
            <td><?=\yii\helpers\Html::encode($v['uname']) ?></td>
            <td><?=\yii\helpers\Html::encode($v['pwd']) ?></td>
            <td><?=\yii\helpers\Html::encode($v['sex']) ?></td>
            <td><?=\yii\helpers\Html::encode($v['addtime']) ?></td>
            <td>
                <a href="<?=\yii\helpers\Url::to(['edit','uid'=>$v['id']]) ?>">修改</a>
                <a href="<?=\yii\helpers\Url::to(['delete','uid'=>$v['id']]) ?>">删除</a>
            </td>
        </tr>
    <?php endforeach ?>

</table>