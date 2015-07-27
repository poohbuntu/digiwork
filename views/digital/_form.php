<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;
use app\models\Department;
use app\models\Course;
use app\models\Personnel;

/* @var $this yii\web\View */
/* @var $model app\models\Digital */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="digital-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'regis_num')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date_work')->widget(DatePicker::className(),[
    	'options' => ['class' => 'form-control'],
    	'language' => 'th',
    	'dateFormat' => 'yyyy-MM-dd'
    ]) ?>

    <?= $form->field($model, 'department_id')->dropDownList(
    	ArrayHelper::map(Department::find()->all(), 'id', 'name'),
    	['prompt' => 'เลือกหน่วยงาน']
    ) ?>

    <?= $form->field($model, 'subject')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'num_pages')->textInput() ?>

    <?= $form->field($model, 'paper_type')->textInput() ?>

    <?= $form->field($model, 'num_plates')->textInput() ?>

    <?= $form->field($model, 'course_id')->dropDownList(
    	ArrayHelper::map(Course::find()->all(), 'id', 'title'),
    	['prompt' => 'เลือกหลักสูตร']
    ) ?>

    <?= $form->field($model, 'num_series')->textInput() ?>

    <?= $form->field($model, 'personnel_id')->dropDownList(
    	ArrayHelper::map(Personnel::find()->all(), 'id', 'full_name'),
    	['prompt' => 'เลือกบุคลากร']
    ) ?>

    <?= $form->field($model, 'total_pages')->textInput() ?>

    <?= $form->field($model, 'total_papers')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php
$script = <<< JS
$(document).ready(function(){
    $('#digital-total_pages').focus(function(){
         $('#digital-total_pages').val(Math.ceil(parseInt($('#digital-num_pages').val())/parseInt($('#digital-paper_type').val()))*parseInt($('#digital-num_plates').val()));
    })
    $('#digital-total_papers').focus(function(){
         $('#digital-total_papers').val(parseInt($('#digital-num_plates').val())*parseInt($('#digital-num_series').val()));
    })
}); 
JS;
$this->registerJs($script);
?>
