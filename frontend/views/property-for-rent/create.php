<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\PropertyForRent */

$this->title = 'Create Property For Rent';
$this->params['breadcrumbs'][] = ['label' => 'Property For Rents', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="property-for-rent-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
