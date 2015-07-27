<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "digital".
 *
 * @property string $id
 * @property string $regis_num
 * @property string $date_work
 * @property integer $department_id
 * @property string $subject
 * @property integer $num_pages
 * @property integer $paper_type
 * @property integer $num_plates
 * @property integer $course_id
 * @property integer $num_series
 * @property integer $personnel_id
 * @property integer $total_pages
 * @property integer $total_papers
 */
class Digital extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'digital';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['regis_num', 'date_work', 'department_id', 'subject', 'num_pages', 'paper_type', 'num_plates', 'course_id', 'num_series', 'personnel_id', 'total_pages', 'total_papers'], 'required'],
            [['date_work'], 'safe'],
            [['department_id', 'num_pages', 'paper_type', 'num_plates', 'course_id', 'num_series', 'personnel_id', 'total_pages', 'total_papers'], 'integer'],
            [['subject'], 'string'],
            [['regis_num'], 'string', 'max' => 4]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'regis_num' => 'เลขทะเบียนคุม',
            'date_work' => 'วันที่',
            'department_id' => 'หน่วยงาน',
            'subject' => 'เรื่อง',
            'num_pages' => 'จำนวนหน้า',
            'paper_type' => 'ประเภทกระดาษ',
            'num_plates' => 'จำนวนแผ่น',
            'course_id' => 'หลักสูตร',
            'num_series' => 'จำนวนชุด',
            'personnel_id' => 'บุคลากร',
            'total_pages' => 'จำนวนรวม',
            'total_papers' => 'จำนวนกระดาษ',
        ];
    }
	
	public function getDepartment()
	{
		return $this->hasOne(Department::className(), ['id' => 'department_id']);
	}
	
	public function getCourse()
	{
		return $this->hasOne(Course::className(), ['id' => 'course_id']);
	}
	
	    public function getPersonnel()
	{
		return $this->hasOne(Personnel::className(), ['id' => 'personnel_id']);
	}
}
