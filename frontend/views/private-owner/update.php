<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\PrivateOwner */

$this->title = 'Update Private Owner: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Private Owners', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="private-owner-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
