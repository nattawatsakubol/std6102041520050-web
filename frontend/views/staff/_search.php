<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\StaffSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="staff-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'staff_no') ?>

    <?= $form->field($model, 'f_name') ?>

    <?= $form->field($model, 'l_name') ?>

    <?= $form->field($model, 'position') ?>

    <?php // echo $form->field($model, 'sex') ?>

    <?php // echo $form->field($model, 'd_o_b') ?>

    <?php // echo $form->field($model, 'salary') ?>

    <?php // echo $form->field($model, 'branch_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
