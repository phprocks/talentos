<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_talentos".
 *
 * @property integer $id
 * @property integer $pa_id
 * @property string $indicado_por
 * @property string $nome_talento
 * @property string $cel_talento
 * @property string $tel_talento
 * @property string $email_talento
 * @property string $empresa_talento
 * @property string $salario_talento
 * @property string $observacao
 * @property string $created
 * @property integer $flag_efetivado
 *
 * @property TbPa $pa
 */
class Talentos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tb_talentos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pa_id', 'indicado_por', 'nome_talento', 'cel_talento', 'tel_talento', 'email_talento', 'empresa_talento'], 'required'],
            [['pa_id', 'flag_efetivado'], 'integer'],
            [['observacao'], 'string'],
            [['created'], 'safe'],
            [['indicado_por', 'nome_talento', 'empresa_talento'], 'string', 'max' => 100],
            [['cel_talento', 'tel_talento', 'email_talento', 'salario_talento'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'pa_id' => 'PA',
            'indicado_por' => 'Indicado Por',
            'nome_talento' => 'Nome do Talento',
            'cel_talento' => 'Cel Talento',
            'tel_talento' => 'Tel Talento',
            'email_talento' => 'Email',
            'empresa_talento' => 'Empresa Talento',
            'salario_talento' => 'Salario Talento',
            'observacao' => 'Observacao',
            'created' => 'Data',
            'flag_efetivado' => 'Efetivado',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPa()
    {
        return $this->hasOne(Pa::className(), ['id' => 'pa_id']);
    }
}
