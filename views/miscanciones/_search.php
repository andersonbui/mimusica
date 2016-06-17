<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MiscancionesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cancion-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_cancion') ?>

    <?= $form->field($model, 'autor') ?>

    <?= $form->field($model, 'titulo') ?>

    <?= $form->field($model, 'genero') ?>

    <?php // echo $form->field($model, 'album') ?>

    <?php // echo $form->field($model, 'anioCreacion') ?>

    <?php // echo $form->field($model, 'video') ?>

    <?php // echo $form->field($model, 'audio') ?>

    <?php // echo $form->field($model, 'fecha_subida') ?>

    <?php // echo $form->field($model, 'letra') ?>

    <?php // echo $form->field($model, 'total_reproduciones') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
