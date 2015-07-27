<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Digital;

/**
 * DigitalSearch represents the model behind the search form about `app\models\Digital`.
 */
class DigitalSearch extends Digital
{
    /**
     * @inheritdoc
     */
	public function attributes()
	{
		// add related fields to searchable attributes
		return array_merge(parent::attributes(), ['department.name', 'course.title', 'personnel.full_name']);
	} 
     
    public function rules()
    {
        return [
            [['id', 'department_id', 'num_pages', 'paper_type', 'num_plates', 'course_id', 'num_series', 'personnel_id', 'total_pages', 'total_papers'], 'integer'],
            [['regis_num', 'date_work', 'subject', 'department.name', 'course.title', 'personnel.full_name'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Digital::find();
        
        $query->joinWith(['department', 'course', 'personnel']);

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
		
		$dataProvider->pagination->pageSize=100;
        //$this->load($params);
        
		$dataProvider->sort->attributes['department.name'] = [
			'asc' => ['department.name' => SORT_ASC],
			'desc' => ['department.name' => SORT_DESC],
		];
		
		$dataProvider->sort->attributes['course.title'] = [
			'asc' => ['course.title' => SORT_ASC],
			'desc' => ['course.title' => SORT_DESC],
		];
		
		$dataProvider->sort->attributes['personnel.full_name'] = [
			'asc' => ['personnel.full_name' => SORT_ASC],
			'desc' => ['personnel.full_name' => SORT_DESC],
		];

		$this->load($params);
		
		if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'date_work' => $this->date_work,
            'department_id' => $this->department_id,
            'num_pages' => $this->num_pages,
            'paper_type' => $this->paper_type,
            'num_plates' => $this->num_plates,
            'course_id' => $this->course_id,
            'num_series' => $this->num_series,
            'personnel_id' => $this->personnel_id,
            'total_pages' => $this->total_pages,
            'total_papers' => $this->total_papers,
        ]);

        $query->andFilterWhere(['like', 'regis_num', $this->regis_num])
            ->andFilterWhere(['like', 'subject', $this->subject])
            ->andFilterWhere(['like', 'department.name', $this->department])
            ->andFilterWhere(['like', 'course.title', $this->course])
            ->andFilterWhere(['like', 'personnel.full_name', $this->personnel])
            ;

        return $dataProvider;
    }
}
