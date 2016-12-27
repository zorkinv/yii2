<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Ocenki */
/* @var $form ActiveForm */
?>
<div class="ocenki-new">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'ocenka') ?>
        <?= $form->field($model, 'uchkurs') ?>
        <?= $form->field($model, 'stud') ?>
        <?= $form->field($model, 'prep') ?>
        <?= $form->field($model, 'data') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- ocenki-new -->
