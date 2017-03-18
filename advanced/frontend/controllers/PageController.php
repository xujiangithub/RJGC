<?php

namespace frontend\controllers;

class PageController extends \yii\web\Controller
{
	public $layout = "pagelayout";
    public function actionIndex()
    {
		
        return $this->render('index');
    }

    public function actionPicture()
    {
		$this->layout = "kong";
        return $this->render('picture');
    }

}
