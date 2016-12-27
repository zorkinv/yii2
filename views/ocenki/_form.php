<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Ocenki */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ocenki-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ocenka')->textInput() ?>

    <?= $form->field($model, 'uchkurs')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'stud')->textInput() ?>

    <?= $form->field($model, 'prep')->textInput() ?>

    <?= $form->field($model, 'data')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
