<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = Yii::t('user', 'Sign up');
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= Html::encode($this->title) ?></h1>
<h4><?php // echo 'aqui '.$mensg.' hola';       ?></h4>

<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?= Html::encode($this->title) ?></h3>
            </div>
            <div class="panel-body">
                <?php
                $form = ActiveForm::begin([
                            'id' => 'registration-form',
                            'enableAjaxValidation' => true,
                            'enableClientValidation' => false,
                ]);
                ?>

                <?= $form->field($model, 'email', ['inputOptions' => ['placeHolder' => \Yii::t("app", 'Email')]])->label("") ?>

                <?= $form->field($model, 'username', ['inputOptions' => ['placeHolder' => \Yii::t("app", 'Nick name')]])->label("") ?>

                <?php if ($module->enableGeneratingPassword == false): ?>
                    <?= $form->field($model, 'password', ['inputOptions' => ['placeHolder' => \Yii::t("app", 'Password')]])->passwordInput()->label("") ?>
                    <?= $form->field($model, 'password_repeat', ['inputOptions' => ['placeHolder' => \Yii::t("app", 'Password repeat')]])->passwordInput()->label("") ?>
                <?php endif ?>

                <?php 
//                echo $form->field($model, 'verifyCode')->widget(Captcha::className(), [
//                        'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
//                    ]) 
                        ?>

                <?= Html::submitButton(Yii::t('user', 'Sign up'), ['class' => 'btn btn-success btn-block']); ?>

                <?php ActiveForm::end(); ?>
            </div>
        </div>
        <p class="text-center">
            <?= Html::a(Yii::t('user', 'Already registered? Sign in!'), ['/user/security/login']) ?>
        </p>
    </div>
</div>
