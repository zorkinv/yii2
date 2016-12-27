<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel app\models\NapSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Направления подготовки';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nap-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Новое', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kod',
            'name',
            'dop_name',
			[
				'label' => 'Профили',
				'format' => 'raw',
				'value' => function($model){
					return Html::a('Перейти',
					Url::to(['/profil','ProfilSearch[nap]'=>$model->name]),
					[
					'title' => $model->name,
					'target' => '_blank'
					]
					);
					
					
				}
			],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
