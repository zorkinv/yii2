<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Stud */

$this->title = 'Create Stud';
$this->params['breadcrumbs'][] = ['label' => 'Studs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="stud-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
