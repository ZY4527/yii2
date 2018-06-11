<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $name
 * @property string $pwd
 * @property string $img
 * @property int $reg_time
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'pwd', 'img', 'reg_time'], 'required'],
            [['reg_time'], 'integer'],
            [['name'], 'string', 'max' => 30],
            [['pwd'], 'string', 'max' => 32],
            [['img'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'pwd' => 'Pwd',
            'img' => 'Img',
            'reg_time' => 'Reg Time',
        ];
    }
}
