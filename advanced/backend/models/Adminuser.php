<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "adminuser".
 *
 * @property string $account
 * @property string $psw
 */
class Adminuser extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'adminuser';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['account', 'psw'], 'required'],
            [['account', 'psw'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'account' => 'Account',
            'psw' => 'Psw',
        ];
    }
}
