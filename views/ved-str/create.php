<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\VedStr */

$this->title = 'Create Ved Str';
$this->params['breadcrumbs'][] = ['label' => 'Ved Strs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ved-str-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
