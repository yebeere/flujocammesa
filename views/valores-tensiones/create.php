<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ValoresTensiones */

$this->title = Yii::t('app', 'Create Valores Tensiones');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Valores Tensiones'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="valores-tensiones-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
