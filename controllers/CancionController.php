<?php

namespace app\controllers;

use Yii;
use app\models\Comentario;
use app\models\Cancion;
use app\models\CancionSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use \app\models\ComentarioSearch;

/**
 * CancionController implements the CRUD actions for Cancion model.
 */
class CancionController extends Controller {

    /**
     * @inheritdoc
     */
    public function behaviors() {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['GET'],
                ],
            ],
        ];
    }

    /**
     * Lists all Cancion models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new CancionSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
                    'paramet' => Yii::$app->request->queryParams,
        ]);
    }

    /**
     * Displays a single Cancion model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        
        $model = new Comentario();

        $model->load(Yii::$app->request->post());
        $model->id_usuario = Yii::$app->user->identity->id;
        $model->id_cancion = $id;
        $model->save();

        $searchModel = new ComentarioSearch();
        //---
//        if (sizeof(\dektrium\user\models\User::findAll($id)) != 0) {
//        if (sizeof(Yii::$app->request->queryParams) != 0) {
        if (isset(Yii::$app->request->queryParams['MiscancionesSearch'])) {
            $parametros = Yii::$app->request->queryParams['MiscancionesSearch'];
        } else {
            $parametros = Yii::$app->request->queryParams;
        }

        $array = \yii\helpers\ArrayHelper::merge(["id_cancion" => $id], $parametros);
//        $array = $parametros;
        $dataProvider = $searchModel->search(['ComentarioSearch' => ["id_cancion" => $id]]);
        $paramss = ['ComentarioSearch' => $array];
//        $paramss = Yii::$app->request->queryParams;
        //--------
        
//        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
//        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('view', [
                    'model' => $this->findModel($id),
                    'searchModel' => $searchModel,
                    'dataProviderr' => $dataProvider,
                    'paramss' => $paramss,
        ]);
    }

    /**
     * Creates a new Cancion model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new Cancion();

        if ($model->load(Yii::$app->request->post())) {
            $model->id_usuario = Yii::$app->user->identity->id;
            if ($model->save()) {
                return $this->redirect(['view', 'id' => $model->id_cancion]);
            }
        } else {
            return $this->render('create', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Cancion model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_cancion]);
        } else {
            return $this->render('update', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Cancion model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();
        return $this->redirect(['index']);
    }

    /**
     * Finds the Cancion model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Cancion the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = Cancion::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    //comentarios
//     public function actionComentar()
//    {
//        $model = new Comentario();
//
//        $model->load(Yii::$app->request->post()) && $model->save();
//        
//        if ($model->load(Yii::$app->request->post()) && $model->save()) {
//            return $this->redirect(['view', 'id' => $model->id]);
//        } else {
//            return $this->render('create', [
//                'model' => $model,
//            ]);
//        }
//    }
}
