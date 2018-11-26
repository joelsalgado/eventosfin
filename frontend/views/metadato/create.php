<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Metadato */

$this->title = 'Nuevo Registro';
?>
<div class="metadato-create">

    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Nuevo Registro</h3>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-sm-8">
                    <table class="table">
                        <tr>
                            <th class="success">Nombre de la Dependencia u Organismo Auxiliar:</th>
                            <th> SECRETARIA DE DESARROLLO SOCIAL  </th>
                        </tr>
                        <tr>
                            <th class="success">Programa gubernamental: </th>
                            <th>EVENTOS REGIONALES DE FIN DE AÑO</th>
                        </tr>
                        <?php if(Yii::$app->user->identity->role == 20): $region = \common\models\RegionesSedesem::find()->where(['REGIONID' => Yii::$app->user->identity->region_id])->one(); ?>
                            <tr>
                                <th class="success">Región</th>
                                <th> <?= $region->REGIONNOMBRE.' '.$region->REGIONDESCRIPCION ?> </th>
                            </tr>
                        <?php endif;?>
                    </table>
                </div>
                <div class="col-sm-4">
                </div>
            </div>

            <?= $this->render('_form', [
                'model' => $model,
            ]) ?>
        </div>
    </div>

</div>
