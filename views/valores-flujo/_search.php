<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\controllers\search\ValoresFlujoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="valores-flujo-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idvalores_flujo') ?>

    <?= $form->field($model, 'fecha_hora') ?>

    <?= $form->field($model, 'potencia') ?>

    <?= $form->field($model, 'flujo_id_flujo') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
