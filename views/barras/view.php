<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\barras */

$this->title = $model->id_barra;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Barras'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="barras-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id_barra], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id_barra], [
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
            'id_barra',
            'barra:ntext',
            'tiene_tension',
            'x',
            'y',
        ],
    ]) ?>

</div>
