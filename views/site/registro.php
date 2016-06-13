<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = Yii::t('user', 'Sign up');
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= Html::encode($this->title) ?></h1>
<h4><?php // echo 'aqui '.$mensg.' hola';    ?></h4>

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

                <?= $form->field($model, 'email') ?>

                <?= $form->field($model, 'username',['inputOptions' => ['placeHolder' => \Yii::t("yii",'Nick name')]]) ?>

                <?php if ($module->enableGeneratingPassword == false): ?>
                    <?= $form->field($model, 'password')->passwordInput() ?>
                    <?= $form->field($model, 'password_repeat')->passwordInput() ?>
                <?php endif ?>

                <?= $form->field($model, 'nombres')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'apellidos')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'foto')->fileInput() ?>

                <?= Html::submitButton(Yii::t('user', 'Sign up'), ['class' => 'btn btn-success btn-block']) ?>

                <?php ActiveForm::end(); ?>
            </div>
        </div>
        <p class="text-center">
            <?= Html::a(Yii::t('user', 'Already registered? Sign in!'), ['/user/security/login']) ?>
        </p>
    </div>
</div>
