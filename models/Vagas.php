<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_vagas".
 *
 * @property integer $id
 * @property string $texto_completo
 * @property string $data
 */
class Vagas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tb_vagas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['texto_completo', 'data'], 'required'],
            [['texto_completo'], 'string'],
            [['data'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'texto_completo' => 'Texto',
            'data' => 'Data',
        ];
    }
}
