<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\BookEntry */

$this->title = 'Update Book Entry: ' . ' ' . $model->bid;
$this->params['breadcrumbs'][] = ['label' => 'Book Entries', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->bid, 'url' => ['view', 'id' => $model->bid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="book-entry-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
