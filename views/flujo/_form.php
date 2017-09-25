<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\flujo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="flujo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'x')->textInput() ?>

    <?= $form->field($model, 'y')->textInput() ?>

    <?= $form->field($model, 'id_barra_1')->textInput() ?>

    <?= $form->field($model, 'id_barra_2')->textInput() ?>

    <?= $form->field($model, 'circuito')->textInput() ?>

    <?= $form->field($model, 'x_signo')->textInput() ?>

    <?= $form->field($model, 'y_signo')->textInput() ?>

    <?= $form->field($model, 'signo_barra')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
