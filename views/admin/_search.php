<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UsuarioSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="usuario-ssearch">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?php //  $form->field($model, 'email') ?>

    <?php //  $form->field($model, 'password') ?>

    <?php //  $form->field($model, 'nombres') ?>

    <?php //  $form->field($model, 'apellidos') ?>

    <?php //   $form->field($model, 'tipo') ?>

    <?= $form->field($model, 'nombre_apellido') ?>

    <?php // echo $form->field($model, 'id_tipo_usuario') ?>

    <div class="form-group">
        <?= Html::submitButton(\Yii::t("yii",'Search'), ['class' => 'btn btn-primary']) ?>
        <?php // echo Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
