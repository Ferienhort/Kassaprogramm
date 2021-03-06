<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Kid */

$this->title = $model->kid;
$this->params['breadcrumbs'][] = ['label' => 'Kids', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kid-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->kid], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->kid], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'kid',
            'number',
            'firstname',
            'lastname',
            'campGroup',
            'account',
        ],
    ]) ?>

</div>
