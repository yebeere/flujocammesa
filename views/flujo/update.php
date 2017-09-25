<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\flujo */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Flujo',
]) . $model->id_flujo;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Flujos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_flujo, 'url' => ['view', 'id' => $model->id_flujo]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="flujo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
