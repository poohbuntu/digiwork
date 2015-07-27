<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DigitalSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Digitals';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="digital-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Digital', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'regis_num',
            'date_work',
            'department.name',
            'subject:ntext',
            'num_pages',
            'paper_type',
            'num_plates',
            'course.title',
            'num_series',
            'personnel.full_name',
            'total_pages',
            'total_papers',

            ['class' => 'yii\grid\ActionColumn'],
        ],
        'pager' => [
			'firstPageLabel' => 'First',
			'lastPageLabel' => 'Last',
    	],
    ]); ?>

</div>
