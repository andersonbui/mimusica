<?php

namespace app\models;

use dektrium\user\models\LoginForm as BaseLoginForm;
/**
 * LoginForm is the model behind the login form.
 */
class LoginForm extends BaseLoginForm
{

    public function attributeLabels($names = null, $except = array()) {
        $attributes = parent::attributeLabels();
        $attributes['login'] = \Yii::t("app", 'Nick name or email');
        return $attributes;
    }
}
