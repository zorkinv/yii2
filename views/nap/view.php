<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Nap */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Naps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nap-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Изменить', ['update', 'kod' => $model->kod, 'name' => $model->name], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'kod' => $model->kod, 'name' => $model->name], [
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
            'kod',
            'name',
            'dop_name',
        ],
    ]) ?>

</div>
