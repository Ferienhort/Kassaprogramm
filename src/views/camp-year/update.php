<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CampYear */

$this->title = 'Update Camp Year: ' . ' ' . $model->campYear;
$this->params['breadcrumbs'][] = ['label' => 'Camp Years', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->campYear, 'url' => ['view', 'id' => $model->campYear]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="camp-year-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
