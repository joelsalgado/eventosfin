<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Metadato */

$this->title = $model->FOLIO;
$this->params['breadcrumbs'][] = ['label' => 'Metadatos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="metadato-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->FOLIO], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->FOLIO], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'N_PERIODO',
            'CVE_PROGRAMA',
            'FOLIO',
            'CVE_DEPENDENCIA',
            'PRIMER_APELLIDO',
            'SEGUNDO_APELLIDO',
            'NOMBRES',
            'NOMBRE_COMPLETO',
            'FECHA_NACIMIENTO',
            'SEXO',
            'CURP',
            'EDAD',
            'FOLIO_ID_OFICIAL',
            'PRIMER_APELLIDO2',
            'SEGUNDO_APELLIDO2',
            'NOMBRES2',
            'NOMBRE_COMPLETO2',
            'FECHA_NACIMIENTO2',
            'SEXO2',
            'CURP2',
            'EDAD2',
            'FOLIO_ID_OFICIAL2',
            'PRIMER_APELLIDO_N',
            'SEGUNDO_APELLIDO_N',
            'NOMBRES_N',
            'NOMBRE_COMPLETO_N',
            'FECHA_NACIMIENTO_N',
            'SEXO_N',
            'CURP_N',
            'EDAD_N',
            'PRIMER_APELLIDO_N2',
            'SEGUNDO_APELLIDO_N2',
            'NOMBRES_N2',
            'NOMBRE_COMPLETO_N2',
            'FECHA_NACIMIENTO_N2',
            'SEXO_N2',
            'CURP_N2',
            'EDAD_N2',
            'EMAIL:email',
            'LADA_TELEFONO',
            'TELEFONO',
            'LADA_FAX',
            'FAX',
            'CALLE',
            'NUM_EXT',
            'NUM_INT',
            'MANZANA',
            'LOTE',
            'CODIGO_POSTAL',
            'ENTRE_CALLE',
            'Y_CALLE',
            'OTRA_REFERENCIA',
            'COLONIA',
            'LOCALIDAD',
            'CVE_MUNICIPIO',
            'CVE_ENTIDAD_FEDERATIVA',
            'CVE_LOCALIDAD',
            'CVE_REGION',
            'AGEB',
            'FECHA_REG',
            'USU',
            'PW',
            'IP',
            'FECHA_M',
            'USU_M',
            'PW_M',
            'IP_M',
            'STATUS_1',
            'STATUS_2',
            'STATUS_3',
            'CARTA_1',
            'CARTA_2',
            'CVE_CARGO1',
            'CVE_CARGO2',
            'OTRO1',
            'OTRO2',
        ],
    ]) ?>

</div>
