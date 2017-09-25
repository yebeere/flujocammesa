<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ValoresFlujo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="valores-flujo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fecha_hora')->textInput() ?>

    <?= $form->field($model, 'potencia')->textInput() ?>

    <?= $form->field($model, 'flujo_id_flujo')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
