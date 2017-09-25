<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ValoresGeneradores */

$this->title = Yii::t('app', 'Create Valores Generadores');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Valores Generadores'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="valores-generadores-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
