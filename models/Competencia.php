<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "competencia".
 *
 * @property integer $id
 * @property string $nombre
 * @property string $descripcion
 * @property string $imagen
 */
class Competencia extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'competencia';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id'], 'integer'],
            [['nombre', 'descripcion', 'imagen'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'descripcion' => 'Descripcion',
            'imagen' => 'Imagen',
        ];
    }
	
	 public static function paraUrl($linea)
    {
		$cadena=strtolower($linea);
		$result=str_replace(' ', '', $cadena);
       return $result;
    }
}
