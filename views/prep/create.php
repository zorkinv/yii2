<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Prep */

$this->title = 'Create Prep';
$this->params['breadcrumbs'][] = ['label' => 'Preps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prep-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
