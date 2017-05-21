<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Message */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Messages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="message-view">

    <h2>博客信息展示</h2>


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
           // 'id',
            'visit_times',
            'comment_num',
            'blog_create_time',
            'blog_update_time',
        ],
    ]) ?>

</div>
