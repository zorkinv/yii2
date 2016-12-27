<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\GruppaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Gruppas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gruppa-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Gruppa', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'uchplan',
            'name',
            'dop_name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
