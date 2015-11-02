<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Vagas */

$this->title = 'Texto de Apresentação e Vagas disponíveis';
?>
<div class="vagas-view">

    <h2><?= Html::encode($this->title) ?></h2>

    <p>
        <?= Html::a('<i class="fa fa-edit"></i>Alterar', ['update', 'id' => $model->id], ['class' => 'btn btn-success']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'texto_completo:ntext',
            'data',
        ],
    ]) ?>

</div>
