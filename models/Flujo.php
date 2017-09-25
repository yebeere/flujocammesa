<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "flujo".
 *
 * @property integer $id_flujo
 * @property integer $x
 * @property integer $y
 * @property integer $id_barra_1
 * @property integer $id_barra_2
 * @property integer $circuito
 * @property integer $x_signo
 * @property integer $y_signo
 * @property string $signo_barra
 *
 * @property Barras $idBarra1
 * @property Barras $idBarra2
 * @property ValoresFlujo[] $valoresFlujos
 */
class Flujo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'flujo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['x', 'y', 'id_barra_1', 'id_barra_2', 'circuito', 'x_signo', 'y_signo', 'signo_barra'], 'required'],
            [['x', 'y', 'id_barra_1', 'id_barra_2', 'circuito', 'x_signo', 'y_signo'], 'integer'],
            [['signo_barra'], 'string', 'max' => 45],
            [['id_barra_1'], 'exist', 'skipOnError' => true, 'targetClass' => Barras::className(), 'targetAttribute' => ['id_barra_1' => 'id_barra']],
            [['id_barra_2'], 'exist', 'skipOnError' => true, 'targetClass' => Barras::className(), 'targetAttribute' => ['id_barra_2' => 'id_barra']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_flujo' => Yii::t('app', 'Id Flujo'),
            'x' => Yii::t('app', 'X'),
            'y' => Yii::t('app', 'Y'),
            'id_barra_1' => Yii::t('app', 'Id Barra 1'),
            'id_barra_2' => Yii::t('app', 'Id Barra 2'),
            'circuito' => Yii::t('app', 'Circuito'),
            'x_signo' => Yii::t('app', 'X Signo'),
            'y_signo' => Yii::t('app', 'Y Signo'),
            'signo_barra' => Yii::t('app', 'Signo Barra'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdBarra1()
    {
        return $this->hasOne(Barras::className(), ['id_barra' => 'id_barra_1']);
    }

//    public function getEmpresa()
//    {
//        return $this->hasOne(Empresa::className(), ['idempresa' => 'empresa_idempresa']);
//    }
    
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdBarra2()
    {
        return $this->hasOne(Barras::className(), ['id_barra' => 'id_barra_2']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getValoresFlujos()
    {
        return $this->hasMany(ValoresFlujo::className(), ['flujo_id_flujo' => 'id_flujo']);
    }
}
