<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Cancion */

$this->title = Yii::t('app', 'Create song');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Songs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cancion-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
