<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Disc */

$this->title = 'Create Disc';
$this->params['breadcrumbs'][] = ['label' => 'Discs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="disc-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
