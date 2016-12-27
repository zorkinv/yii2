<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Ocenki */

$this->title = 'Create Ocenki';
$this->params['breadcrumbs'][] = ['label' => 'Ocenkis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ocenki-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
