<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Cancion;

/**
 * CancionSearch represents the model behind the search form about `app\models\Cancion`.
 */
class CancionSearch extends Cancion {

    public $autor_titulo;

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['id_cancion', 'anioCreacion'], 'integer'],
            [['autor_titulo', 'autor', 'titulo', 'genero', 'album', 'video', 'audio', 'fecha_subida', 'letra', 'total_reproduciones'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios() {
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
    public function search($params) {
        $query = Cancion::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 3,
            ],
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_cancion' => $this->id_cancion,
            'anioCreacion' => $this->anioCreacion,
            'fecha_subida' => $this->fecha_subida,
        ]);

        $query->orFilterWhere(['like', 'autor', $this->autor_titulo])
                ->orFilterWhere(['like', 'titulo', $this->autor_titulo]);

        $query->andFilterWhere(['like', 'autor', $this->autor])
//                ->andFilterWhere(['like', 'nombre_tipo', $this->autor_titulo])
                ->andFilterWhere(['like', 'titulo', $this->titulo])
                ->andFilterWhere(['like', 'genero', $this->genero])
                ->andFilterWhere(['like', 'album', $this->album])
                ->andFilterWhere(['like', 'video', $this->video])
                ->andFilterWhere(['like', 'audio', $this->audio])
                ->andFilterWhere(['like', 'letra', $this->letra])
                ->andFilterWhere(['like', 'total_reproduciones', $this->total_reproduciones]);

        return $dataProvider;
    }

}
