<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CampYear */

$this->title = 'Create Camp Year';
$this->params['breadcrumbs'][] = ['label' => 'Camp Years', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="camp-year-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
