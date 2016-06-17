<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MiscancionesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'My songs');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cancion-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]);  ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create song'), ['create'], ['class' => 'btn btn-success']) ?>
        <?php // print_r($paramss); ?>
    </p>
    <?php Pjax::begin(); ?>   
    <div class="table-responsive"> 
        <?=
        GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'layout' => "{summary}\n{items}\n{pager}",
            'options' => ['class' => 'grid-view'],
//            'tableOptions' => ['class' => 'table table-striped table-hover table-bordered'],
            'tableOptions' => ['class' => 'table   success'],
//            'rowOptions' => ['class' => ' success'],
            'columns' => [
//            ['class' => 'yii\grid\SerialColumn'],

                'id_cancion',
                'autor',
                'titulo',
                'genero',
//            'id_usuario',
                // 'album',
                // 'anioCreacion',
                // 'video',
                // 'audio',
                // 'fecha_subida',
                // 'letra:ntext',
                // 'total_reproduciones',
                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]);
        ?>
        <?php Pjax::end(); ?>
    </div>
</div>
