<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ValoresGeneradores */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Valores Generadores',
]) . $model->idgeneradores_valores;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Valores Generadores'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idgeneradores_valores, 'url' => ['view', 'id' => $model->idgeneradores_valores]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="valores-generadores-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
