<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Uchplan */

$this->title = 'Новый';
$this->params['breadcrumbs'][] = ['label' => 'Планы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="uchplan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
