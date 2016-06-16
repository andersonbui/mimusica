<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Cancion */

$this->title = $model->id_cancion;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Cancions'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cancion-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id_cancion], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id_cancion], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_cancion',
            'autor',
            'email:email',
            'titulo',
            'genero',
            'album',
            'anioCreacion',
            'video',
            'audio',
            'fecha_subida',
            'letra:ntext',
            'total_reproduciones',
        ],
    ]) ?>

</div>
