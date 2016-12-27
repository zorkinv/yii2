<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Stud */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="stud-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fam')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nam')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'otch')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gruppa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
