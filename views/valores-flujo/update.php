<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ValoresFlujo */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Valores Flujo',
]) . $model->idvalores_flujo;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Valores Flujos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idvalores_flujo, 'url' => ['view', 'id' => $model->idvalores_flujo]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="valores-flujo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
