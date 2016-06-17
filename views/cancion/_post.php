<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\helpers\HtmlPurifier;

/**
 * Return sub string sin etiquetas HTML y puntos suspensivos al final
 * @param $string String 
 * @param $length Largo que queremos el substring
 * @return String con ...
 */
?>

<article class="item" data-key="<?= $model->id_cancion; ?>">
    <div class="row " style="background: white; padding: 0px 20px; border-top: 1px green outset">
        <!--<div class="col-lg-12">-->
            <h3>
                <?= Html::a(Html::encode($model->titulo), Url::toRoute(['cancion/view', 'id' => $model->id_cancion]), ['title' => $model->titulo]) ?>
            </h3>
            <h4><?= Html::encode($model->autor) ?></h4>

            <div class="item-excerpt">
                <?php
                echo HtmlPurifier::process($model->genero) . ' -> ' . getSubString($model->letra)
                ?>    
            </div>
            <br>
        <!--</div>-->
    </div>

</article>