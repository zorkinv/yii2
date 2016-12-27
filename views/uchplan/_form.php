<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use app\models\Profil;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Uchplan */
/* @var $form yii\widgets\ActiveForm */
// получаем всех авторов
    $naps = Profil::find()->all();
// формируем массив, с ключем равным полю 'id' и значением равным полю 'name' 
    $items = ArrayHelper::map($naps,'name','name');
    $params = [
        'prompt' => 'Выбирите профиль...'
    ];
    

?>

<div class="uchplan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'profil')->dropDownList($items,$params) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dop_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'forma')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Изменить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
