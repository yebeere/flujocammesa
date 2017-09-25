<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "valores_generadores".
 *
 * @property integer $idgeneradores_valores
 * @property double $generacion
 * @property integer $id_generador
 * @property string $fecha_hora
 *
 * @property Generadores $idGenerador
 */
class ValoresGeneradores extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'valores_generadores';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['generacion', 'id_generador', 'fecha_hora'], 'required'],
            [['generacion'], 'number'],
            [['id_generador'], 'integer'],
            [['fecha_hora'], 'safe'],
            [['id_generador'], 'exist', 'skipOnError' => true, 'targetClass' => Generadores::className(), 'targetAttribute' => ['id_generador' => 'idgeneradores']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idgeneradores_valores' => Yii::t('app', 'Idgeneradores Valores'),
            'generacion' => Yii::t('app', 'Generacion'),
            'id_generador' => Yii::t('app', 'Id Generador'),
            'fecha_hora' => Yii::t('app', 'Fecha Hora'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdGenerador()
    {
        return $this->hasOne(Generadores::className(), ['idgeneradores' => 'id_generador']);
    }
}
