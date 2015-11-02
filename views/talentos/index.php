<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use app\models\Pa;

$this->title = 'Lista de Indicações';
?>
<div class="talentos-index">

    <h2><?= Html::encode($this->title) ?></h2>
    <div class="panel panel-default">
      <div class="panel-body">
        <?php echo $this->render('_search', ['model' => $searchModel]); ?>
      </div>
    </div>
    
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'rowOptions' => function($model){
            if($model->flag_efetivado === 1)
                {
                    return ['class' => 'warning'];
                }
        },        
        'columns' => [
            [
             'attribute' => 'created',
             'enableSorting' => true,
             'contentOptions'=>['style'=>'width: 7%;text-align:center'],
             'format' => ['date', 'php:d/m/Y'],
            ],            
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
            'contentOptions'=>['style'=>'width: 8%;text-align:center'],
            'template' => '{star} {view} {delete}',
            'buttons' => [              
                    'star' => function ($url, $model) {
                            return $model->flag_efetivado === 0 ?  Html::a('<span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>', $url, [
                                        'title' => 'Não Contratado',
                                        //'class'=>'btn btn-primary btn-xs',                                
                        ]) : Html::a('<span class="glyphicon glyphicon-star fa-spin" style="color:gold" aria-hidden="true"></span>', $url, [
                                        'title' => 'Contratado!',
                                        //'class'=>'btn btn-primary btn-xs',                                
                        ]);
                    },
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
