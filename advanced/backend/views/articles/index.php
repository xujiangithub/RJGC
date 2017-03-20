<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ArticlesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '文章管理';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="articles-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('添加文章', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'contentOptions' => ['class' => 'mycsscss'],
           /* 'id' => ['class' =>'.mycsscss'],*/
        //  'id',
            'user_id',
            'title:ntext',
         //   'content:ntext',
            'created_at',
         //    'updated_at',
             'intro',
         //    'praise_count',
         //    'page_view',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>


<style>

.mycsscss{
     width:10%;


}

</style>