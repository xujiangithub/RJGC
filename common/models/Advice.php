<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "advice".
 *
 * @property integer $id
 * @property string $name
 * @property string $content
 * @property string $comment_time
 */
class Advice extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'advice';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['content'], 'string'],
            [['comment_time'], 'safe'],
            [['name'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Id(编号)',
            'name' => 'E-Mail(邮箱)',
            'content' => 'Content(内容)',
            'comment_time' => 'Comment Time(反馈时间)',
        ];
    }
}
