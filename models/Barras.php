<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "barras".
 *
 * @property integer $id_barra
 * @property string $barra
 * @property integer $tiene_tension
 * @property integer $x
 * @property integer $y
 *
 * @property Flujo[] $flujos
 * @property Flujo[] $flujos0
 * @property Generadores[] $generadores
 * @property ValoresDemandas[] $valoresDemandas
 * @property ValoresTensiones[] $valoresTensiones
 */
class Barras extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'barras';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['barra', 'tiene_tension', 'x', 'y'], 'required'],
            [['barra'], 'string'],
            [['tiene_tension', 'x', 'y'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_barra' => Yii::t('app', 'Id Barra'),
            'barra' => Yii::t('app', 'Barra'),
            'tiene_tension' => Yii::t('app', 'Tiene Tension'),
            'x' => Yii::t('app', 'X'),
            'y' => Yii::t('app', 'Y'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFlujos()
    {
        return $this->hasMany(Flujo::className(), ['id_barra_1' => 'id_barra']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFlujos0()
    {
        return $this->hasMany(Flujo::className(), ['id_barra_2' => 'id_barra']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGeneradores()
    {
        return $this->hasMany(Generadores::className(), ['id_barra' => 'id_barra']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getValoresDemandas()
    {
        return $this->hasMany(ValoresDemandas::className(), ['id_barra' => 'id_barra']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getValoresTensiones()
    {
        return $this->hasMany(ValoresTensiones::className(), ['id_barra' => 'id_barra']);
    }
}
