<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "desempeno".
 *
 * @property integer $id
 * @property string $descripcion
 * @property integer $idSubcompetenciaFk
 *
 * @property Subcompetencia $idSubcompetenciaFk0
 * @property Subcompetencia $idSubcompetenciaFk1
 * @property Subcompetencia $idSubcompetenciaFk2
 */
class Desempeno extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'desempeno';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'idSubcompetenciaFk'], 'integer'],
            [['descripcion'], 'string'],
            [['idSubcompetenciaFk'], 'exist', 'skipOnError' => true, 'targetClass' => Subcompetencia::className(), 'targetAttribute' => ['idSubcompetenciaFk' => 'id']],
            [['idSubcompetenciaFk'], 'exist', 'skipOnError' => true, 'targetClass' => Subcompetencia::className(), 'targetAttribute' => ['idSubcompetenciaFk' => 'id']],
            [['idSubcompetenciaFk'], 'exist', 'skipOnError' => true, 'targetClass' => Subcompetencia::className(), 'targetAttribute' => ['idSubcompetenciaFk' => 'id']],
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
            'idSubcompetenciaFk' => 'Id Subcompetencia Fk',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdSubcompetenciaFk0()
    {
        return $this->hasOne(Subcompetencia::className(), ['id' => 'idSubcompetenciaFk']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdSubcompetenciaFk1()
    {
        return $this->hasOne(Subcompetencia::className(), ['id' => 'idSubcompetenciaFk']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdSubcompetenciaFk2()
    {
        return $this->hasOne(Subcompetencia::className(), ['id' => 'idSubcompetenciaFk']);
    }
}
