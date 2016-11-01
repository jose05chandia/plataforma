<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "indicador".
 *
 * @property integer $id
 * @property string $descripcion
 * @property integer $idNivelIndicadorFk
 * @property integer $idDesempenoFk
 *
 * @property Desempeno $idDesempenoFk0
 * @property Nivelindicador $idNivelIndicadorFk0
 */
class Indicador extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'indicador';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'idNivelIndicadorFk', 'idDesempenoFk'], 'integer'],
            [['descripcion'], 'string'],
            [['idDesempenoFk'], 'exist', 'skipOnError' => true, 'targetClass' => Desempeno::className(), 'targetAttribute' => ['idDesempenoFk' => 'id']],
            [['idNivelIndicadorFk'], 'exist', 'skipOnError' => true, 'targetClass' => Nivelindicador::className(), 'targetAttribute' => ['idNivelIndicadorFk' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'descripcion' => 'Descripcion',
            'idNivelIndicadorFk' => 'Id Nivel Indicador Fk',
            'idDesempenoFk' => 'Id Desempeno Fk',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdDesempenoFk0()
    {
        return $this->hasOne(Desempeno::className(), ['id' => 'idDesempenoFk']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdNivelIndicadorFk0()
    {
        return $this->hasOne(Nivelindicador::className(), ['id' => 'idNivelIndicadorFk']);
    }
}
