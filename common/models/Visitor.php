<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "visitor".
 *
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $create_time
 */
class Visitor extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'visitor';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['create_time'], 'safe'],
            [['name', 'email'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID(编号)',
            'name' => 'Name(昵称)',
            'email' => 'Email(邮箱)',
            'create_time' => 'Create Time(注册时间)',
        ];
    }
}
