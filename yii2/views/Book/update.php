<?php
//use yii\helpers\Url;
use yii\helpers\Html;
use \yii\widgets\ActiveForm;
?>

<!--<form action="<?/*=Url::to(['editsave'])*/?>" method="post">
    <input name="_csrf" type="hidden" id="_csrf" value="<?/*= Yii::$app->request->csrfToken */?>">
    <input type="hidden" name="id" value="<?/*=Html::encode($data['id'])*/?>">
    名称：<input type="text" name="name" value="<?/*=Html::encode($data['name'])*/?>"><br>
    分类：<input type="text" name="category"  value="<?/*=Html::encode($data['category'])*/?>"><br>
    图像：<input type="text" name="photo"  value="<?/*=Html::encode($data['photo'])*/?>"><br>
    <input type="submit" value="编辑">
</form>-->

<?php
        $form = ActiveForm::begin();

?>

        <?=$form->field($v,'name')?>
        <?=$form->field($v,'category')?>
        <?=$form->field($v,'photo')?>
        <?=Html::submitButton('submit',['class'=>'btn btn-success'])?>
<?php
$form = ActiveForm::end();
?>
