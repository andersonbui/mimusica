<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tipousuario".
 *
 * @property integer $id
 * @property string $nombre
 *
 * @property Usuario[] $usuarios
 */
class Tipousuario extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 't_tipo_usuario';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tipo_usuario', 'nombre_tipo'], 'required'],
            [['tipo_usuario'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'tipo_usuario' => 'tipo usuario',
            'nombre_tipo' => 'Nombre tipo usuario',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuarios() {
        return $this->hasMany(Usuario::className(), ['tipo_usuario' => 'tipo']);
    }
}
