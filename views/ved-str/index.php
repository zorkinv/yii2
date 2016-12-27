<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\VedStrSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ved Strs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ved-str-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Ved Str', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'ved',
            'stud',
            'ocenka',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
