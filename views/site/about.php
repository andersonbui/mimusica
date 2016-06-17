<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = \Yii::t("app", 'About');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        Nuestra página web, MiMusica es una aplicación para todas las personas 
        especialmente para aquellas que tienen un gusto por la musica y por su aprendizaje
        en donde sus usuarios encontraran una página amigable principalmente de facil uso. 
        Mi musica tiene caracteristicas unicas que no encontraras en otras aplicaciones 
        del mismo tipo ya que podras compartir canciones,letras,audios,acordes de tus artistas 
        favoritos y de tu propia autoria.
    </p>

    <code><?= __FILE__ ?></code>
</div>
