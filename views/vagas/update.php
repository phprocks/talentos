<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Vagas */

$this->title = 'Alterar Texto & Vagas disponíveis';

?>
<div class="vagas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
