<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Cancion */

$this->title = $model->titulo;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Songs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cancion-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?php Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id_cancion], ['class' => 'btn btn-primary']) ?>
        <?php
        Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id_cancion], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ])
        ?>
    </p>
    <div class='row'>
        <div class='col-lg-4 col-lg-push-8'>
        <!--<div class='col-sm-4'>-->
            <div class='embed-responsive embed-responsive-16by9'>
                <iframe 
                    src="<?php echo $model->video ?>"
                    class="embed-responsive-item">
                </iframe> 
            </div>
        </div>
        <div class='col-lg-8 col-lg-pull-4'>
        <!--<div class='col-sm-8'>-->

            <?=
            DetailView::widget([
                'model' => $model,
                'template' => '<tr><div class="row block" style="background:white; border-top: 1px black solid "> <div class="col-sm-3"><b>{label}</b></div><div class="col-sm-9">{value}</div> </div></tr>',
                'attributes' => [
//                    'id_cancion',
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
            ])
            ?>
        </div>

    </div>
</div>
