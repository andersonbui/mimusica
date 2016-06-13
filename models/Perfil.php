<?php

/*
 * This file is part of the Dektrium project.
 *
 * (c) Dektrium project <http://github.com/dektrium/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace app\models;

use karpoff\icrop\CropImageUploadBehavior;
use dektrium\user\models\Profile as BaseProfile;

/**
 * This is the model class for table "profile".
 *
 * @property integer $user_id
 * @property string  $nombres
 * @property string  $apellidos
 * @property string  $foto
 * @property User    $user
 *
 * @author Dmitry Erofeev <dmeroff@gmail.com
 */
class Perfil extends BaseProfile {

    /**
     * @inheritdoc
     */
    function behaviors() {
        return [
            [
                'class' => CropImageUploadBehavior::className(),
                'attribute' => 'foto',
                'scenarios' => ['insert', 'update'],
                'path' => '@webroot/upload/docs',
                'url' => '@web/upload/docs',
                'ratio' => 1,
                'crop_field' => 'photo_crop',
                'cropped_field' => 'photo_cropped',
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            'nombresString' => ['nombres', 'string'],
            'apellidosString' => ['apellidos', 'string'],
            'fotoString' => ['foto', 'string'],
            'nombresLength' => ['nombres', 'string', 'max' => 255],
            'apellidosLength' => ['apellidos', 'string', 'max' => 255],
            'fotoLength' => ['foto', 'string', 'max' => 255],
//            'fotoFile' => ['foto', 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
//            'fotoFile' => ['foto', 'file', 'extensions' => 'jpeg, gif, png'],
            'fotoFile' => ['foto', 'file', 'extensions' => 'jpeg, gif, png', 'on' => ['insert', 'update']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'nombres' => \Yii::t('app', 'First names'),
            'apellidos' => \Yii::t('app', 'Last names'),
            'foto' => \Yii::t('app', 'Photo'),
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'perfil';
    }

}
