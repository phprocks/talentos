<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use app\models\Pa;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TalentosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Lista de Indicações';
?>
<div class="talentos-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            [
             'attribute' => 'created',
             'enableSorting' => true,
             'contentOptions'=>['style'=>'width: 7%;text-align:center'],
             'format' => ['date', 'php:d/m/Y'],
             //'filter' => DatePicker::widget(['language' => 'pt', 'dateFormat' => 'yyyy-MM-dd']),
             //'format' => 'html',
            ],            
            //'pa.sigla_pa',
            [
             'attribute' => 'pa_id',
             'format' => 'raw',
             'enableSorting' => true,
             'value' => function ($model) {                      
                    return $model->pa->sigla_pa;
                    },
             'filter' => ArrayHelper::map(Pa::find()->orderBy('sigla_pa')->asArray()->all(), 'id', 'sigla_pa'),
             'contentOptions'=>['style'=>'width: 7%;text-align:center'],
            ],            
            'indicado_por',
            'nome_talento',
            'cel_talento',
            'tel_talento',
            'email_talento:email',
            // 'empresa_talento',
            // 'salario_talento',
            // 'observacao:ntext',
            // 'created',
            // 'flag_efetivado',

            ['class' => 'yii\grid\ActionColumn',
            'contentOptions'=>['style'=>'width: 5%;text-align:center'],
            'template' => '{view} {delete}',
                            'buttons' => [
                    'view' => function ($url, $model) {
                        return Html::a('<span class="glyphicon glyphicon-eye-open" ></span>', $url, [
                                    'title' => 'Visualizar',
                        ]);
                    },

                ],
            ],
        ],
    ]); ?>

</div>
