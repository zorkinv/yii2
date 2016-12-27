<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use app\models\Nap;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Profil */
/* @var $form yii\widgets\ActiveForm */

// получаем всех авторов
    $naps = Nap::find()->all();
// формируем массив, с ключем равным полю 'id' и значением равным полю 'name' 
    $items = ArrayHelper::map($naps,'name','name');
    $params = [
        'prompt' => 'Выбирите направление...'
    ];
    

?>

<div class="profil-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nap')->dropDownList($items,$params)?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Изменить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
