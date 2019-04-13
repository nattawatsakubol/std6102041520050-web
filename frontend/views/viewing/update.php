<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Viewing */

$this->title = 'Update Viewing: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Viewings', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="viewing-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
