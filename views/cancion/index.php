<?php
//fuente: http://vensign.com/php-como-cortar-un-texto-a-un-largo-determinado/
function getSubString($string, $length = NULL) {
    //Si no se especifica la longitud por defecto es 50
    if ($length == NULL)
        $length = 50;
    //Primero eliminamos las etiquetas html y luego cortamos el string
    $stringDisplay = substr(strip_tags($string), 0, $length);
    //Si el texto es mayor que la longitud se agrega puntos suspensivos
    if (strlen(strip_tags($string)) > $length)
        $stringDisplay .= ' ...';
    return $stringDisplay;
}

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
    <?php // echo $this->render('_search', ['model' => $searchModel]);  ?>

    <p>
        <?php // echo  Html::a(Yii::t('app', 'Create song'), ['create'], ['class' => 'btn btn-success']) ?>
        <?php // print_r($paramet);  ?>
    </p>
    <?php Pjax::begin(); ?>   
    <div class="container">

        <?php
        echo yii\widgets\ListView::widget([
            'dataProvider' => $dataProvider,
            'itemOptions' => ['class' => 'item '],
            'options' => [
                'tag' => 'div',
                'class' => 'list-wrapper',
                'id' => 'list-wrapper',
            ],
            'layout' => "{items}\n{summary}\n{pager}",
            'itemView' => function ($model, $key, $index, $widget) {
                return $this->render('_post', ['model' => $model]);
        // or just do some echo
        //    return $model->titulo . ' posted by ' . $model->autor;
            },
            'pager' => [
                'firstPageLabel' => \Yii::t("app", 'first'),
                'lastPageLabel' => \Yii::t("app", 'last'),
                'nextPageLabel' => \Yii::t("app", 'next'),
                'prevPageLabel' => \Yii::t("app", 'previous'),
                'maxButtonCount' => 3,
            ],
        ]);
        ?>    </div>

    <?php
//    GridView::widget([
//        'dataProvider' => $dataProvider,
//        'filterModel' => $searchModel,
//        'layout' => "{summary}\n{items}\n{pager}",
//        'columns' => [
//            ['class' => 'yii\grid\SerialColumn'],
//            'id_cancion',
//            'autor',
//            'titulo',
//            'genero',
//            // 'album',
//            // 'anioCreacion',
//            // 'video',
//            // 'audio',
//            // 'fecha_subida',
//            // 'letra:ntext',
//            // 'total_reproduciones',
//            ['class' => 'yii\grid\ActionColumn'],
//        ],
//    ]);
    ?>
    <?php Pjax::end(); ?></div>
