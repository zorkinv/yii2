<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Ocenki */

$this->title = 'Update Ocenki: ' . $model->uchkurs;
$this->params['breadcrumbs'][] = ['label' => 'Ocenkis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->uchkurs, 'url' => ['view', 'uchkurs' => $model->uchkurs, 'stud' => $model->stud]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ocenki-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
