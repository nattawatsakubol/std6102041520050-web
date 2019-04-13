<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Viewing */

$this->title = 'Create Viewing';
$this->params['breadcrumbs'][] = ['label' => 'Viewings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="viewing-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
