<?php
/**
 * Created by PhpStorm.
 * User: 宋汝剑
 * Date: 2018/6/7
 * Time: 19:28
 */

namespace app\controllers;



use app\models\Admin;
use yii\web\Controller;

class AdminController extends Controller
{
    public function actionLogin() {
        return $this->render('login');
    }
    public  function actionIndex()
    {


        if(empty(\Yii::$app->request->post('uname'))){
            echo'用户名不能为空';die;
        }
        if(empty(\Yii::$app->request->post('pwd'))){
            echo'密码不能为空';die;
        }

        $list = Admin::findOne(['uname' => \Yii::$app->request->post('uname')]);
        $data= Admin::findOne(['pwd' => \Yii::$app->request->post('pwd')]);
        if($list != null){
            if($data != null) {
                return $this->redirect(['com/index','登陆成功']);
            } else {
                echo '密码不正确';
            }
        } else{
            echo '用户名不正确';
        }
    }

    public function actionAdd()
    {
        $model = new Admin();
        return $this->render('add',['model'=>$model]);
    }
    public function actionAddsave()
    {
        $book = new Admin();
        $book->uname = \Yii::$app->request->post('uname');
        $book->pwd = \Yii::$app->request->post('pwd');
        $book->sex = \Yii::$app->request->post('sex');
        $book->addtime = time();
        $book->save();
        return $this->redirect(array('index'));
    }
    public function actionEdit()
    {
        $id = \Yii::$app->request->get('uid');
        $data = Admin::findOne($id);
        return $this->render('edit',['list'=>$data]);
    }

    public function  actionSave()
    {
        $model = new Admin();
        $data = \Yii::$app->request->post();

        if($model->insert($data)){

        $this->redirect('/index','修改成功');
        }else{
            echo '添加失败';
        }

    }
}