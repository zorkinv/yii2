<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PrepSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Preps';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prep-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Prep', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'fam',
            'nam',
            'otch',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
