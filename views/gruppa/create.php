<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Gruppa */

$this->title = 'Create Gruppa';
$this->params['breadcrumbs'][] = ['label' => 'Gruppas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gruppa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
