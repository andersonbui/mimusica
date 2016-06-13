<?php
/*
 * This file is part of the Dektrium project.
 *
 * (c) Dektrium project <http://github.com/dektrium>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

use yii\helpers\Html;
use karpoff\icrop\CropImageUpload;

/**
 * @var yii\web\View $this
 * @var yii\widgets\ActiveForm $form
 * @var dektrium\user\models\Profile $profile
 */
$user = Yii::$app->user->identity;
$this->title = Yii::t('user', 'Profile settings');
$this->params['breadcrumbs'][] = $this->title;
?>

<?= $this->render('/_alert', ['module' => Yii::$app->getModule('user')]) ?>

<div class="row">
    <div class="col-md-3">
        <?= $this->render('_menu') ?>
    </div>
    <div class="col-md-9">
        <div class="panel panel-default">
            <div class="panel-heading">
                <?= Html::encode($this->title) ?>
            </div>
            <div class="panel-body">
                <?php
                $form = \yii\widgets\ActiveForm::begin([
                            'id' => 'profile-form',
                            'options' => ['class' => 'form-horizontal', 'enctype' => 'multipart/form-data'],
                            'fieldConfig' => [
                                'template' => "{label}\n<div class=\"col-lg-9\">{input}</div>\n<div class=\"col-sm-offset-3 col-lg-9\">{error}\n{hint}</div>",
                                'labelOptions' => ['class' => 'col-lg-3 control-label'],
                            ],
                            'enableAjaxValidation' => true,
                            'enableClientValidation' => false,
                            'validateOnBlur' => false,
                ]);
                ?>

                <?= $form->field($model, 'nombres') ?>

                <?= $form->field($model, 'apellidos') ?>


                <div class="col-lg-offset-3 col-lg-9">
                    <!--<img src="<?php // echo  ''.$user->profile->foto ?>">-->
                    <?=
                    \yii\helpers\Html::img('@web/'.$user->profile->foto, [
//                        'class' => 'img-rounded col-lg-offset-4 col-lg-9',
                        'style' => 'border: solid 1px grey; width: 200px; height:200px',
                        'alt' => '[ ' . $user->username . ' ]',
                    ]);
                    ?>
                </div>
                <?php // echo $form->field($model, 'foto')->fileInput(['multiple' => false, 'accept' => 'image/*']); ?>
                
                <?php echo $form->field($model, 'foto')->widget(CropImageUpload::className()) ?>
                
               
                <div class="form-group">
                    <div class="col-lg-offset-3 col-lg-9">
                        <?= \yii\helpers\Html::submitButton(Yii::t('user', 'Save'), ['class' => 'btn btn-block btn-success']) ?><br>
                    </div>
                </div>

                <?php \yii\widgets\ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>
