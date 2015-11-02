<?php

use yii\helpers\Html;
use yii\widgets\DetailView;


$this->title = 'Bem-vindo ao Ação Indique um Talento';
?>
<div class="vagas-view">

    <h2>Bem-vindo ao Ação Indique um Talento</h2>
    <hr/>

    <?php if ($flash = Yii::$app->session->getFlash("talento-success")): ?>

        <div class="alert alert-success">
            <p class="text-center"><?= $flash ?></p>
        </div>

    <?php endif; ?>
    
    <?= DetailView::widget([
        'model' => $model,
        'template' => '{value}</p>',
        'attributes' => [
            //'texto_completo:ntext',
            [
                'attribute' => 'texto_completo',
                'format' => 'html',
            ],
            [
                'attribute' => 'data',
                'format' => 'html',
                'value' => "<p class=\"text-muted\"> Atualizado em " . date("d/m/Y",  strtotime($model->data)) . "</p>",
            ],            
        ],
    ]) ?>
    <div class="row">
      <div class="col-md-5 col-md-offset-3">
      <?= Html::a('<span class="glyphicon glyphicon-star" aria-hidden="true"></span> Indicar um Talento', ['talentos/create'], ['class' => 'btn btn-success btn-lg btn-block']) ?>
      </div>
    </div>
</div>
