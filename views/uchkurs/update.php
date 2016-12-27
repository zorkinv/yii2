<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Uchkurs */

$this->title = 'Update Uchkurs: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Uchkurs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->name]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="uchkurs-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
