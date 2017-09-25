<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ValoresTensiones */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Valores Tensiones',
]) . $model->idtensiones;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Valores Tensiones'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idtensiones, 'url' => ['view', 'id' => $model->idtensiones]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="valores-tensiones-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
