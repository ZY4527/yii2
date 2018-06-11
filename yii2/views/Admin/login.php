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
<form action="<?= \yii\helpers\Url::to(['index'])?>" method="post">
    用户名：<input type="text" name="uname"><br>
    密码：<input type="text" name="pwd"><br>
       <input type="submit" value="登录">
</form>
