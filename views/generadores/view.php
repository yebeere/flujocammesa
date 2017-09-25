<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\generadores */

$this->title = $model->idgeneradores;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Generadores'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="generadores-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->idgeneradores], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->idgeneradores], [
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
            'idgeneradores',
            'x',
            'y',
            'x_signo',
            'y_signo',
            'generador',
            'id_barra',
            'signo_positivo',
            'distro',
        ],
    ]) ?>

</div>
