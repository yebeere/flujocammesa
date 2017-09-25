<?php

use yii\helpers\Html;
//use yii\grid\GridView;
 use kartik\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\controllers\search\FlujoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Flujos');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="flujo-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Flujo'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    
<?php Pjax::end(); ?></div>
<div>
    <?php
//    use kartik\grid\GridView;
$gridColumns = [
    ['class' => 'kartik\grid\SerialColumn'],
    'x',
            'y',
            'id_barra_1',
            [
                'label'=>'Barra 1',
                'attribute' => 'idBarra1',
                'value'=>'idBarra1.barra',
            ],
            'id_barra_2',
            [
                'label'=>'Barra 2',
                'attribute' => 'idBarra2',
                'value'=>'idBarra2.barra',
            ],
             'circuito',
             'x_signo',
             'y_signo',
             'signo_barra',

    [   'class' => 'kartik\grid\ActionColumn',
                'dropdown' => false,
                'vAlign'=>'middle',
                //'template' => '{view}  {update}  {delete}  {copiar}',
                'template' => '{view}  {update}  {delete}',
//                        'urlCreator' => function($action, $dataProvider, $key, $index) { 
//                                return Url::to([$action,'id'=>$key]);
//                        },
                
            ],
    ['class' => 'kartik\grid\CheckboxColumn']
];
echo GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'columns' => $gridColumns,
    'containerOptions' => ['style'=>'overflow: auto'], // only set when $responsive = false
//    'beforeHeader'=>[
//        [
//            'columns'=>[
//                ['content'=>'Header Before 1', 'options'=>['colspan'=>4, 'class'=>'text-center warning']], 
//                ['content'=>'Header Before 2', 'options'=>['colspan'=>4, 'class'=>'text-center warning']], 
//                ['content'=>'Header Before 3', 'options'=>['colspan'=>3, 'class'=>'text-center warning']], 
//            ],
//            'options'=>['class'=>'skip-export'] // remove this row from export
//        ]
//    ],
    'toolbar' =>  [
        ['content'=>
            Html::button('&lt;i class="glyphicon glyphicon-plus">&lt;/i>', ['type'=>'button', 'title'=>'Add Book', 'class'=>'btn btn-success', 'onclick'=>'alert("This will launch the book creation form.\n\nDisabled for this demo!");']) . ' '.
            Html::a('&lt;i class="glyphicon glyphicon-repeat">&lt;/i>', ['grid-demo'], ['data-pjax'=>0, 'class' => 'btn btn-default', 'title'=>'Reset Grid'])
        ],
        '{export}',
        '{toggleData}'
    ],
    'pjax' => true,
    'bordered' => true,
    'striped' => false,
    'condensed' => false,
    'responsive' => true,
    'hover' => true,
    'floatHeader' => true,
//    'floatHeaderOptions' => ['scrollingTop' => $scrollingTop],
    'showPageSummary' => true,
    'panel' => [
        'type' => GridView::TYPE_PRIMARY
    ],
]);
?>
</div>