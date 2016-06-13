<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UsuarioSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = \Yii::t("yii", 'Users');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usuario-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php
    // echo $this->render('_search', ['model' => $searchModel]);
    ?>
    <p>
    <?= Html::a(\Yii::t("yii", 'Create user'), ['create'], ['class' => 'btn btn-success']) ?>
    <?php print_r($paramet); ?>
    </p>

    <?=
//    GridView::begin();
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
//            ['class' => 'yii\grid\SerialColumn'],
            'id_tusuario',
            'email:email',
            'nombres',
            'apellidos',
            'apodo',
//            'nombre_tipo',
//            'nombre_apellido',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);
    ?>

    <?php  echo $this->render('_search', ['model' => $searchModel]) ?>

</div>
