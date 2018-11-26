<?php

namespace frontend\controllers;

use common\models\Localidades;
use common\models\Municipios;
use Yii;
use common\models\Metadato;
use common\models\MetadatoSearch;
use yii\filters\AccessControl;
use yii\helpers\Json;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\Request;
use common\models\User as Usuarios;

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
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['index', 'create', 'update', 'delete'],
                'rules' => [
                    [
                        'actions' => ['index', 'create', 'update', 'delete'],
                        'allow' => true,
                        'roles' => ['@'],
                        'matchCallback' => function ($rule, $action) {
                            $valid_roles = [Usuarios::ROLE_ADMIN, Usuarios::ROLE_SUP];
                            return Usuarios::roleInArray($valid_roles);
                        }
                    ],
                ],
            ],
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
            $localidad  = Localidades::find()->where(['CVE_LOCALIDAD' => $model->CVE_LOCALIDAD])->one();
            $municipio = Municipios::find()->where(['MUNICIPIOID' => $model->CVE_MUNICIPIO])->one();
            $fecha = Yii::$app->formatter->asDatetime('now', 'yyyy-MM-dd H:i:s');

            $model->N_PERIODO = 2018;
            $model->CVE_PROGRAMA = 221;
            $model->CVE_DEPENDENCIA = '2150000000';

            $model->NOMBRES = trim(strtoupper($model->NOMBRES));
            $model->PRIMER_APELLIDO = trim(strtoupper($model->PRIMER_APELLIDO));
            $model->SEGUNDO_APELLIDO = trim(strtoupper($model->SEGUNDO_APELLIDO));
            $model->NOMBRE_COMPLETO = $model->PRIMER_APELLIDO.' '.$model->SEGUNDO_APELLIDO. ' '. $model->NOMBRES;
            $model->CURP = trim(strtoupper($model->CURP));
            $model->FOLIO_ID_OFICIAL = trim(strtoupper($model->FOLIO_ID_OFICIAL));

            $model->NOMBRES2 = trim(strtoupper($model->NOMBRES2));
            $model->PRIMER_APELLIDO2 = trim(strtoupper($model->PRIMER_APELLIDO2));
            $model->SEGUNDO_APELLIDO2 = trim(strtoupper($model->SEGUNDO_APELLIDO2));
            $model->NOMBRE_COMPLETO2 = $model->PRIMER_APELLIDO2.' '.$model->SEGUNDO_APELLIDO2. ' '. $model->NOMBRES2;
            $model->CURP2 = trim(strtoupper($model->CURP2));
            $model->FOLIO_ID_OFICIAL2 = trim(strtoupper($model->FOLIO_ID_OFICIAL2));

            $model->NOMBRES_N = trim(strtoupper($model->NOMBRES_N));
            $model->PRIMER_APELLIDO_N = trim(strtoupper($model->PRIMER_APELLIDO_N));
            $model->SEGUNDO_APELLIDO_N = trim(strtoupper($model->SEGUNDO_APELLIDO_N));
            $model->NOMBRE_COMPLETO_N = $model->PRIMER_APELLIDO_N.' '.$model->SEGUNDO_APELLIDO_N. ' '. $model->NOMBRES_N;
            $model->CURP_N = trim(strtoupper($model->CURP_N));

            $model->NOMBRES_N2 = trim(strtoupper($model->NOMBRES_N2));
            $model->PRIMER_APELLIDO_N2 = trim(strtoupper($model->PRIMER_APELLIDO_N2));
            $model->SEGUNDO_APELLIDO_N2 = trim(strtoupper($model->SEGUNDO_APELLIDO_N2));
            $model->NOMBRE_COMPLETO_N2 = $model->PRIMER_APELLIDO_N2.' '.$model->SEGUNDO_APELLIDO_N2. ' '. $model->NOMBRES_N2;
            $model->CURP_N2 = trim(strtoupper($model->CURP_N2));

            $model->LOCALIDAD = $localidad->DESC_LOCALIDAD;
            $model->CVE_ENTIDAD_FEDERATIVA = 15;
            $model->CVE_REGION = $municipio->REGIONID;

            $model->CALLE = trim(strtoupper($model->CALLE));
            $model->COLONIA = trim(strtoupper($model->COLONIA));
            $model->ENTRE_CALLE = trim(strtoupper($model->ENTRE_CALLE));
            $model->Y_CALLE = trim(strtoupper($model->Y_CALLE));
            $model->OTRA_REFERENCIA = trim(strtoupper($model->OTRA_REFERENCIA));

            $model->USU = $user.'';
            $model->FECHA_REG = $fecha;
            $model->IP = $ip;

            if($model->save()){

                return $this->redirect(['index']);
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

        if ($model->load(Yii::$app->request->post())) {
            $request = New Request();
            $user = Yii::$app->user->id;
            $ip = $request->getUserIp();
            $localidad  = Localidades::find()->where(['CVE_LOCALIDAD' => $model->CVE_LOCALIDAD])->one();
            $municipio = Municipios::find()->where(['MUNICIPIOID' => $model->CVE_MUNICIPIO])->one();
            $fecha = Yii::$app->formatter->asDatetime('now', 'yyyy-MM-dd H:i:s');

            $model->NOMBRES = trim(strtoupper($model->NOMBRES));
            $model->PRIMER_APELLIDO = trim(strtoupper($model->PRIMER_APELLIDO));
            $model->SEGUNDO_APELLIDO = trim(strtoupper($model->SEGUNDO_APELLIDO));
            $model->NOMBRE_COMPLETO = $model->PRIMER_APELLIDO.' '.$model->SEGUNDO_APELLIDO. ' '. $model->NOMBRES;
            $model->CURP = trim(strtoupper($model->CURP));
            $model->FOLIO_ID_OFICIAL = trim(strtoupper($model->FOLIO_ID_OFICIAL));

            $model->NOMBRES2 = trim(strtoupper($model->NOMBRES2));
            $model->PRIMER_APELLIDO2 = trim(strtoupper($model->PRIMER_APELLIDO2));
            $model->SEGUNDO_APELLIDO2 = trim(strtoupper($model->SEGUNDO_APELLIDO2));
            $model->NOMBRE_COMPLETO2 = $model->PRIMER_APELLIDO2.' '.$model->SEGUNDO_APELLIDO2. ' '. $model->NOMBRES2;
            $model->CURP2 = trim(strtoupper($model->CURP2));
            $model->FOLIO_ID_OFICIAL2 = trim(strtoupper($model->FOLIO_ID_OFICIAL2));

            $model->NOMBRES_N = trim(strtoupper($model->NOMBRES_N));
            $model->PRIMER_APELLIDO_N = trim(strtoupper($model->PRIMER_APELLIDO_N));
            $model->SEGUNDO_APELLIDO_N = trim(strtoupper($model->SEGUNDO_APELLIDO_N));
            $model->NOMBRE_COMPLETO_N = $model->PRIMER_APELLIDO_N.' '.$model->SEGUNDO_APELLIDO_N. ' '. $model->NOMBRES_N;
            $model->CURP_N = trim(strtoupper($model->CURP_N));

            $model->NOMBRES_N2 = trim(strtoupper($model->NOMBRES_N2));
            $model->PRIMER_APELLIDO_N2 = trim(strtoupper($model->PRIMER_APELLIDO_N2));
            $model->SEGUNDO_APELLIDO_N2 = trim(strtoupper($model->SEGUNDO_APELLIDO_N2));
            $model->NOMBRE_COMPLETO_N2 = $model->PRIMER_APELLIDO_N2.' '.$model->SEGUNDO_APELLIDO_N2. ' '. $model->NOMBRES_N2;
            $model->CURP_N2 = trim(strtoupper($model->CURP_N2));

            $model->LOCALIDAD = $localidad->DESC_LOCALIDAD;
            $model->CVE_ENTIDAD_FEDERATIVA = 15;
            $model->CVE_REGION = $municipio->REGIONID;

            $model->CALLE = trim(strtoupper($model->CALLE));
            $model->COLONIA = trim(strtoupper($model->COLONIA));
            $model->ENTRE_CALLE = trim(strtoupper($model->ENTRE_CALLE));
            $model->Y_CALLE = trim(strtoupper($model->Y_CALLE));
            $model->OTRA_REFERENCIA = trim(strtoupper($model->OTRA_REFERENCIA));

            $model->USU_M = $user.'';
            $model->IP_M = $ip;
            $model->FECHA_M = $fecha;

            if($model->save()){
                return $this->redirect(['index']);
            }

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
