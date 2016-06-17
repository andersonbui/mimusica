<?php

use yii\helpers\Html;

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
                <?php // echo Html::a(Html::encode($model->id_usuario)) ?>
                <?php // echo Html::a(Html::encode(dektrium\user\models\User::findIdentity($model->id_usuario))->username) ?>
                <?php echo dektrium\user\models\User::findIdentity($model->id_usuario)->email ?>
            </h3>
            <h4><?= Html::encode($model->comentario) ?></h4>

            <br>
        <!--</div>-->
    </div>

</article>