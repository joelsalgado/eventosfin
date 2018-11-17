<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Metadato */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="metadato-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'N_PERIODO')->textInput() ?>

    <?= $form->field($model, 'CVE_PROGRAMA')->textInput() ?>

    <?= $form->field($model, 'FOLIO')->textInput() ?>

    <?= $form->field($model, 'CVE_DEPENDENCIA')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PRIMER_APELLIDO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SEGUNDO_APELLIDO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NOMBRES')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NOMBRE_COMPLETO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FECHA_NACIMIENTO')->textInput() ?>

    <?= $form->field($model, 'SEXO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CURP')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'EDAD')->textInput() ?>

    <?= $form->field($model, 'FOLIO_ID_OFICIAL')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PRIMER_APELLIDO2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SEGUNDO_APELLIDO2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NOMBRES2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NOMBRE_COMPLETO2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FECHA_NACIMIENTO2')->textInput() ?>

    <?= $form->field($model, 'SEXO2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CURP2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'EDAD2')->textInput() ?>

    <?= $form->field($model, 'FOLIO_ID_OFICIAL2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PRIMER_APELLIDO_N')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SEGUNDO_APELLIDO_N')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NOMBRES_N')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NOMBRE_COMPLETO_N')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FECHA_NACIMIENTO_N')->textInput() ?>

    <?= $form->field($model, 'SEXO_N')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CURP_N')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'EDAD_N')->textInput() ?>

    <?= $form->field($model, 'PRIMER_APELLIDO_N2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SEGUNDO_APELLIDO_N2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NOMBRES_N2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NOMBRE_COMPLETO_N2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FECHA_NACIMIENTO_N2')->textInput() ?>

    <?= $form->field($model, 'SEXO_N2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CURP_N2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'EDAD_N2')->textInput() ?>

    <?= $form->field($model, 'EMAIL')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'LADA_TELEFONO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TELEFONO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'LADA_FAX')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FAX')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CALLE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NUM_EXT')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NUM_INT')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'MANZANA')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'LOTE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CODIGO_POSTAL')->textInput() ?>

    <?= $form->field($model, 'ENTRE_CALLE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Y_CALLE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'OTRA_REFERENCIA')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'COLONIA')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'LOCALIDAD')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CVE_MUNICIPIO')->textInput() ?>

    <?= $form->field($model, 'CVE_ENTIDAD_FEDERATIVA')->textInput() ?>

    <?= $form->field($model, 'CVE_LOCALIDAD')->textInput() ?>

    <?= $form->field($model, 'CVE_REGION')->textInput() ?>

    <?= $form->field($model, 'AGEB')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FECHA_REG')->textInput() ?>

    <?= $form->field($model, 'USU')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PW')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'IP')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FECHA_M')->textInput() ?>

    <?= $form->field($model, 'USU_M')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PW_M')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'IP_M')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'STATUS_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'STATUS_2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'STATUS_3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CARTA_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CARTA_2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CVE_CARGO1')->textInput() ?>

    <?= $form->field($model, 'CVE_CARGO2')->textInput() ?>

    <?= $form->field($model, 'OTRO1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'OTRO2')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
