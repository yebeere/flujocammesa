<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ValoresFlujo */

$this->title = Yii::t('app', 'Create Valores Flujo');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Valores Flujos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="valores-flujo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
