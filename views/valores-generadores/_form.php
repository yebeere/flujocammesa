<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ValoresGeneradores */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="valores-generadores-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'generacion')->textInput() ?>

    <?= $form->field($model, 'id_generador')->textInput() ?>

    <?= $form->field($model, 'fecha_hora')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
