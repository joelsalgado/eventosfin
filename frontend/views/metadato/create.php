<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Metadato */

$this->title = 'Nuevo Registro';
?>
<div class="metadato-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
