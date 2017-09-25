<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ValoresTensiones */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="valores-tensiones-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_barra')->textInput() ?>

    <?= $form->field($model, 'tension')->textInput() ?>

    <?= $form->field($model, 'fecha_hora')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
