<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use kartik\export\ExportMenu;

/* @var $this yii\web\View */
/* @var $searchModel app\models\VedSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Veds';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ved-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Ved', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'gruppa',
            'uchkurs',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); 
	
	$gridColumns =[
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'gruppa',
            'uchkurs',

            ['class' => 'yii\grid\ActionColumn'],
        ];
	
	echo ExportMenu::widget([
    'dataProvider' => $dataProvider,
    'columns' => $gridColumns
]);?>
	<?php echo Html::a('Распечатать .PDF', Url::to(['/ved/mpdf-blog','id'=>10]), [
                                'class'=>'btn btn-default',
                                'target'=>'_blank', 
                                'data-toggle'=>'tooltip', 
                                'title'=>'Will open the generated PDF file in a new window'
                            ]);
		
?>
</div>
