<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cancion".
 *
 * @property integer $id
 * @property string $ubicacion
 */
class Acorde extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'acordes';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['id', 'ubicacion'], 'required'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => Yii::t('app', 'Id'),
            'ubicacion' => Yii::t('app', 'Ubicación'),
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
