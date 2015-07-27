<?php
/* @var $this yii\web\View */
use yii\helpers\Html;

$this->title = 'งานดิจิตอล';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>ข้อมูลงานดิจิตอล</h1>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <p>
                	<?= Html::a('ลงข้อมูล งานดิจิตอล', ['digital/index'], ['class' => 'btn btn-lg btn-success']) ?>
                </p>
            </div>

            <div class="col-lg-4">
                <p>
                	<?= Html::a('หลักสูตร', ['course/index'], ['class' => 'btn btn-lg btn-info']) ?>
                </p>
                <p>
                	<?= Html::a('บุคลากร', ['personnel/index'], ['class' => 'btn btn-lg btn-info']) ?>
                </p>
                <p>
                	<?= Html::a('หน่วยงาน', ['department/index'], ['class' => 'btn btn-lg btn-info']) ?>
                </p>
			</div>
		</div>
	</div>
</div>

