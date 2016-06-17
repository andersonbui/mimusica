<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\Pjax;
use \yii\grid\GridView;
use \app\models\Comentario;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Cancion */

$this->title = $model->titulo;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Songs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
//if ((
$modelCo = new Comentario();
//            return $model;
//}$model = new Comentario();
//        else {
//            throw new NotFoundHttpException('The requested page does not exist.');
//        }
//$modelCo = \app\models\Comentario->findModel('');
?>
<div class="cancion-view">

    <h1><?= Html::encode($this->title) ?></h1>
    <h1><?php print_r($paramss); ?></h1>

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
    <div class="container">
        <div class="row">
            <div class='col-lg-8'>

                <?php Pjax::begin(); ?>   

                <?php $form = ActiveForm::begin(); ?>

                <?php $form->field($modelCo, 'id_usuario')->textInput() ?>

                <?php $form->field($modelCo, 'id_cancion')->textInput() ?>

                <?= $form->field($modelCo, 'comentario')->textInput(['maxlength' => true]) ?>

                <div class="form-group">
                    <?= Html::submitButton($modelCo->isNewRecord ? Yii::t('app', 'Enviar') : Yii::t('app', 'Update'), ['class' => $modelCo->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
                </div>

                <?php ActiveForm::end(); ?>

                <h2>COMENTARIOS</h2><br>
                <?php
                echo yii\widgets\ListView::widget([
                    'dataProvider' => $dataProviderr,
                    'itemOptions' => ['class' => 'item'],
                    'options' => [
                        'tag' => 'div',
                        'class' => 'list-wrapper',
                        'id' => 'list-wrapper',
                    ],
                    'layout' => "{items}\n{summary}\n{pager}",
                    'itemView' => function ($model, $key, $index, $widget) {
                return $this->render('_postcomentarios', ['model' => $model]);
                // or just do some echo
//                return $model->comentario;
            },
                    'pager' => [
                        'firstPageLabel' => \Yii::t("app", 'first'),
                        'lastPageLabel' => \Yii::t("app", 'last'),
                        'nextPageLabel' => \Yii::t("app", 'next'),
                        'prevPageLabel' => \Yii::t("app", 'previous'),
                        'maxButtonCount' => 3,
                    ],
                ]);
                ?>
                <?php
//                echo
//                GridView::widget([
//                    'dataProvider' => $dataProviderr,
//                    'filterModel' => $searchModel,
//                    'columns' => [
//                        ['class' => 'yii\grid\SerialColumn'],
//                        'id_usuario',
//                        'id_cancion',
//                        'comentario',
//                        'id',
//                        ['class' => 'yii\grid\ActionColumn'],
//                    ],
//                ]);
                ?>
                <?php Pjax::end(); ?>

            </div>
        </div>
    </div>
</div>
