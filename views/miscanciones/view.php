<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Cancion */

$this->title = $model->titulo;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'My songs'), 'url' => ['index']];
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
//            'id_cancion',
            'id_usuario',
            'autor',
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
