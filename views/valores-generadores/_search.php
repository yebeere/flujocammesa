<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\controllers\search\ValoresGeneradoresSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="valores-generadores-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idgeneradores_valores') ?>

    <?= $form->field($model, 'generacion') ?>

    <?= $form->field($model, 'id_generador') ?>

    <?= $form->field($model, 'fecha_hora') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
