<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\generadores */

$this->title = Yii::t('app', 'Create Generadores');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Generadores'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="generadores-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
