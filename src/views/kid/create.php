<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Kid */

$this->title = 'Create Kid';
$this->params['breadcrumbs'][] = ['label' => 'Kids', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kid-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
