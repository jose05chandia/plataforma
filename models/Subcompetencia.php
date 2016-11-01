<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "subcompetencia".
 *
 * @property integer $id
 * @property string $descripcion
 * @property integer $idCompetenciaFk
 *
 * @property Competencia $idCompetenciaFk0
 */
class Subcompetencia extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'subcompetencia';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'idCompetenciaFk'], 'integer'],
            [['descripcion'], 'string'],
            [['idCompetenciaFk'], 'exist', 'skipOnError' => true, 'targetClass' => Competencia::className(), 'targetAttribute' => ['idCompetenciaFk' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            //'id' => 'ID',
            'descripcion' => 'Descripción',
            'idCompetenciaFk' => 'Id Competencia Fk',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdCompetenciaFk0()
    {
        return $this->hasOne(Competencia::className(), ['id' => 'idCompetenciaFk']);
    }
}
