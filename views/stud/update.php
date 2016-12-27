<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Stud */

$this->title = 'Update Stud: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Studs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="stud-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
