<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\AdviceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '意见和建议';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="advice-index">

    <h2><?= Html::encode($this->title) ?></h2>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('增添意见和建议', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'content:ntext',
            'comment_time',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
