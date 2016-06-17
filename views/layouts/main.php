<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\bootstrap\ActiveForm;
//use app\models\LoginForm;
use dektrium\user\models\LoginForm;
use yii\helpers\Url;
use app\models\CancionSearch;




AppAsset::register($this);
?>
<?php
$this->beginPage();
//$model = new LoginForm();
$model = Yii::createObject(LoginForm::className());
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
                    'class' => 'navbar-default navbar-fixed-top ',
                    'style' => ' color: red',
                ],
            ]);

            $modelSearch = new CancionSearch;
//            $modelSearch = new UsuarioSearch;
            $navItems = [
                ['label' => \Yii::t("app", 'Home'), 'url' => ['/site/index']],
                ['label' => \Yii::t("app", 'Songs'), 'url' => ['/cancion/index']],
                ['label' => \Yii::t("app", 'About'), 'url' => ['/site/about']],
                ['label' => \Yii::t("app", 'Contact'), 'url' => ['/site/contact']],
                ['label' =>
                    !Yii::$app->user->isGuest ?
                            \Yii::t("app", 'Profile') . ' [ ' . Yii::$app->user->identity->username . ' ]' : '',
                    'items' => [
                        ['label' => \Yii::t("app", 'Settings'),
                            'url' => ['/user/settings'],
                            'linkOptions' => ['data-method' => 'post'],
                        ],
                        ['label' => \Yii::t("app", 'My songs'),
                            'url' => ['/miscanciones/index'],
                            'linkOptions' => ['data-method' => 'post'],
                        ],
                        ['label' => \Yii::t("app", 'Manage users'),
                            'url' => ['/user/admin'],
                            'linkOptions' => ['data-method' => 'post'],
                            'visible' => !Yii::$app->user->isGuest,
                        ],
                        ['label' => \Yii::t("app", 'Logout'),
                            'url' => ['/site/logout'],
                            'linkOptions' => ['data-method' => 'post'],
                        ],
                    ],
                    'visible' => !Yii::$app->user->isGuest
                ]
            ];
//            if (!Yii::$app->user->isGuest) {
//               
//                array_push($navItems, [
//                    'label' => \Yii::t("app", 'Profile') . ' [ ' . Yii::$app->user->identity->username . ' ]',
//                    'items' => [
////                        'label' => \Yii::t("app", 'Profile'),
//                        Html::beginForm(['/user/settings'], 'post')
//                        . Html::submitButton(
//                                \Yii::t("app", 'Settings') . '', ['class' => 'btn btn-link']
//                        ) . Html::endForm(),
//                        Html::beginForm(['/miscanciones/index'], 'post')
//                        . Html::submitButton(
//                                \Yii::t("app", 'My songs') . '', ['class' => 'btn btn-link']
//                        ) . Html::endForm(),
////                        ['label' => \Yii::t("app", 'My songs'), 'url' => ['/miscanciones/index'], 'options' => ['type'=>'submit','class' => 'btn-link']],
//                        Html::beginForm(['/site/logout'], 'post')
//                        . Html::submitButton(
//                                \Yii::t("app", 'Logout'), ['class' => 'btn btn-link']
//                        ) . Html::endForm() . '</li>',
//                    ]
//                        ]
//                );
//            }
            ?>
            <div class="navbar-header">
                <?php echo Html::beginForm(Url::to(['/cancion']), 'get', ['class' => 'navbar-form navbar-center  ']); ?>
                <div class="form-group input-group">
                    <?php
                    echo Html::activeTextInput($modelSearch, 'autor_titulo', ['class' => 'form-control', 'style' => 'min-width:250px',
                        'placeholder' => \Yii::t("app", 'Search by song or artist'),
                    ]);
                    ?>
                    <span class="input-group-btn">
                        <?php echo Html::submitButton('<span class="glyphicon glyphicon-search"></span>', ['class' => 'btn btn-default']); ?>
                    </span>
                </div>
                <?php echo Html::endForm() ?>
            </div>

            <?php
            echo Nav::widget([
                'options' => ['class' => 'nav navbar-nav  '],
                'items' => $navItems,
            ]);
            ?>

            <ul class="nav navbar-nav navbar-right">
                <li class="divider"></li>
                <?php if (Yii::$app->user->isGuest): ?>
                    <li class="dropdown" >
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle" ><?= \Yii::t("app", 'Login') ?> <span class="glyphicon glyphicon-log-in"></span><b class="caret"></b></a>
                        <div class="dropdown-menu" >
                            <?php
                            $form = ActiveForm::begin([
                                        'id' => 'login-form',
                                        'options' => ['class' => 'navbar-form navbar-center '],
                                        'enableAjaxValidation' => 'true',
                                        'enableClientValidation' => 'flase',
                                        'fieldConfig' => [
                                            'template' => "<div class=\" \">{input}</div>\n<div class=\"\">{error}</div>",
                                        ],
                                        'action' => ['/user/login'],
                            ]);
                            ?>
                            <?=
                            $form->field($model, 'login', ['inputOptions' => [
                                    'placeholder' => \Yii::t("app", 'Nick name or email'),
                                ],
                            ])->label("");
                            ?>
                            <?=
                            $form->field($model, 'password', ['inputOptions' => [
                                    'placeholder' => \Yii::t("app", 'Password'),
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
    <!--                                <a class="small col-lg-8" href="#"><?= \Yii::t("app", 'Signup') ?></a>-->
                                <?= Html::a(\Yii::t("app", 'I forgot my password'), ['/user/forgot'], ['class' => 'small col-lg-8']) ?>
                                <?= Html::a(\Yii::t("app", 'Signup'), ['/user/register'], ['class' => 'small col-lg-8']) ?>
                            </div> 	
                            <br />
                            <div class="form-group">
                                <div class="col-lg-offset-4 col-lg-2">
                                    <?= Html::submitInput(\Yii::t("app", 'Login'), ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                                </div>
                            </div>
                            <?php ActiveForm::end(); ?>
                        </div>
                    </li>
                    <?php
                endif;
                ?>
            </ul>
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
            <div class="container row">
                <div class=" col-sm-6">
                    <p class="pull-left">&copy; Mimusica <?= date('Y') ?></p>
                </div>
                <div class=" col-sm-6">
                    <p class="pull-right"><?= Yii::powered() ?></p>
                </div>
            </div>
        </footer>

        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
