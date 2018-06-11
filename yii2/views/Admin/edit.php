<?php
/**
 * Created by PhpStorm.
 * User: 宋汝剑
 * Date: 2018/6/8
 * Time: 7:17
 */
use yii\helpers\Url;
use yii\helpers\Html;
?>
<form action="<?= \yii\helpers\Url::to(['save'])?>" method="post">
         <input type="hidden" name="uid" value="<?= \yii\helpers\Html::encode($list['id'])?>">
    <input type="hidden" name="id" value="<?=Html::encode($list['id'])?>">
    名称：<input type="text" name="uname" value="<?=Html::encode($list['uname'])?>"><br>
    分类：<input type="text" name="pwd"  value="<?=Html::encode($list['pwd'])?>"><br>
    图像：<input type="text" name="sex"  value="<?=Html::encode($list['sex'])?>"><br>
    图像：<input type="text" name="addtime"  value="<?=Html::encode($list['addtime'])?>"><br>
    <input type="submit" value="编辑">
</form>
