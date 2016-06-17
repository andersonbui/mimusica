<?php

namespace app\models;

use dektrium\user\models\User as ActiveRecord;

class Usuario extends ActiveRecord {
//    public $password_repeat;
//    public $verifyCode;
    public function attributeLabels() {
        $attribLabels = parent::attributeLabels();
        $attribLabels['username'] = \Yii::t('app', 'Nick name');
//        return ArrayHelper::merge($attribLabels, [
//                    'nombres' => Yii::t('app', 'Full Name'),
//                    'apellidos' => Yii::t('app', 'Last name'),
//                    'foto' => Yii::t('app', 'Photo'),
//                    'tipo' => Yii::t('app', 'Type'),
//        ]);
        return $attribLabels;
    }
    
     /** @inheritdoc */
    public static function tableName()
    {
        return '{{%user}}';
    }
    
//    public function rules() {
//        $rules = parent::rules();
//        $rules['usernameRequired'] = ['apodo', 'required', 'on' => ['register', 'create', 'connect', 'update']];
//        $rules['usernameMatch'] = ['apodo', 'match', 'pattern' => static::$usernameRegexp];
//        $rules['usernameLength'] = ['apodo', 'string', 'min' => 3, 'max' => 255];
//        $rules['usernameUnique'] = ['apodo', 'unique', 'message' => Yii::t('user', 'This nickname has already been taken')];
//        $rules['usernameTrim'] = ['apodo', 'trim'];
//
//        return ArrayHelper::merge($attribLabels, [
////                    [['nombres', 'apellidos'], 'required'],
////                    // username rules
////                    'fullnameLength' => ['nombres', 'string', 'min' => 3, 'max' => 255],
////                    'fullnameTrim' => ['nombres', 'filter', 'filter' => 'trim'],
////                    'fullnamePattern' => ['nombres', 'match', 'pattern' => static::$usernameRegexp],
////                    'fullnameRequired' => ['nombres', 'required'],
//        ]);
//    }
//    
//    public static function isUserAdmin($id) {
//        if (Usuario::findOne(['id_tusuario' => $id, 'estado' => '1', 'tipo' => '2'])) {
//            return true;
//        } else {
//            return false;
//        }
//    }
//
//    public static function isUserSimple($id) {
//        if (Usuario::findOne(['id_tusuario' => $id, 'estado' => '1', 'tipo' => '1'])) {
//            return true;
//        } else {
//            return false;
//        }
//    }
}
