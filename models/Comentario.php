<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cancion".
 *
 * @property integer $id
 * @property string $ubicacion
 */
class Comentario extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'comenario';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['comentario'], 'required'],
//            [['id_cancion'], 'required'],
//            [['id_usuario'], 'required'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id_cancion' => Yii::t('app', 'Id cancion'),
            'email' => Yii::t('app', 'Email'),
            'comentario' => Yii::t('app', 'Comentario'),
        ];
    }

    /**
     * @inheritdoc
     * @return CancionQuery the active query used by this AR class.
     */
//    public static function find() {
//        return new CancionQuery(get_called_class());
//    }

}
