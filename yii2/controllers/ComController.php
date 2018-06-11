<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/8 0008
 * Time: 下午 3:52
 */

namespace app\controllers;


use app\models\Com;
use yii\web\Controller;

class ComController extends Controller
{
    public function actionIndex() {
//        $data = Com::find()->all();
       $data =  \Yii::$app->db->createCommand('select * from com ORDER BY create_time DESC')->queryAll();
        return $this->render('index',['data'=>$data]);
    }

    public function actionAdd() {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $book = new Com();
        $data = $book->content = \Yii::$app->request->post('content');
        $book->create_time = time();
        $book->save();
        return $data;
    }
}