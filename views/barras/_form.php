<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\barras */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="barras-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'barra')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'tiene_tension')->textInput() ?>

    <?= $form->field($model, 'x')->textInput() ?>

    <?= $form->field($model, 'y')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
