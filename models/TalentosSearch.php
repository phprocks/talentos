<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Talentos;

/**
 * TalentosSearch represents the model behind the search form about `app\models\Talentos`.
 */
class TalentosSearch extends Talentos
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'pa_id', 'flag_efetivado'], 'integer'],
            [['indicado_por', 'nome_talento', 'cel_talento', 'tel_talento', 'email_talento', 'empresa_talento', 'salario_talento', 'observacao', 'created'], 'safe'],
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
        $query = Talentos::find();

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
            'id' => $this->id,
            'pa_id' => $this->pa_id,
            'created' => $this->created,
            'flag_efetivado' => $this->flag_efetivado,
        ]);

        $query->andFilterWhere(['like', 'indicado_por', $this->indicado_por])
            ->andFilterWhere(['like', 'nome_talento', $this->nome_talento])
            ->andFilterWhere(['like', 'cel_talento', $this->cel_talento])
            ->andFilterWhere(['like', 'tel_talento', $this->tel_talento])
            ->andFilterWhere(['like', 'email_talento', $this->email_talento])
            ->andFilterWhere(['like', 'empresa_talento', $this->empresa_talento])
            ->andFilterWhere(['like', 'salario_talento', $this->salario_talento])
            ->andFilterWhere(['like', 'observacao', $this->observacao]);

        return $dataProvider;
    }
}
