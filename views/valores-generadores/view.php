<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ValoresGeneradores */

$this->title = $model->idgeneradores_valores;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Valores Generadores'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="valores-generadores-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->idgeneradores_valores], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->idgeneradores_valores], [
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
            'idgeneradores_valores',
            'generacion',
            'id_generador',
            'fecha_hora',
        ],
    ]) ?>

</div>
