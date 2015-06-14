<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CampYearSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Camp Years';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="camp-year-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Camp Year', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'campYear',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
