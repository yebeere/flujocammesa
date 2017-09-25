<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\controllers\search\ValoresDemandasSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="valores-demandas-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'iddemandas') ?>

    <?= $form->field($model, 'demanda') ?>

    <?= $form->field($model, 'fecha_hora') ?>

    <?= $form->field($model, 'id_barra') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
