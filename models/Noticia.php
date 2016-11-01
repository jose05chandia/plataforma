<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "noticia".
 *
 * @property integer $id
 * @property string $titulo
 * @property string $descripcion
 * @property string $imagen
 * @property string $fechaCreacion
 */
class Noticia extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'noticia';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id'], 'integer'],
            [['titulo', 'descripcion', 'imagen'], 'string'],
            [['fechaCreacion'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'titulo' => 'Titulo',
            'descripcion' => 'Descripcion',
            'imagen' => 'Imagen',
            'fechaCreacion' => 'Fecha Creacion',
        ];
    }
}
