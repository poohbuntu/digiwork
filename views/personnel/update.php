<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Personnel */

$this->title = 'Update Personnel: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Personnels', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="personnel-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
