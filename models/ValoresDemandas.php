<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "valores_demandas".
 *
 * @property integer $iddemandas
 * @property double $demanda
 * @property string $fecha_hora
 * @property integer $id_barra
 *
 * @property Barras $idBarra
 */
class ValoresDemandas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'valores_demandas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['demanda'], 'number'],
            [['fecha_hora', 'id_barra'], 'required'],
            [['fecha_hora'], 'safe'],
            [['id_barra'], 'integer'],
            [['id_barra'], 'exist', 'skipOnError' => true, 'targetClass' => Barras::className(), 'targetAttribute' => ['id_barra' => 'id_barra']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'iddemandas' => Yii::t('app', 'Iddemandas'),
            'demanda' => Yii::t('app', 'Demanda'),
            'fecha_hora' => Yii::t('app', 'Fecha Hora'),
            'id_barra' => Yii::t('app', 'Id Barra'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdBarra()
    {
        return $this->hasOne(Barras::className(), ['id_barra' => 'id_barra']);
    }
}
