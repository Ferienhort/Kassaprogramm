<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CampGroup */

$this->title = 'Update Camp Group: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Camp Groups', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->gid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="camp-group-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
