<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ValoresDemandas */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Valores Demandas',
]) . $model->iddemandas;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Valores Demandas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->iddemandas, 'url' => ['view', 'id' => $model->iddemandas]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="valores-demandas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
