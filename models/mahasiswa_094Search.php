<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Mahasiswa094;

/**
 * mahasiswa_094Search represents the model behind the search form of `app\models\Mahasiswa094`.
 */
class mahasiswa_094Search extends Mahasiswa094
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'nim'], 'integer'],
            [['nama', 'kelas', 'jurusan'], 'safe'],
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
        $query = Mahasiswa094::find();

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
            'nim' => $this->nim,
        ]);

        $query->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'kelas', $this->kelas])
            ->andFilterWhere(['like', 'jurusan', $this->jurusan]);

        return $dataProvider;
    }
}
