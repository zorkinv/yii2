<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\VedStr */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ved-str-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ved')->textInput() ?>

    <?= $form->field($model, 'stud')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ocenka')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
