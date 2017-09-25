<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\barras */

$this->title = Yii::t('app', 'Create Barras');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Barras'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="barras-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
