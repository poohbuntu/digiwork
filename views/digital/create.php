<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Digital */

$this->title = 'Create Digital';
$this->params['breadcrumbs'][] = ['label' => 'Digitals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="digital-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
