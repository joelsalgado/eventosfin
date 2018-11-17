<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\MetadatoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="metadato-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'N_PERIODO') ?>

    <?= $form->field($model, 'CVE_PROGRAMA') ?>

    <?= $form->field($model, 'FOLIO') ?>

    <?= $form->field($model, 'CVE_DEPENDENCIA') ?>

    <?= $form->field($model, 'PRIMER_APELLIDO') ?>

    <?php // echo $form->field($model, 'SEGUNDO_APELLIDO') ?>

    <?php // echo $form->field($model, 'NOMBRES') ?>

    <?php // echo $form->field($model, 'NOMBRE_COMPLETO') ?>

    <?php // echo $form->field($model, 'FECHA_NACIMIENTO') ?>

    <?php // echo $form->field($model, 'SEXO') ?>

    <?php // echo $form->field($model, 'CURP') ?>

    <?php // echo $form->field($model, 'EDAD') ?>

    <?php // echo $form->field($model, 'FOLIO_ID_OFICIAL') ?>

    <?php // echo $form->field($model, 'PRIMER_APELLIDO2') ?>

    <?php // echo $form->field($model, 'SEGUNDO_APELLIDO2') ?>

    <?php // echo $form->field($model, 'NOMBRES2') ?>

    <?php // echo $form->field($model, 'NOMBRE_COMPLETO2') ?>

    <?php // echo $form->field($model, 'FECHA_NACIMIENTO2') ?>

    <?php // echo $form->field($model, 'SEXO2') ?>

    <?php // echo $form->field($model, 'CURP2') ?>

    <?php // echo $form->field($model, 'EDAD2') ?>

    <?php // echo $form->field($model, 'FOLIO_ID_OFICIAL2') ?>

    <?php // echo $form->field($model, 'PRIMER_APELLIDO_N') ?>

    <?php // echo $form->field($model, 'SEGUNDO_APELLIDO_N') ?>

    <?php // echo $form->field($model, 'NOMBRES_N') ?>

    <?php // echo $form->field($model, 'NOMBRE_COMPLETO_N') ?>

    <?php // echo $form->field($model, 'FECHA_NACIMIENTO_N') ?>

    <?php // echo $form->field($model, 'SEXO_N') ?>

    <?php // echo $form->field($model, 'CURP_N') ?>

    <?php // echo $form->field($model, 'EDAD_N') ?>

    <?php // echo $form->field($model, 'PRIMER_APELLIDO_N2') ?>

    <?php // echo $form->field($model, 'SEGUNDO_APELLIDO_N2') ?>

    <?php // echo $form->field($model, 'NOMBRES_N2') ?>

    <?php // echo $form->field($model, 'NOMBRE_COMPLETO_N2') ?>

    <?php // echo $form->field($model, 'FECHA_NACIMIENTO_N2') ?>

    <?php // echo $form->field($model, 'SEXO_N2') ?>

    <?php // echo $form->field($model, 'CURP_N2') ?>

    <?php // echo $form->field($model, 'EDAD_N2') ?>

    <?php // echo $form->field($model, 'EMAIL') ?>

    <?php // echo $form->field($model, 'LADA_TELEFONO') ?>

    <?php // echo $form->field($model, 'TELEFONO') ?>

    <?php // echo $form->field($model, 'LADA_FAX') ?>

    <?php // echo $form->field($model, 'FAX') ?>

    <?php // echo $form->field($model, 'CALLE') ?>

    <?php // echo $form->field($model, 'NUM_EXT') ?>

    <?php // echo $form->field($model, 'NUM_INT') ?>

    <?php // echo $form->field($model, 'MANZANA') ?>

    <?php // echo $form->field($model, 'LOTE') ?>

    <?php // echo $form->field($model, 'CODIGO_POSTAL') ?>

    <?php // echo $form->field($model, 'ENTRE_CALLE') ?>

    <?php // echo $form->field($model, 'Y_CALLE') ?>

    <?php // echo $form->field($model, 'OTRA_REFERENCIA') ?>

    <?php // echo $form->field($model, 'COLONIA') ?>

    <?php // echo $form->field($model, 'LOCALIDAD') ?>

    <?php // echo $form->field($model, 'CVE_MUNICIPIO') ?>

    <?php // echo $form->field($model, 'CVE_ENTIDAD_FEDERATIVA') ?>

    <?php // echo $form->field($model, 'CVE_LOCALIDAD') ?>

    <?php // echo $form->field($model, 'CVE_REGION') ?>

    <?php // echo $form->field($model, 'AGEB') ?>

    <?php // echo $form->field($model, 'FECHA_REG') ?>

    <?php // echo $form->field($model, 'USU') ?>

    <?php // echo $form->field($model, 'PW') ?>

    <?php // echo $form->field($model, 'IP') ?>

    <?php // echo $form->field($model, 'FECHA_M') ?>

    <?php // echo $form->field($model, 'USU_M') ?>

    <?php // echo $form->field($model, 'PW_M') ?>

    <?php // echo $form->field($model, 'IP_M') ?>

    <?php // echo $form->field($model, 'STATUS_1') ?>

    <?php // echo $form->field($model, 'STATUS_2') ?>

    <?php // echo $form->field($model, 'STATUS_3') ?>

    <?php // echo $form->field($model, 'CARTA_1') ?>

    <?php // echo $form->field($model, 'CARTA_2') ?>

    <?php // echo $form->field($model, 'CVE_CARGO1') ?>

    <?php // echo $form->field($model, 'CVE_CARGO2') ?>

    <?php // echo $form->field($model, 'OTRO1') ?>

    <?php // echo $form->field($model, 'OTRO2') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
