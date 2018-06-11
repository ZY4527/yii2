<?php
//use yii\helpers\Url;
use \yii\widgets\ActiveForm;
use yii\helpers\Html;
?>

<!--<form action="<?/*=Url::to(['addsave'])*/?>" method="post">
    <input name="_csrf" type="hidden" id="_csrf" value="<?/*= Yii::$app->request->csrfToken */?>">
    名称：<input type="text" name="name"><br>
    分类：<input type="text" name="category"><br>
    图像：<input type="text" name="photo"><br>
    <input type="submit" value="添加">
</form>-->
<?php
    $form = ActiveForm::begin();
?>

        <?=$form->field($model,'name')?>
        <?=$form->field($model,'category')?>
        <?=$form->field($model,'photo')?>
        <?=Html::submitButton('submit',['class'=>'btn btn-success'])?>
<?php
    $form = ActiveForm::end();
?>