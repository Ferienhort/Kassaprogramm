<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\BookEntry;

/**
 * BookEntrySearch represents the model behind the search form about `app\models\BookEntry`.
 */
class BookEntrySearch extends BookEntry
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bid', 'fromAccount', 'toAccount'], 'integer'],
            [['amount'], 'number'],
            [['date', 'description'], 'safe'],
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
        $query = BookEntry::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'bid' => $this->bid,
            'fromAccount' => $this->fromAccount,
            'toAccount' => $this->toAccount,
            'amount' => $this->amount,
            'date' => $this->date,
        ]);

        $query->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }
}
