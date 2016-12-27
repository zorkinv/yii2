<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UchkursSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="uchkurs-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'disc') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'semestr') ?>

    <?= $form->field($model, 'tip') ?>

    <?= $form->field($model, 'zet') ?>

    <?php // echo $form->field($model, 'chas_o') ?>

    <?php // echo $form->field($model, 'chas_t') ?>

    <?php // echo $form->field($model, 'chas_p') ?>

    <?php // echo $form->field($model, 'chas_l') ?>

    <?php // echo $form->field($model, 'chas_s') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
