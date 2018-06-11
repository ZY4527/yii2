<?php
/**
 * Created by PhpStorm.
 * User: hp
 * Date: 2018/5/9
 * Time: 9:39
 */

namespace app\controllers;


use app\models\Book;
use yii\data\ActiveDataProvider;
use yii\helpers\Url;
use yii\web\Controller;

class BookController extends  Controller
{
    public function actionIndex()
    {
       $data=\Yii::$app->db->createCommand('select * from `book`')->queryAll();

       return $this->render('index',['data'=>$data]);
    }


    public function actionAdd(){
        return $this->render('add');
    }


    public function actionAddsave()
    {
        $book = new Book();
        $book->name = \Yii::$app->request->post('name');
        $book->category = \Yii::$app->request->post('category');
        $book->photo = \Yii::$app->request->post('photo');
        if ($book->save()){
            $this->redirect(array('index'));
        }

    }


    public function actionEdit()
    {
        $id = \Yii::$app->request->get('uid');
        $sql = 'select * from book where id=:id';
        $data = \Yii::$app->db->createCommand($sql,[':id'=>$id])->queryOne();
        return $this->render('edit',['data'=>$data]);
    }

    public function actionEditsave()
    {
        $id = \Yii::$app->request->post('id');
        $book = Book::findOne($id);
        $book->name = \Yii::$app->request->post('name');
        $book->category = \Yii::$app->request->post('category');
        $book->photo = \Yii::$app->request->post('photo');
        $book->save();
        return $this->redirect(Url::to(['index']));
    }

    public function actionDelete()
    {
        $arr = \Yii::$app->request->get('id');
        \Yii::$app->db->createCommand()->delete('book','id='.$arr)->execute();
        $this->redirect(Url::to(['index']));

  }

//    public function actionIndex()
//    {
//        $dataProvider = new ActiveDataProvider([
//            'query'=>Book::find(),
//            'pagination'=>[
//                'pageSize'=>3,
//            ],
//        ]);
//        return $this->render('index',['dataProvider'=>$dataProvider]);
//   }
//
//    public function actionAdd()
//    {
//        $model = new Book();
//        $request = \Yii::$app->request;
//        if ($request->isGet){
//            return $this->render('add',['model'=>$model]);
//        }
//        elseif ($request->isPost){
//            $ch = $model->load($request->post())&& $model->save();
//            if ($ch){
//                echo '添加成功';
//                $this->redirect(Url::to(['index']));
//            }else{
//                echo '添加失败';
//            }
//        }
//   }
//
//    public function actionUpdate()
//    {
//
//        $request = \Yii::$app->request;
//        $id = $request->get('id');
//        if ($request->isGet){
//            $data =Book::findOne($request->get('id'));
//            return $this->render('update',['v'=>$data]);
//        }
//        elseif ($request->isPost){
//            $data = Book::findOne($id);
//            $ch = $data ->load($request->post())&& $data->save();
//            if ($ch){
//                echo '修改成功';
//                $this->redirect(Url::to(['index']));
//            }else{
//                echo '修改失败';
//            }
//        }
//   }
//
//    public function actionDelete($id)
//    {
//       $model = Book::findOne($id);
//       $re = $model->delete();
//       if ($re){
//           $this->redirect(Url::to(['index']));
//       }else{
//           echo '删除失败';
//       }
//
//    }
//
//    public function actionView($id)
//    {
//        $model = Book::findOne($id);
//
//        return $this->render('view',['model'=>$model]);
//    }
   
}