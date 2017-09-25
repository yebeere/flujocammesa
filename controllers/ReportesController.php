<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\data\ArrayDataProvider;
//use yii\web\Response;
//use yii\filters\VerbFilter;
//use app\models\LoginForm;
//use app\models\ContactForm;

class ReportesController extends Controller
{
    /**
     * @inheritdoc
     */

//     public function behaviors(){
//      return [
//          'access' => [
//              'class' => AccessControl::className(),
//              'allowActions' => ['index']
//          ],
//
//          'verbs' => [
//              'class' => VerbFilter::className(),
//              'actions' => [
//                  'logout' => ['post'],
//              ],
//          ],
//      ];
//  }

    public function actionIndex(){
        return $this->render('index');
    }
    public function actionRep1() {
        return $this->render('report1');
    }
    
    public function actionRep4() {

        $date1 = "2017-06-01";
        $date2 = date('Y-m-d');
        if (Yii::$app->request->isPost) {
            $date1 = $_POST['date1'];
            $date2 = $_POST['date2'];
        }

//        $barra = \app\models\Barras::find()->all(); 
//        $listData=ArrayHelper::map($barra,'id_barra','barra'); 
//        $sql = "SELECT a.pdx,i.name AS icdname,COUNT(a.pdx) AS pdx_count,COUNT(DISTINCT a.hn) AS hn_count,COUNT(DISTINCT a.vn) AS visit_count
//        FROM vn_stat a
//        LEFT OUTER JOIN icd101 i ON i.code=a.main_pdx
//        WHERE a.vstdate BETWEEN '$date1'and '$date2'
//        AND a.pdx<>'' AND a.pdx IS NOT NULL
//        AND a.pdx NOT LIKE 'z%'
//        GROUP BY a.pdx,i.name
//        ORDER BY pdx_count DESC
//        LIMIT 10 ";
        $sql_barra="SELECT barra
              FROM barras
              WHERE tiene_tension =1
              ORDER BY barra ASC";

        $data_barra = Yii::$app->db->createCommand($sql_barra)->queryAll();
//        $data = Yii::$app->db2->createCommand($sql)->queryAll();
        $dataProvider_barra = new ArrayDataProvider([
            'allModels'=>$data_barra,
        ]);
        
        
        $sql="SELECT *
              FROM valores_tensiones
              WHERE id_barra =2 and
              fecha_hora BETWEEN '$date1'and '$date2'
              ORDER BY fecha_hora ASC";

        $data = Yii::$app->db->createCommand($sql)->queryAll();
//        $data = Yii::$app->db2->createCommand($sql)->queryAll();
        $dataProvider = new ArrayDataProvider([
            'allModels'=>$data,
        ]);

        return $this->render('reporte4', ['dataProvider' => $dataProvider, 'chart' => $data,'date1' => $date1, 'date2' => $date2,'dataProviderBarra' => $data_barra]);
    }
    
    
}
