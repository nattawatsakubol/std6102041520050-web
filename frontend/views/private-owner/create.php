<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\PrivateOwner */

$this->title = 'Create Private Owner';
$this->params['breadcrumbs'][] = ['label' => 'Private Owners', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="private-owner-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
