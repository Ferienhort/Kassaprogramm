<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CampGroup */

$this->title = 'Create Camp Group';
$this->params['breadcrumbs'][] = ['label' => 'Camp Groups', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="camp-group-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
