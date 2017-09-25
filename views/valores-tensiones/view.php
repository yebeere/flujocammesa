<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ValoresTensiones */

$this->title = $model->idtensiones;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Valores Tensiones'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="valores-tensiones-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->idtensiones], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->idtensiones], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idtensiones',
            'id_barra',
            'tension',
            'fecha_hora',
        ],
    ]) ?>

</div>
