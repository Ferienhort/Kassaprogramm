<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\KidSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kids';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kid-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Kid', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kid',
            'number',
            'firstname',
            'lastname',
            'campGroup',
            // 'account',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
