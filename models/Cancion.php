<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cancion".
 *
 * @property integer $id_cancion
 * @property string $autor
 * @property string $email
 * @property string $titulo
 * @property string $genero
 * @property string $album
 * @property integer $anioCreacion
 * @property string $video
 * @property string $audio
 * @property string $fecha_subida
 * @property string $letra
 * @property string $total_reproduciones
 */
class Cancion extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'cancion';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['id_cancion', 'titulo', 'genero', 'anioCreacion', 'letra'], 'required'],
            [['id_cancion', 'anioCreacion'], 'integer'],
            [['fecha_subida'], 'safe'],
            [['letra'], 'string'],
            [['autor', 'video', 'audio'], 'string', 'max' => 100],
            [['email', 'titulo', 'genero', 'album'], 'string', 'max' => 50],
            [['total_reproduciones'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id_cancion' => Yii::t('app', 'Id'),
            'autor' => Yii::t('app', 'Author'),
            'email' => Yii::t('app', 'Email'),
            'titulo' => Yii::t('app', 'Title'),
            'genero' => Yii::t('app', 'Genero'),
            'album' => Yii::t('app', 'Album'),
            'anioCreacion' => Yii::t('app', 'Year of creation'),
            'video' => Yii::t('app', 'Video'),
            'audio' => Yii::t('app', 'Song'),
            'fecha_subida' => Yii::t('app', 'Upload date'),
            'letra' => Yii::t('app', 'Letter'),
            'total_reproduciones' => Yii::t('app', 'Total Views'),
        ];
    }

    /**
     * @inheritdoc
     * @return CancionQuery the active query used by this AR class.
     */
    public static function find() {
        return new CancionQuery(get_called_class());
    }

}
