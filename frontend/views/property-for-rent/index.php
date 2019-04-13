<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\PropertyForRentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Property For Rents';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="property-for-rent-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Property For Rent', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'property_no',
            'type',
            'rooms',
            'rent',
            //'private_owner_id',
            //'staff_id',
            //'branch_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
