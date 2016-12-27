<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Uchkurs */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Uchkurs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="uchkurs-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Изменить', ['update', 'id' => $model->name], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->name], [
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
            'disc',
            'name',
            'semestr',
            'tip',
            'zet',
            'chas_o',
            'chas_t',
            'chas_p',
            'chas_l',
            'chas_s',
        ],
    ]) ?>

</div>
