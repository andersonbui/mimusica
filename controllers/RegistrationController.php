<?php

/*
 * This file is part of the Dektrium project.
 *
 * (c) Dektrium project <http://github.com/dektrium/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace app\controllers;

use dektrium\user\controllers\RegistrationController as BaseRegistrationController;
//use app\models\RegistrationForm;

/**
 * RegistrationController is responsible for all registration process, which includes registration of a new account,
 * resending confirmation tokens, email confirmation and registration via social networks.
 *
 * @property \dektrium\user\Module $module
 *
 * @author Dmitry Erofeev <dmeroff@gmail.com>
 */
class RegistrationController extends BaseRegistrationController
{
    public function actions() {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }
    /**
     * Displays the registration page.
     * After successful registration if enableConfirmation is enabled shows info message otherwise redirects to home page.
     *
     * @return string
     * @throws \yii\web\HttpException
     */
//    public function actionRegister()
//    {
//        if (!$this->module->enableRegistration) {
//            throw new NotFoundHttpException();
//        }
//
//        /** @var RegistrationForm $model */
//        $model = \Yii::createObject(RegistrationForm::className());
//        $event = $this->getFormEvent($model);
//
//        $this->trigger(self::EVENT_BEFORE_REGISTER, $event);
//
//        $this->performAjaxValidation($model);
//
//        if ($model->load(\Yii::$app->request->post()) && $model->register()) {
//
//            $this->trigger(self::EVENT_AFTER_REGISTER, $event);
//
//            return $this->render('/message', [
//                'title'  => Yii::t('user', 'Your account has been created'),
//                'module' => $this->module,
//            ]);
//        }
//
//        return $this->render('register', [
//            'model'  => $model,
//            'module' => $this->module,
//        ]);
//    }
}
