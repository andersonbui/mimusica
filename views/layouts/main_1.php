<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\bootstrap\ActiveForm;
use app\models\LoginForm;

AppAsset::register($this);
?>
<?php
$this->beginPage();
$model = new LoginForm();
?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
        <?php $this->beginBody() ?>

        <div class="wrap">
            <?php
            NavBar::begin([
                'brandLabel' => 'MiMusica',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-default navbar-fixed-top navbar-inverse',
                    'style' => ' color: blue;;',
                ],
            ]);
            ?>

            <nav class="">
                <div class="">
                    <div class="navbar-header">
                        <form class="navbar-form navbar-center " role="search">
                            <div class="form-group input-group">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">por cancion
                                        <span class="glyphicon glyphicon-chevron-right"></span>
                                    </button>
                                </span>
                                <input type="text" id="txtplaceholder" class="form-control" placeholder="Search..">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <span class="glyphicon glyphicon-search"></span>
                                    </button>
                                </span>        
                            </div>
                        </form>
                    </div>
                    
                    <ul class="nav navbar-nav navbar-right">
                        <li class="divider"></li>
                        <?php if (Yii::$app->user->isGuest): ?>
                            <li class="dropdown" >
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle" >Entrar <span class="glyphicon glyphicon-log-in"></span><b class="caret"></b></a>
                                <div class="dropdown-menu" >
                                    <?php
                                    $form = ActiveForm::begin([
                                                'id' => 'login-form',
                                                'options' => ['class' => 'navbar-form navbar-center '],
                                                'fieldConfig' => [
                                                    'template' => "<div class=\" \">{input}</div>\n<div class=\"\">{error}</div>",
                                                ],
                                                'action' => ['/site/login2'],
                                    ]);
                                    ?>
                                    <?=
                                    $form->field($model, 'email', ['inputOptions' => [
                                            'placeholder' => 'correo electronico',
                                        ],
                                    ])->label("");
                                    ?>
                                    <?=
                                    $form->field($model, 'password', ['inputOptions' => [
                                            'placeholder' => 'Contraseña',
                                        ],
                                            ]
                                    )->passwordInput()->label("")
                                    ?>

                                    <?=
                                    $form->field($model, 'rememberMe')->checkbox([
                                        'template' => "<div class=\"\">{input} {label}</div>",
                                    ])
                                    ?>
                                    <div class="row">
                                        <a class="small col-lg-8" href="recoverypass">Olvide mi cotrasenia</a>
                                        <a class="small col-lg-8" href="#">Registrarme</a>
                                    </div> 	
                                    <br />
                                    <div class="form-group">
                                        <div class="col-lg-offset-4 col-lg-2">
                                            <?= Html::submitInput('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                                        </div>
                                    </div>
                                    <?php ActiveForm::end(); ?>
                                </div>
                            </li>
                        <?php
                        else:
                            echo Nav::widget([
                                'options' => ['class' => 'navbar-nav navbar-right'],
                                'items' => [
                                    ['label' => 'Inicio', 'url' => ['/site/index']],
                                    ['label' => 'Canciones', 'url' => ['/site/about']],
                                    ['label' => 'Artistas', 'url' => ['/site/contact']],
                                    ['label' => 'Acerca del sitio', 'url' => ['/site/contact']],
                                    [
                                        'label' => 'Perfil',
                                        'items' => [
                                            'label' => 'Inicio de sesion',
                                            Html::beginForm(['/site/logout'], 'post')
                                            . Html::submitButton(
                                                    'Logout (' . Yii::$app->user->identity->email . ')', ['class' => 'btn btn-link']
                                            ) . Html::endForm() . '</li>',
                                        ]
                                    ]
                                ],]);

                        endif;
                        ?>
                    </ul>
                </div>
            </nav>

            <!--                            echo Nav::widget([
                                            'options' => ['class' => 'navbar-nav navbar-right'],
                                            'items' => [
                                                ['label' => 'Inicio', 'url' => ['/site/index']],
                                                ['label' => 'Canciones', 'url' => ['/site/about']],
                                                ['label' => 'Artistas', 'url' => ['/site/contact']],
                                                ['label' => 'Acercxxa del sitio', 'url' => ['/site/contact']],
                                                [
                                                    'label' => 'Perfil',
                                                    'items' => [
                                                        'label' => 'Inicio de sesion',
                                                        Html::beginForm(['/site/login2'], 'post',['class' => 'navbar-form navbar-center ','enableAjaxValidation' => true,]) .
                                                            Html::activeInput('input',$model,'email', ['placeholder' => 'btn btn-link']
                                                                ) . 
                                                            Html::activeInput('email',$model,'email', ['placeholder' => 'btn btn-link']
                                                                ) .
                                                            Html::submitButton(
                                                                'Entrar', ['class' => 'btn btn-link']
                                                                ) . 
                                                        Html::endForm()
                                                    ]
                                                ]
                                            ],]);-->


            <?php
            NavBar::end();
            ?>

            <div class="container">

                <?=
                Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ])
                ?>
                <?= $content ?>
            </div>
        </div>

        <footer class="footer">
            <div class="container">
                <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

                <p class="pull-right"><?= Yii::powered() ?></p>
            </div>
        </footer>

        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
