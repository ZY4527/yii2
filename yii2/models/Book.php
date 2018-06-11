<?php
/**
 * Created by PhpStorm.
 * User: hp
 * Date: 2018/5/9
 * Time: 9:40
 */

namespace app\models;


use yii\db\ActiveRecord;

class Book extends ActiveRecord
{

    public function rules()
    {
        return[
            [['name','category','photo'],'required'],
        ];
    }

    public function attributeLabels()
    {
        return[
            'name'=>'名称',
            'category'=>'分类',
            'photo'=>'图像',
        ];
    }
}