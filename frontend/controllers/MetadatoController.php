<?php

namespace frontend\controllers;

use common\models\Localidades;
use Yii;
use common\models\Metadato;
use common\models\MetadatoSearch;
use yii\helpers\Json;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\Request;

/**
 * MetadatoController implements the CRUD actions for Metadato model.
 */
class MetadatoController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Metadato models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new MetadatoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Metadato model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Metadato model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Metadato();

        if ($model->load(Yii::$app->request->post())) {
            $request = New Request();
            $user = Yii::$app->user->id;
            $ip = $request->getUserIp();

            $model->N_PERIODO = 2018;
            $model->CVE_PROGRAMA = 221;
            $model->CVE_DEPENDENCIA = '2150000000';

            $model->NOMBRES = trim(strtoupper($model->NOMBRES));
            $model->PRIMER_APELLIDO = trim(strtoupper($model->PRIMER_APELLIDO));
            $model->SEGUNDO_APELLIDO = trim(strtoupper($model->SEGUNDO_APELLIDO));
            $model->NOMBRE_COMPLETO = $model->PRIMER_APELLIDO.' '.$model->SEGUNDO_APELLIDO. ' '. $model->NOMBRES;


            $model->USU = $user.'';
            $model->IP = $ip;

            if($model->save()){
                return $this->redirect(['view', 'id' => $model->FOLIO]);
            }

        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Metadato model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->FOLIO]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Metadato model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Metadato model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Metadato the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Metadato::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }


    public function actionLocalidades() {
        $out = [];
        if (isset($_POST['depdrop_parents'])) {
            $parents = $_POST['depdrop_parents'];
            if ($parents != null) {
                $cat_id = $parents[0];
                $out = Localidades::getLocs($cat_id);
                // the getSubCatList function will query the database based on the
                // cat_id and return an array like below:
                // [
                //    ['id'=>'<sub-cat-id-1>', 'name'=>'<sub-cat-name1>'],
                //    ['id'=>'<sub-cat_id_2>', 'name'=>'<sub-cat-name2>']
                // ]
                echo Json::encode(['output'=>$out, 'selected'=>$out]);
                return;
            }
        }
        echo Json::encode(  ['output'=>'', 'selected'=>'']);
    }
}
