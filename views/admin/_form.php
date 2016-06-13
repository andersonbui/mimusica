<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Usuario */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="usuario-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_tusuario')->hiddenInput() ?>
    
    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password')->textInput(['maxlength' => true])->passwordInput() ?>

    <?= $form->field($model, 'nombres')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'apellidos')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tipo')->dropDownList($model->getListaTipos(), ['prompt' => 'Seleccione uno' ]) ?>
    
    <?= $form->field($model, 'foto')->FileInput() ?>
    
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? \Yii::t("yii",'Create') : \Yii::t("yii",'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php
    ActiveForm::end();
    ?>

</div>
