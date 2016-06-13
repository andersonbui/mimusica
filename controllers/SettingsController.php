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

use Yii;
use dektrium\user\controllers\SettingsController as BaseSettingsController;

/**
 * SettingsController manages updating user settings (e.g. profile, email and password).
 *
 * @property \dektrium\user\Module $module
 *
 * @author Dmitry Erofeev <dmeroff@gmail.com>
 */
class SettingsController extends BaseSettingsController {

    /**
     * Shows profile settings form.
     *
     * @return string|\yii\web\Response
     */
    public function actionProfile() {
        $model = $this->finder->findProfileById(Yii::$app->user->identity->getId());

        if ($model == null) {
            $model = Yii::createObject([
                        'class' => \app\models\Perfil::className(),
                        'scenario' => 'update',
            ]);
            $model->link('user', Yii::$app->user->identity);
        }

        $event = $this->getProfileEvent($model);

        $this->performAjaxValidation($model);

        $this->trigger(self::EVENT_BEFORE_PROFILE_UPDATE, $event);
        if ($model->load(Yii::$app->request->post())) {
            //-------
            ////get the instance of the uploaded file
//            'class' => $model->setScenario('update');
            $foto = \yii\web\UploadedFile::getInstance($model, 'foto');
            if ($foto != null) {
                $imagen = Yii::$app->user->identity->username;
                $foto->saveAs('upload/imagenes/' . $imagen . '.' . $foto->extension);
                //guardar la ubicacion en la base de datos
                $model->foto = 'upload/imagenes/' . $imagen . '.' . $foto->extension;
            }
            //-------

            if ($model->save()) {
                Yii::$app->getSession()->setFlash('success', Yii::t('user', 'Your profile has been updated'));
                $this->trigger(self::EVENT_AFTER_PROFILE_UPDATE, $event);
                return $this->refresh();
            }
        }

        return $this->render('profile', [
                    'model' => $model,
        ]);
    }

}
