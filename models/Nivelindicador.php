<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "nivelindicador".
 *
 * @property integer $id
 * @property string $descripcion
 *
 * @property Indicador[] $indicadors
 */
class Nivelindicador extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'nivelindicador';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id'], 'integer'],
            [['descripcion'], 'string'],
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
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIndicadors()
    {
        return $this->hasMany(Indicador::className(), ['idNivelIndicadorFk' => 'id']);
    }
}
