<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Uchkurs */

$this->title = 'Create Uchkurs';
$this->params['breadcrumbs'][] = ['label' => 'Uchkurs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="uchkurs-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
