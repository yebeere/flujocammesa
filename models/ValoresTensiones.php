<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "valores_tensiones".
 *
 * @property integer $idtensiones
 * @property integer $id_barra
 * @property double $tension
 * @property string $fecha_hora
 *
 * @property Barras $idBarra
 */
class ValoresTensiones extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'valores_tensiones';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_barra', 'tension', 'fecha_hora'], 'required'],
            [['id_barra'], 'integer'],
            [['tension'], 'number'],
            [['fecha_hora'], 'safe'],
            [['id_barra'], 'exist', 'skipOnError' => true, 'targetClass' => Barras::className(), 'targetAttribute' => ['id_barra' => 'id_barra']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idtensiones' => Yii::t('app', 'Idtensiones'),
            'id_barra' => Yii::t('app', 'Id Barra'),
            'tension' => Yii::t('app', 'Tension'),
            'fecha_hora' => Yii::t('app', 'Fecha Hora'),
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
