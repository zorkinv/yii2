<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Nap */

$this->title = 'Update Nap: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Naps', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'kod' => $model->kod, 'name' => $model->name]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="nap-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
