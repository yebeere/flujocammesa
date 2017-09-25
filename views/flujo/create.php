<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\flujo */

$this->title = Yii::t('app', 'Create Flujo');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Flujos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="flujo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
