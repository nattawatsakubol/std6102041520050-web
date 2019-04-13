<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\ViewingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Viewings';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="viewing-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Viewing', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'client_id',
            'property_for_rent_id',
            'view_date',
            'comment',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
