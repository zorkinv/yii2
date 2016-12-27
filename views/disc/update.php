<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Disc */

$this->title = 'Update Disc: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Discs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'uchplan' => $model->uchplan, 'name' => $model->name]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="disc-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
