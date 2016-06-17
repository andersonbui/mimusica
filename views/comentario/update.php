<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Comentario */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Comentario',
]) . $model->id_usuario;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Comentarios'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_usuario, 'url' => ['view', 'id_usuario' => $model->id_usuario, 'id_cancion' => $model->id_cancion]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="comentario-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
