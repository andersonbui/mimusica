<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\CancionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Songs');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cancion-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create song'), ['create'], ['class' => 'btn btn-success']) ?>
        <?php // print_r($paramet); ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_cancion',
            'autor',
            'titulo',
            'genero',
            // 'album',
            // 'anioCreacion',
            // 'video',
            // 'audio',
            // 'fecha_subida',
            // 'letra:ntext',
            // 'total_reproduciones',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
