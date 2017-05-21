<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\MessageSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '博客信息';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="message-index">

    <h2><?= Html::encode($this->title) ?></h2>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'visit_times:datetime',
            'comment_num',
            'blog_create_time',
            'blog_update_time',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
