<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\PrivateOwner;

/**
 * PrivateOwnerSearch represents the model behind the search form of `frontend\models\PrivateOwner`.
 */
class PrivateOwnerSearch extends PrivateOwner
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'telephone', 'user_id'], 'integer'],
            [['owner_no', 'first_name', 'last_name', 'address'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = PrivateOwner::find();

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
            'id' => $this->id,
            'telephone' => $this->telephone,
            'user_id' => $this->user_id,
        ]);

        $query->andFilterWhere(['like', 'owner_no', $this->owner_no])
            ->andFilterWhere(['like', 'first_name', $this->first_name])
            ->andFilterWhere(['like', 'last_name', $this->last_name])
            ->andFilterWhere(['like', 'address', $this->address]);

        return $dataProvider;
    }
}
