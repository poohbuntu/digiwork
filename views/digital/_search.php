<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DigitalSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="digital-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'regis_num') ?>

    <?= $form->field($model, 'date_work') ?>

    <?= $form->field($model, 'department_id') ?>

    <?= $form->field($model, 'subject') ?>

    <?php // echo $form->field($model, 'num_pages') ?>

    <?php // echo $form->field($model, 'paper_type') ?>

    <?php // echo $form->field($model, 'num_plates') ?>

    <?php // echo $form->field($model, 'course_id') ?>

    <?php // echo $form->field($model, 'num_series') ?>

    <?php // echo $form->field($model, 'personnel_id') ?>

    <?php // echo $form->field($model, 'total_pages') ?>

    <?php // echo $form->field($model, 'total_papers') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
