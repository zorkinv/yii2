<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UchkursSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Uchkurs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="uchkurs-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Uchkurs', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'disc',
            'name',
            'semestr',
            'tip',
            'zet',
            // 'chas_o',
            // 'chas_t',
            // 'chas_p',
            // 'chas_l',
            // 'chas_s',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
