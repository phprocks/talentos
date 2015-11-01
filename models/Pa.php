<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_pa".
 *
 * @property integer $id
 * @property string $sigla_pa
 *
 * @property TbTalentos[] $tbTalentos
 */
class Pa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tb_pa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sigla_pa'], 'required'],
            [['sigla_pa'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'sigla_pa' => 'Sigla Pa',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTbTalentos()
    {
        return $this->hasMany(TbTalentos::className(), ['pa_id' => 'id']);
    }
}
