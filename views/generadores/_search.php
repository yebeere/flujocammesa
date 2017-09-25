<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\controllers\search\GeneradoresSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="generadores-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idgeneradores') ?>

    <?= $form->field($model, 'x') ?>

    <?= $form->field($model, 'y') ?>

    <?= $form->field($model, 'x_signo') ?>

    <?= $form->field($model, 'y_signo') ?>

    <?php // echo $form->field($model, 'generador') ?>

    <?php // echo $form->field($model, 'id_barra') ?>

    <?php // echo $form->field($model, 'signo_positivo') ?>

    <?php // echo $form->field($model, 'distro') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
