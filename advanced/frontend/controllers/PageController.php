<?php

namespace frontend\controllers;

class PageController extends \yii\web\Controller
{
	public $layout = "pagelayout";
    public function actionIndex()
    {
		
        return $this->render('index');
    }

}
