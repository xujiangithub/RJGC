<?php

namespace backend\controllers;
use Yii;
use yii\base\InvalidParamException;
use common\models\LoginForm;

class LoginController extends \yii\web\Controller
{
    //public $enableCsrfValidation = false;
	public $layout = "kong";

    public function actionLogin()
    {
        //return $this->render('login');
         if (!Yii::$app->user->isGuest) {
             return $this->goHome();
         }
        $model = new LoginForm();
         if ($model->load(Yii::$app->request->post()) && $model->login()) {
             //return $this->goBack();
         } else {
             return $this->render('login', [
                 'model' => $model,
             ]);
         }
    }

}
