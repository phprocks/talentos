<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Vagas */

$this->title = 'Alterar Texto & Vagas disponíveis';

?>
<div class="vagas-update">

    <h2><?= Html::encode($this->title) ?></h2>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
