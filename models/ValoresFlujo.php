<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "valores_flujo".
 *
 * @property integer $idvalores_flujo
 * @property string $fecha_hora
 * @property double $potencia
 * @property integer $flujo_id_flujo
 *
 * @property Flujo $flujoIdFlujo
 */
class ValoresFlujo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'valores_flujo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fecha_hora', 'flujo_id_flujo'], 'required'],
            [['fecha_hora'], 'safe'],
            [['potencia'], 'number'],
            [['flujo_id_flujo'], 'integer'],
            [['flujo_id_flujo'], 'exist', 'skipOnError' => true, 'targetClass' => Flujo::className(), 'targetAttribute' => ['flujo_id_flujo' => 'id_flujo']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idvalores_flujo' => Yii::t('app', 'Idvalores Flujo'),
            'fecha_hora' => Yii::t('app', 'Fecha Hora'),
            'potencia' => Yii::t('app', 'Potencia'),
            'flujo_id_flujo' => Yii::t('app', 'Flujo Id Flujo'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFlujoIdFlujo()
    {
        return $this->hasOne(Flujo::className(), ['id_flujo' => 'flujo_id_flujo']);
    }
}
