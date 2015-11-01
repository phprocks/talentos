<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Talentos */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Talentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="talentos-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'pa_id',
            'indicado_por',
            'nome_talento',
            'cel_talento',
            'tel_talento',
            'email_talento:email',
            'empresa_talento',
            'salario_talento',
            'observacao:ntext',
            'created',
            'flag_efetivado',
        ],
    ]) ?>

</div>
