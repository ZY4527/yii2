<?php

namespace app\controllers;

class UserController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $data = \Yii::$app->db->createCommand('select * from `admin`')->queryAll();
        return $this->render('index',['data'=>$data]);
    }

}
