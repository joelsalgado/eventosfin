<?php


use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\depdrop\DepDrop;
use yii\helpers\Url;
use dosamigos\datepicker\DatePicker;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model common\models\Metadato */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="container-fluid">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">

        <div class="alert alert-success">
            <strong>A) DATOS DEL PADRE / MADRE O TUTOR(A)</strong>
            <i class="fa fa-user" aria-hidden="true"></i>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <?= $form->field($model, 'PRIMER_APELLIDO')->textInput(['maxlength' => true]) ?>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <?= $form->field($model, 'SEGUNDO_APELLIDO')->textInput(['maxlength' => true]) ?>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <?= $form->field($model, 'NOMBRES')->textInput(['maxlength' => true]) ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <?= $form->field($model, 'FECHA_NACIMIENTO')->widget(
                        DatePicker::className(), [
                        // inline too, not bad
                        'inline' => false,
                        'language' => 'es',
                        'clientOptions' => [
                            'autoclose' => true,
                            'format' => 'yyyy-mm-dd',
                            'startDate' => '1910-01-01',
                            'endDate' => '2003-01-01'
                        ]
                    ]);?>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <?= $form->field($model, 'SEXO')->radioList(['H' => 'Hombre', 'M' => 'Mujer']) ?>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <?= $form->field($model, 'CURP')->textInput(['maxlength' => true]) ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <?= $form->field($model, 'FOLIO_ID_OFICIAL')->textInput(['maxlength' => true]) ?>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <?= $form->field($model, 'CVE_CARGO1')->widget(Select2::classname(), [
                        'data' => ArrayHelper::map(\common\models\Cargos::find()->all(),
                            'CVE_CARGO', 'DESC_CARGO'),
                        'options' => ['placeholder' => 'Selecciona un Cargo', 'CVE_CARGO' => 'DESC_CARGO'],
                        'pluginOptions' => [
                            'allowClear' => true
                        ],
                    ]) ?>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="alert alert-success">
            <strong>B) DATOS DEL PADRE / MADRE O TUTOR(A)</strong>
            <i class="fa fa-user" aria-hidden="true"></i>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <?= $form->field($model, 'PRIMER_APELLIDO2')->textInput(['maxlength' => true]) ?>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <?= $form->field($model, 'SEGUNDO_APELLIDO2')->textInput(['maxlength' => true]) ?>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <?= $form->field($model, 'NOMBRES2')->textInput(['maxlength' => true]) ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <?= $form->field($model, 'FECHA_NACIMIENTO2')->widget(
                        DatePicker::className(), [
                        // inline too, not bad
                        'inline' => false,
                        'language' => 'es',
                        'clientOptions' => [
                            'autoclose' => true,
                            'format' => 'yyyy-mm-dd',
                            'startDate' => '1910-01-01',
                            'endDate' => '2003-01-01'
                        ]
                    ]);?>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <?= $form->field($model, 'SEXO2')->radioList(['H' => 'Hombre', 'M' => 'Mujer']) ?>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <?= $form->field($model, 'CURP2')->textInput(['maxlength' => true]) ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <?= $form->field($model, 'FOLIO_ID_OFICIAL2')->textInput(['maxlength' => true]) ?>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <?= $form->field($model, 'CVE_CARGO2')->widget(Select2::classname(), [
                        'data' => ArrayHelper::map(\common\models\Cargos::find()->all(),
                            'CVE_CARGO', 'DESC_CARGO'),
                        'options' => ['placeholder' => 'Selecciona un Cargo', 'CVE_CARGO' => 'DESC_CARGO'],
                        'pluginOptions' => [
                            'allowClear' => true
                        ],
                    ]) ?>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="alert alert-success">
            <strong>C) DATOS DEL NIÑO(A)</strong>
            <i class="fa fa-user" aria-hidden="true"></i>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <?= $form->field($model, 'PRIMER_APELLIDO_N')->textInput(['maxlength' => true]) ?>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <?= $form->field($model, 'SEGUNDO_APELLIDO_N')->textInput(['maxlength' => true]) ?>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <?= $form->field($model, 'NOMBRES_N')->textInput(['maxlength' => true]) ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <?= $form->field($model, 'FECHA_NACIMIENTO_N')->widget(
                        DatePicker::className(), [
                        // inline too, not bad
                        'inline' => false,
                        'language' => 'es',
                        'clientOptions' => [
                            'autoclose' => true,
                            'format' => 'yyyy-mm-dd',
                            'startDate' => '1910-01-01',
                            'endDate' => '2018-01-01'
                        ]
                    ]);?>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <?= $form->field($model, 'SEXO_N')->radioList(['H' => 'Hombre', 'M' => 'Mujer']) ?>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <?= $form->field($model, 'CURP_N')->textInput(['maxlength' => true]) ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="alert alert-success">
            <strong>D) DATOS DEL NIÑO(A)</strong>
            <i class="fa fa-user" aria-hidden="true"></i>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <?= $form->field($model, 'PRIMER_APELLIDO_N2')->textInput(['maxlength' => true]) ?>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <?= $form->field($model, 'SEGUNDO_APELLIDO_N2')->textInput(['maxlength' => true]) ?>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <?= $form->field($model, 'NOMBRES_N2')->textInput(['maxlength' => true]) ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <?= $form->field($model, 'FECHA_NACIMIENTO_N2')->widget(
                        DatePicker::className(), [
                        // inline too, not bad
                        'inline' => false,
                        'language' => 'es',
                        'clientOptions' => [
                            'autoclose' => true,
                            'format' => 'yyyy-mm-dd',
                            'startDate' => '1910-01-01',
                            'endDate' => '2018-01-01'
                        ]
                    ]);?>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <?= $form->field($model, 'SEXO_N2')->radioList(['H' => 'Hombre', 'M' => 'Mujer']) ?>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <?= $form->field($model, 'CURP_N2')->textInput(['maxlength' => true]) ?>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="alert alert-success">
            <strong>E) DOMICILIO </strong>
            <i class="fa fa-user" aria-hidden="true"></i>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <?= $form->field($model, 'CALLE')->textInput(['maxlength' => true]) ?>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <?= $form->field($model, 'ENTRE_CALLE')->textInput(['maxlength' => true]) ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <?= $form->field($model, 'Y_CALLE')->textInput(['maxlength' => true]) ?>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <?= $form->field($model, 'OTRA_REFERENCIA')->textInput(['maxlength' => true]) ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <?= $form->field($model, 'COLONIA')->textInput(['maxlength' => true]) ?>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <?= $form->field($model, 'CODIGO_POSTAL')->textInput() ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <?= $form->field($model, 'CVE_MUNICIPIO')->widget(Select2::classname(), [
                        'data' => ArrayHelper::map(\common\models\Municipios::getMunOk(),
                            'MUNICIPIOID', 'MUNICIPIONOMBRE'),
                        'options' => ['placeholder' => 'Selecciona un Municipio', 'id' => 'Municipio'],
                        'pluginOptions' => [
                            'allowClear' => true
                        ],
                    ]) ?>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <?=!$model->isNewRecord ? $form->field($model, 'CVE_LOCALIDAD')->widget(DepDrop::classname(), [
                        'options' => ['id'=>'name'],
                        'type'=>DepDrop::TYPE_SELECT2,
                        'data'=>[ $model->CVE_LOCALIDAD => $model->loc->DESC_LOCALIDAD ],
                        'select2Options'=>['pluginOptions'=>['allowClear'=>true]],
                        'pluginOptions'=>[
                            'depends'=>['Municipio'],
                            'placeholder' => 'Selecciona una Localidad',
                            'url' => Url::to(['metadato/localidades']),
                        ]
                    ]) :
                        $form->field($model, 'CVE_LOCALIDAD')->widget(DepDrop::classname(), [
                            'options' => ['id'=>'name'],
                            'type'=>DepDrop::TYPE_SELECT2,
                            'select2Options'=>['pluginOptions'=>['allowClear'=>true]],
                            'pluginOptions'=>[
                                'depends'=>['Municipio'],
                                'placeholder' => 'Selecciona una Localidad',
                                'url' => Url::to(['metadato/localidades']),
                            ]
                        ])

                    ?>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <?= $form->field($model, 'TELEFONO')->textInput(['maxlength' => true]) ?>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <?= $form->field($model, 'FAX')->textInput(['maxlength' => true]) ?>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <?= $form->field($model, 'EMAIL')->textInput(['maxlength' => true]) ?>
                </div>
            </div>
        </div>
        <div class="form-group">
            <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
