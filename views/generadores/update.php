<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\generadores */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Generadores',
]) . $model->idgeneradores;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Generadores'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idgeneradores, 'url' => ['view', 'id' => $model->idgeneradores]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="generadores-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
