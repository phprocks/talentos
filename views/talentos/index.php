<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TalentosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Lista de Indicações';
?>
<div class="talentos-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Talentos', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'pa_id',
            'indicado_por',
            'nome_talento',
            'cel_talento',
            // 'tel_talento',
            // 'email_talento:email',
            // 'empresa_talento',
            // 'salario_talento',
            // 'observacao:ntext',
            // 'created',
            // 'flag_efetivado',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
