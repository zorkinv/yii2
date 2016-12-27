<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Uchkurs */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="uchkurs-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'disc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'semestr')->textInput() ?>

    <?= $form->field($model, 'tip')->textInput() ?>

    <?= $form->field($model, 'zet')->textInput() ?>

    <?= $form->field($model, 'chas_o')->textInput() ?>

    <?= $form->field($model, 'chas_t')->textInput() ?>

    <?= $form->field($model, 'chas_p')->textInput() ?>

    <?= $form->field($model, 'chas_l')->textInput() ?>

    <?= $form->field($model, 'chas_s')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
