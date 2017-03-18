<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "articles".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $title
 * @property string $content
 * @property string $created_at
 * @property string $updated_at
 * @property string $intro
 * @property string $praise_count
 * @property integer $page_view
 */
class Articles extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'articles';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'title'], 'required'],
            [['user_id', 'page_view'], 'integer'],
            [['title', 'content'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['intro'], 'string', 'max' => 255],
            [['praise_count'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'title' => 'Title',
            'content' => 'Content',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'intro' => 'Intro',
            'praise_count' => 'Praise Count',
            'page_view' => 'Page View',
        ];
    }
}
