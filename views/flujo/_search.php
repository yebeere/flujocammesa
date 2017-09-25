<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\controllers\search\FlujoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="flujo-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_flujo') ?>

    <?= $form->field($model, 'x') ?>

    <?= $form->field($model, 'y') ?>

    <?= $form->field($model, 'id_barra_1') ?>

    <?= $form->field($model, 'id_barra_2') ?>

    <?php // echo $form->field($model, 'circuito') ?>

    <?php // echo $form->field($model, 'x_signo') ?>

    <?php // echo $form->field($model, 'y_signo') ?>

    <?php // echo $form->field($model, 'signo_barra') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
