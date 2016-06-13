<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Cancion */

$this->title = Yii::t('app', 'Update song', [
    'modelClass' => 'Cancion',
]) . $model->id_cancion;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Songs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->titulo, 'url' => ['view', 'id' => $model->id_cancion]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="cancion-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
