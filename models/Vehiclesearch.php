<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Vehicle;

/**
 * Vehiclesearch represents the model behind the search form about `app\models\Vehicle`.
 */
class Vehiclesearch extends Vehicle
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['vehice_id', 'vehicle_model', 'price'], 'integer'],
            [['vehicle_category', 'vehicle_name', 'manufacturer', 'color'], 'safe'],
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
        $query = Vehicle::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'vehice_id' => $this->vehice_id,
            'vehicle_model' => $this->vehicle_model,
            'price' => $this->price,
        ]);

        $query->andFilterWhere(['like', 'vehicle_category', $this->vehicle_category])
            ->andFilterWhere(['like', 'vehicle_name', $this->vehicle_name])
            ->andFilterWhere(['like', 'manufacturer', $this->manufacturer])
            ->andFilterWhere(['like', 'color', $this->color]);

        return $dataProvider;
    }
}
