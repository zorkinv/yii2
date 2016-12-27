<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel app\modelsUchplanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Планы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="uchplan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Новый', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'profil',
            'name',
            'dop_name',
            'forma',
			[
				'label' => 'Группы',
				'format' => 'raw',
				'value' => function($model){
					return Html::a('Перейти',
					Url::to(['/gruppa','GruppaSearch[uchplan]'=>$model->name]),
					[
					'title' => $model->name,
					'target' => '_blank'
					]
					);
					
					
				}
			],
			[
				'label' => 'Дисциплины',
				'format' => 'raw',
				'value' => function($model){
					return Html::a('Перейти',
					Url::to(['/disc','DiscSearch[uchplan]'=>$model->name]),
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
