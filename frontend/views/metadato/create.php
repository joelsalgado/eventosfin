<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Metadato */

$this->title = 'Create Metadato';
$this->params['breadcrumbs'][] = ['label' => 'Metadatos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="metadato-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
