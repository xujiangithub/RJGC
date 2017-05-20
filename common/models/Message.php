<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "message".
 *
 * @property integer $id
 * @property integer $visit_times
 * @property integer $comment_num
 * @property string $blog_create_time
 * @property string $blog_update_time
 */
class Message extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'message';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['visit_times', 'comment_num'], 'integer'],
            [['blog_create_time', 'blog_update_time'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'visit_times' => 'Visit Times',
            'comment_num' => 'Comment Num',
            'blog_create_time' => 'Blog Create Time',
            'blog_update_time' => 'Blog Update Time',
        ];
    }
}
