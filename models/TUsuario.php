<?php

namespace app\models;

use Yii;
use app\models\Tipousuario;

/**
 * This is the model class for table "usuario".
 *
 * @property string $id_tusuario
 * @property string $email
 * @property string $nombres
 * @property string $apellidos
 * @property string $genero
 * @property string $fecha_nacimiento
 * @property integer $id_tipo_usuario
 * @property Tipousuario $idTipoUsuario
 */

class 
TUsuario extends \yii\db\ActiveRecord
{   
    public $password_repeat;
    public $nombre_apellido;
    
    public static function tableName()
    {
        return 't_usuarios';
    }

    public function rules() {
        return [
            [['email', 'password', 'nombres', 'apellidos', 'apodo'], 'required'],
            [['password_repeat'], 'compare','compareAttribute'=>'password','message'=>'no coinciden las contraseñas.'],
            ['email','email'],
            [['email', 'nombres', 'apellidos','apodo'], 'string', 'max' => 50],
            [['password'], 'string', 'min' => 8, 'max' => 20],
        ];
    }

    public function attributeLabels()
    {
        return [
            'email' => \Yii::t("yii",'Email'),
            'password' => \Yii::t("yii",'Password'),
            'password_repeat' => \Yii::t('app', 'Password repeat'),
            'nombres' => \Yii::t("yii",'Name'),
            'apellidos' => \Yii::t("yii",'Last name'),
            'apodo' => \Yii::t("yii",'Nickname'),
            'tipo' => \Yii::t("yii",'Type'),
        ];
    }
    
    public function getUsuarioByEmail($email) { 
        $user = Usuario::findOne(['email=:email',[':email'=>$email]]);
        return $user;
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdTipoUsuario() {
        return $this->hasOne(Tipousuario::className(), ['tipo' => 'tipo_usuario']);
    }
    
    public function getTipo() {
        return $this->hasOne(Tipousuario::className(), ['tipo' => 'tipo_usuario']);
    }
    
    public function __get($name) {
//        if(strcmp($name,'tipo') == 0 || strcmp($name,'nombre_tipo') == 0) {
//             $opciones = Tipousuario::findOne(['tipo_usuario'=> parent::__get('tipo')]);
//            return \yii\helpers\ArrayHelper::getValue($opciones,'nombre_tipo');
//        }
        return parent::__get($name);
    }

    public function getListaTipos() {
        $opciones = Tipousuario::find()->asArray()->all();
        return \yii\helpers\ArrayHelper::map($opciones, 'tipo_usuario', 'nombre_tipo');
    }
    
    public function scenarios() {
        $scenarios = parent::scenarios();
        $scenarios['signup'] = ['email', 'password'];
        $scenarios['register'] = ['email', 'password', 'password_repeat', 'nombres', 'apellidos', 'apodo', 'foto'];
        return $scenarios;
    }
}
