<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ProfilSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Профили';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="profil-index">

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

            'nap',
            'name',
			[
				'label' => 'Учебный план',
				'format' => 'raw',
				'value' => function($model){
					return Html::a('Перейти',
					Url::to(['/uchplan','UchplanSearch[profil]'=>$model->name]),
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
