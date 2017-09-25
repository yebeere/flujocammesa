<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ValoresDemandas */

$this->title = Yii::t('app', 'Create Valores Demandas');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Valores Demandas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="valores-demandas-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
