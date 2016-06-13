<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Usuario */

$this->title = \Yii::t("yii", 'Update user') . ': ' . $model->nombres;
$this->params['breadcrumbs'][] = ['label' => \Yii::t("yii", 'Users'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nombres, 'url' => ['view', 'id' => $model->id_tusuario]];
$this->params['breadcrumbs'][] = \Yii::t("yii", 'Update');
?>
<div class="usuario-update">
    <h1><?= Html::encode($this->title) ?></h1>

    <?=
    $this->render('_form', [
        'model' => $model,
    ])
    ?>

</div>
