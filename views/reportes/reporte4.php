<?php

use miloschuman\highcharts\Highcharts;
use yii\web\JsExpression;
use yii\grid\GridView;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\jui\DatePicker;
use kartik\widgets\Select2;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
$this->title = 'Titulo';
$this->params['breadcrumbs'][] = ['label' => 'Index', 'url' => ['reportes/index']];
$this->params['breadcrumbs'][] = 'Line Charts';
?>


<div style='display: none'>
    <?=
    Highcharts::widget([
        'scripts' => [
            'highcharts-more',
            'themes/grid',
            //'modules/exporting',
            'modules/solid-gauge',
        ]
    ]);
    ?>
</div>
<div class='well'>
    <?php $form = ActiveForm::begin(['layout' => 'inline']); ?>
    <div class="form-group">
        <label class="control-label"> Fecha inicial </label>
        <?= DatePicker::widget([
            'name' => 'date1',
            'value' => $date1,
            'language' => 'es',
            'dateFormat' => 'yyyy-MM-dd',
            'clientOptions' => [
                'changeMonth' => true,
                'changeYear' => true,
            ],
        ]);
        ?>
        </div>
    <div class="form-group">
        <label class="control-label"> Fecha final </label>
        <?= DatePicker::widget([
            'name' => 'date2',
            'value' => $date2,
            'language' => 'es',
            'dateFormat' => 'yyyy-MM-dd',
            'clientOptions' => [
                'changeMonth' => true,
                'changeYear' => true,
            ]
        ]);
        ?>
   </div>
    <div class="form-group">
       <?php 
       $bar = [];
        for ($i = 0; $i < count($dataProviderBarra); $i++) {
            $bar[] = $dataProviderBarra[$i]['barra'];
        }
//        $js_bar = implode("','", $bar);
       
       
        echo '<label class="control-label">Barra</label>';
        echo Select2::widget([
            'name' => 'Barra',
            'data' => $bar,
            'options' => [
                'placeholder' => 'Selecione barra ...',
//                'multiple' => true
            ],
        ]);
        
        
//    $form = ActiveForm::begin();
//    $barra = app\models\Barras::find()->all();
//    $items = ArrayHelper::map($barra,'id_barra','barra');
//    $params = [
//        'prompt' => 'Elija barra'
//    ];
//    echo $form->field($model, 'barra')->dropDownList($items,$params);
//    ActiveForm::end();
       echo Html::dropDownList('id_barra', null,ArrayHelper::map(app\models\Barras::find()->all(), 'id_barra', 'barra')) 
    
    
    
    
       ?> 
    </div>
    <div class="form-group">
    <?= Html::submitButton('procesar', ['class' => 'btn btn-warning btn-flat']) ?>
    </div><!-- /.input group -->
<?php ActiveForm::end(); ?>
</div>

<div class="panel panel-default">
    <div class="panel-heading"> <h3 class="panel-title"><span class="glyphicon glyphicon glyphicon-signal"></span> Line Charts</h3> </div>
    <div class="panel-body">
        <div id="container-line"></div>
        <?php

        $categ = [];
        for ($i = 0; $i < count($chart); $i++) {
            $categ[] = $chart[$i]['fecha_hora'];
        }
        $js_categ = implode("','", $categ);

        $data_pdx = [];
        for ($i = 0; $i < count($chart); $i++) {
            $data_pdx[] = $chart[$i]['tension'];
        }
        $js_pdx = implode(",", $data_pdx);

//        $data_hn = [];
//        for ($i = 0; $i < count($chart); $i++) {
//            $data_hn[] = $chart[$i]['hn_count'];
//        }
//        $js_hn = implode(",", $data_hn);
//
//        $data_vn = [];
//        for ($i = 0; $i < count($chart); $i++) {
//            $data_vn[] = $chart[$i]['visit_count'];
//        }
//        $js_vn = implode(",", $data_vn);

        $this->registerJs(" $(function () {
                            $('#container-line').highcharts({
                                chart: {
                                    type: 'spline'
                                },
                                title: {
                                    text: 'Valores de Tensiones',
                                    x: -20 //center
                                },
                                subtitle: {
                                    text: '',
                                    x: -20
                                },
                                xAxis: {
                                      categories: ['$js_categ'],
                                },
                                yAxis: {
                                    title: {
                                        text: 'kV'
                                    },
                                    plotLines: [{
                                        value: 0,
                                        width: 1,
                                        color: '#808080'
                                    }]
                                },
                                tooltip: {
                                    valueSuffix: ''
                                },
                                legend: {
                                    layout: 'vertical',
                                    align: 'right',
                                    verticalAlign: 'middle',
                                    borderWidth: 0
                                },
                                credits: {
                                    enabled: false
                                },
                                series: [{
                                    name: 'Tensión',
                                    data: [$js_pdx]
                                }]
                            });
                        });
             ");
        ?>
        <br>
        <?php
//        echo GridView::widget([
//            'dataProvider' => $dataProvider,
//            'columns' => [
//                ['class' => 'yii\grid\SerialColumn'],
//                [
//                    'attribute' => 'pdx',
//                    'header' => 'รหัสโรค'
//                ],
//                [
//                    'attribute' => 'icdname',
//                    'header' => 'ชื่อโรค'
//                ],
//                [
//                    'attribute' => 'pdx_count',
//                    'header' => 'จำนวนวินิจฉัย'
//                ],
//                [
//                    'attribute' => 'hn_count',
//                    'header' => 'จำนวนราย'
//                ],
//                [
//                    'attribute' => 'visit_count',
//                    'header' => 'จำนวนครั้ง'
//                ]
//            ],
//        ]);
        ?>
    </div>
    
    <?php
        print_r($dataProviderBarra);
    ?>
</div>
<?php // \bluezed\scrollTop\ScrollTop::widget() 
        ?>
