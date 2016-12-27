<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Ocenki */

$this->title = $model->uchkurs;
$this->params['breadcrumbs'][] = ['label' => 'Ocenkis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ocenki-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Изменить', ['update', 'uchkurs' => $model->uchkurs, 'stud' => $model->stud], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'uchkurs' => $model->uchkurs, 'stud' => $model->stud], [
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
            'ocenka',
            'uchkurs',
            'stud',
            'prep',
            'data',
        ],
    ]) ?>

</div>
