<?php

namespace app\modules\operacion\controllers;

use Yii;
use app\models\Operacion;
use app\models\Usuario;
use app\models\OperacionSearch;
use app\models\Comentario;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DefaultController implements the CRUD actions for Operacion model.
 */
class DefaultController extends Controller {

    /**
     * @inheritdoc
     */
    public function behaviors() {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    public function actions(){
        return [
            'index' => 'app\modules\productos\controllers\productos\actionIndex',
        ];
    }

    /**
     * Lists all Operacion models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new OperacionSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Operacion model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        $comentarios = Comentario::find()->where(['IdOperacion' => $id, 'Estatus' => 'ACTIVO'])->all();
        return $this->render('view', [
                    'model' => $this->findModel($id),
                    'comentarios' => $comentarios
        ]);
    }

    /**
     * Creates a new Operacion model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new Operacion();

        if ($model->load(Yii::$app->request->post())) {
            $idUsuario = $_POST['Operacion']['IdUsuario'];
            //$fecha = $_POST['Operacion']['Fecha'];
            $model->Fecha = date('Y-m-d H:i:s');
            //echo $model->Fecha; exit;
            $model->Folio = $this->generaFolio();
            $model->IdTecnico = $this->obtenIdTecnico($idUsuario);
            $model->EstatusSistema = 'ACTIVO';
            $model->EstatusOperacion = 'RECEPCION';
            /*echo '<pre>';
            print_r($model);
            echo '</pre>';
            exit;*/
            if ($model->validate()) {
                if ($model->save()) {
                    return $this->redirect('index');
                }
            } else {
                print_r($model->errors);
                exit;
            }
        } else {
            return $this->render('create', [
                        'model' => $model,
            ]);
        }
    }

    public function generaFolio() {
        $ultimoRegistro = Operacion::find()->orderBy(['IdOperacion' => SORT_DESC])->one();
        if (!$ultimoRegistro) {
            return (string)1;
        }
       $folio = $ultimoRegistro->Folio + 1;
        return (string)$folio;
    }

    public function obtenIdTecnico($idUsuario) {
        $usuario = Usuario::find()->where(['IdUsuario' => $idUsuario])->one();
        return $usuario->IdTecnico;
    }

    /**
     * Updates an existing Operacion model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->IdOperacion]);
        } else {
            return $this->render('update', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Operacion model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Operacion model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Operacion the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = Operacion::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
