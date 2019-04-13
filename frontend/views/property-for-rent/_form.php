<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\PropertyForRent */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="property-for-rent-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'property_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rooms')->textInput() ?>

    <?= $form->field($model, 'rent')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'private_owner_id')->textInput() ?>

    <?= $form->field($model, 'staff_id')->textInput() ?>

    <?= $form->field($model, 'branch_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
