<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CampGroupSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Camp Groups';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="camp-group-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Camp Group', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'gid',
            'name',
            'camp',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
