<?php
/**
 * Created by PhpStorm.
 * User: 宋汝剑
 * Date: 2018/6/7
 * Time: 19:49
 */
use \yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
<form action="<?= \yii\helpers\Url::to(['addsave'])?>" method="post">
    名称：<input type="text" name="uname"><br>
    分类：<input type="text" name="pwd"><br>
    图像：<input type="text" name="sex"><br>
    图像：<input type="text" name="addtime"><br>
       <input type="submit" value="添加">
</form>
