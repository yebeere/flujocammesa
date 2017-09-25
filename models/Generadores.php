<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "generadores".
 *
 * @property integer $idgeneradores
 * @property integer $x
 * @property integer $y
 * @property integer $x_signo
 * @property integer $y_signo
 * @property string $generador
 * @property integer $id_barra
 * @property string $signo_positivo
 * @property string $distro
 *
 * @property Barras $idBarra
 * @property ValoresGeneradores[] $valoresGeneradores
 */
class Generadores extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'generadores';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['x', 'y', 'x_signo', 'y_signo', 'generador', 'id_barra', 'signo_positivo', 'distro'], 'required'],
            [['x', 'y', 'x_signo', 'y_signo', 'id_barra'], 'integer'],
            [['generador', 'signo_positivo'], 'string', 'max' => 45],
            [['distro'], 'string', 'max' => 2],
            [['id_barra'], 'exist', 'skipOnError' => true, 'targetClass' => Barras::className(), 'targetAttribute' => ['id_barra' => 'id_barra']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idgeneradores' => Yii::t('app', 'Idgeneradores'),
            'x' => Yii::t('app', 'X'),
            'y' => Yii::t('app', 'Y'),
            'x_signo' => Yii::t('app', 'X Signo'),
            'y_signo' => Yii::t('app', 'Y Signo'),
            'generador' => Yii::t('app', 'Generador'),
            'id_barra' => Yii::t('app', 'Id Barra'),
            'signo_positivo' => Yii::t('app', 'Signo Positivo'),
            'distro' => Yii::t('app', 'Distro'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdBarra()
    {
        return $this->hasOne(Barras::className(), ['id_barra' => 'id_barra']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getValoresGeneradores()
    {
        return $this->hasMany(ValoresGeneradores::className(), ['id_generador' => 'idgeneradores']);
    }
}
