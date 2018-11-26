<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\MetadatoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Participantes';
?>
<div class="metadato-index">

    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Participantes</h3>
        </div>
        <div class="box-body">
            <?php if(Yii::$app->user->identity->role == 20): $region = \common\models\RegionesSedesem::find()->where(['REGIONID' => Yii::$app->user->identity->region_id])->one(); ?>
            <div class="row">
                <div class="col-sm-4">
                <table class="table">
                    <tr>
                        <th class="success">Región</th>
                        <th> <?= $region->REGIONNOMBRE.' '.$region->REGIONDESCRIPCION ?> </th>
                    </tr>
                </table>
                </div>
                <div class="col-sm-10">
                </div>
            </div>
            <?php endif;?>


            <?php Pjax::begin(); ?>
            <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

            <div class="table-responsive">
                <p class="pull-right">
                    <?php if(Yii::$app->user->identity->role != 40): ?>
                        <?= Html::a('Crear Participante', ['create'], ['class' => 'btn btn-success']) ?>
                    <?php endif;?>
                </p>

            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'summary' => "Mostrando {begin}-{end} de {totalCount} Elementos",
                'emptyText' => "No se encontró ningún elemento",
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],

                    'N_PERIODO',
                    //'CVE_PROGRAMA',
                    //'FOLIO',
                    //'CVE_DEPENDENCIA',
                    //'PRIMER_APELLIDO',
                    //'SEGUNDO_APELLIDO',
                    //'NOMBRES',
                    'NOMBRE_COMPLETO',
                    //'FECHA_NACIMIENTO',
                    //'SEXO',
                    'CURP',
                    //'EDAD',
                    //'FOLIO_ID_OFICIAL',
                    //'PRIMER_APELLIDO2',
                    //'SEGUNDO_APELLIDO2',
                    //'NOMBRES2',
                    //'NOMBRE_COMPLETO2',
                    //'FECHA_NACIMIENTO2',
                    //'SEXO2',
                    //'CURP2',
                    //'EDAD2',
                    //'FOLIO_ID_OFICIAL2',
                    //'PRIMER_APELLIDO_N',
                    //'SEGUNDO_APELLIDO_N',
                    //'NOMBRES_N',
                    //'NOMBRE_COMPLETO_N',
                    //'FECHA_NACIMIENTO_N',
                    //'SEXO_N',
                    //'CURP_N',
                    //'EDAD_N',
                    //'PRIMER_APELLIDO_N2',
                    //'SEGUNDO_APELLIDO_N2',
                    //'NOMBRES_N2',
                    //'NOMBRE_COMPLETO_N2',
                    //'FECHA_NACIMIENTO_N2',
                    //'SEXO_N2',
                    //'CURP_N2',
                    //'EDAD_N2',
                    //'EMAIL:email',
                    //'LADA_TELEFONO',
                    //'TELEFONO',
                    //'LADA_FAX',
                    //'FAX',
                    //'CALLE',
                    //'NUM_EXT',
                    //'NUM_INT',
                    //'MANZANA',
                    //'LOTE',
                    //'CODIGO_POSTAL',
                    //'ENTRE_CALLE',
                    //'Y_CALLE',
                    //'OTRA_REFERENCIA',
                    //'COLONIA',
                    //'LOCALIDAD',
                    //'CVE_MUNICIPIO',
                    //'CVE_ENTIDAD_FEDERATIVA',
                    //'CVE_LOCALIDAD',
                    //'CVE_REGION',
                    //'AGEB',
                    //'FECHA_REG',
                    //'USU',
                    //'PW',
                    //'IP',
                    //'FECHA_M',
                    //'USU_M',
                    //'PW_M',
                    //'IP_M',
                    //'STATUS_1',
                    //'STATUS_2',
                    //'STATUS_3',
                    //'CARTA_1',
                    //'CARTA_2',
                    //'CVE_CARGO1',
                    //'CVE_CARGO2',
                    //'OTRO1',
                    //'OTRO2',

                    ['class' => 'yii\grid\ActionColumn'],
                ],
            ]); ?>
            </div>
            <?php Pjax::end(); ?>
        </div>
    </div>
</div>
