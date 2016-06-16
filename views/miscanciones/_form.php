<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Cancion */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cancion-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_cancion')->textInput() ?>

    <?= $form->field($model, 'autor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'titulo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'genero')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'album')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'anioCreacion')->textInput() ?>

    <?= $form->field($model, 'video')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'audio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fecha_subida')->textInput() ?>

    <?= $form->field($model, 'letra')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'total_reproduciones')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
