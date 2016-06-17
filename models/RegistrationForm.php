<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\models;

use dektrium\user\models\RegistrationForm as BaseRegistrationForm;
use yii\helpers\ArrayHelper;
use Yii;

class RegistrationForm extends BaseRegistrationForm {

    public $password_repeat;
    public $verifyCode;

    public function attributeLabels() {
        $attribLabels = parent::attributeLabels();
        $attribLabels['username'] = Yii::t('app', 'Nick name');
        return ArrayHelper::merge($attribLabels, [
                    'password_repeat' => Yii::t('app', 'Password repeat'),
                    'verifyCode' => Yii::t('app', 'Verification Code'),
        ]);
    }

    public function rules() {
        $user = $this->module->modelMap['User'];
        $rules = parent::rules();
        $rules['usernameUnique'] = [
            'username',
            'unique',
            'targetClass' => $user,
            'message' => Yii::t('app', 'This Nick name has already been taken')
        ];
        return ArrayHelper::merge($rules, [
        'password_repeatRequired' => ['password_repeat', 'required'],
        'password_repeatLength' => ['password_repeat', 'compare', 'compareAttribute' => 'password', 'message' => 'Los passwords no coinciden'],
//        ['verifyCode', 'captcha'],
        ]);
    }

}
