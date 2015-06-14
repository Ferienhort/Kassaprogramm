<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Kid */

$this->title = 'Update Kid: ' . ' ' . $model->kid;
$this->params['breadcrumbs'][] = ['label' => 'Kids', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kid, 'url' => ['view', 'id' => $model->kid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kid-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
