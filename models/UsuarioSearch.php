<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TUsuario;
use app\models\Tipousuario;
use yii\db\Query;

/**
 * UsuarioSearch represents the model behind the search form about `app\models\Usuario`.
 */
class UsuarioSearch extends TUsuario {
    public $nombre_tipo;
//    '$nombre_apellido',
    public function rules() {
        return [
            [['id_tusuario'], 'integer'],
            [['email', 'password', 'nombres', 'apellidos', 'apodo', 'nombre_tipo','nombre_apellido'], 'safe'],
//            [['id_tipo_usuario'], 'integer'],
        ];
    }

    public function scenarios() {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Crea los datos que proporciona la instancia con la consulta de busqueda aplicada.
     * @param array $params
     * @return ActiveDataProvider
     */
    public function search($params) {
        //$query = Usuario::find()->join('LEFT OUTER JOIN', 'tipousuario','usuario.id_tipo_usuario = tipousuario.id');
        $query = new Query;
        $query->select(['id_tusuario','email', 'nombres', 'apellidos', 'apodo','tipo','nombre_tipo'])
                ->from('t_usuarios')
	        ->leftJoin('t_tipo_usuario', 't_usuarios.tipo = t_tipo_usuario.tipo_usuario')
                ->indexBy('id_tusuario');

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 5,
            ],
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            //return $dataProvider;
        }
        
        $query->andFilterWhere([
            'id_tusuario' => $this->id_tusuario,
            'nombre_tipo' => $this->tipo,
            'estado' => $this->estado,
        ]);
//        $query->andFilterWhere([
//            'fecha_nacimiento' => $this->fecha_nacimiento,
//            'id_tipo_usuario' => $this->id_tipo_usuario,
//        ]);
        //filtros de busqueda
         $query->orFilterWhere(['like','nombres',$this->nombre_apellido])
            ->orFilterWhere(['like','apellidos',$this->nombre_apellido]);
         
        $query->andFilterWhere(['like', 'email', $this->email])
//                ->andFilterWhere(['like', 'nombres', $this->nombres])
//                ->andFilterWhere(['like', 'tipo', $this->tipo])
                ->andFilterWhere(['like', 'nombres', $this->nombres])
                ->andFilterWhere(['like', 'apellidos', $this->apellidos])
                ->andFilterWhere(['like', 'nombre_tipo', $this->nombre_tipo])
                ->andFilterWhere(['like', 'apodo', $this->apodo]);

        return $dataProvider;
    }
    
    public function search2($params)
    {
        $query = TUsuario::find()
                ->from(Tipousuario::tableName())
                ->andWhere('t_usuarios.tipo = tipo_usuario');

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
            'id_tusuario' => $this->id_tusuario,
            'tipo' => $this->tipo,
            'estado' => $this->estado,
        ]);

        $query->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'password', $this->password])
            ->andFilterWhere(['like', 'nombres', $this->nombres])
            ->andFilterWhere(['like', 'apellidos', $this->apellidos])
            ->andFilterWhere(['like', 'apodo', $this->apodo])
            ->andFilterWhere(['like', 'foto', $this->foto]);

        return $dataProvider;
    }
}
