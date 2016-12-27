<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Disc */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Discs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="disc-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Изменить', ['update', 'uchplan' => $model->uchplan, 'name' => $model->name], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'uchplan' => $model->uchplan, 'name' => $model->name], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены, что хотите удалить?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'uchplan',
            'name',
        ],
    ]) ?>

</div>
