<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Talentos */

$this->title = "Detalhes da indicação " . $model->id;
?>
<div class="talentos-view">

    <h2><?= Html::encode($this->title) ?></h2>
    <hr/>

    <p>
        <?= Html::a('<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Alterar', ['update', 'id' => $model->id], ['class' => 'btn btn-success']) ?>
        <?= Html::a('<span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Excluir', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Tem certeza que deseja excluir est item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            [
             'attribute' => 'flag_efetivado',
             'label' => 'Contratado?',
             'format' => 'raw',
             'value' => $model->flag_efetivado == 1 ? '<span style="color:green" class="glyphicon glyphicon-ok" aria-hidden="true"></span> Sim' : '<span style="color:red" class="glyphicon glyphicon-remove" aria-hidden="true"></span> Não',
             ],           
            'id',
            'pa.sigla_pa',
            'indicado_por',
            'nome_talento',
            'cel_talento',
            'tel_talento',
            'email_talento:email',
            'empresa_talento',
            'salario_talento',
            'observacao:ntext',
            [
                'attribute' => 'created',
                'format' => 'html',
                'value' => date("d/m/Y",  strtotime($model->created)),
            ],                         
        ],
    ]) ?>

</div>
