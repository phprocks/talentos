<?php

namespace app\models;

use Yii;

class Talentos extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'tb_talentos';
    }

    public function rules()
    {
        return [
            [['pa_id', 'indicado_por', 'nome_talento', 'cel_talento', 'tel_talento', 'email_talento', 'empresa_talento'], 'required','message' => 'Campo Obrigatório'],
            [['pa_id', 'flag_efetivado'], 'integer'],
            [['observacao'], 'string'],
            [['email_talento'], 'email'],                            
            [['created'], 'safe'],
            [['indicado_por', 'nome_talento', 'empresa_talento'], 'string', 'max' => 100],
            [['cel_talento', 'tel_talento', 'email_talento', 'salario_talento'], 'string', 'max' => 45]
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'pa_id' => 'PA',
            'indicado_por' => 'Indicado Por',
            'nome_talento' => 'Nome do Talento',
            'cel_talento' => 'Tel. Celular',
            'tel_talento' => 'Tel. Fixo',
            'email_talento' => 'Email',
            'empresa_talento' => 'Empresa onde trabalha',
            'salario_talento' => 'Salario atual com benefícios',
            'observacao' => 'Observação',
            'created' => 'Data',
            'flag_efetivado' => 'Efetivado',
        ];
    }

    public function getPa()
    {
        return $this->hasOne(Pa::className(), ['id' => 'pa_id']);
    }
}
