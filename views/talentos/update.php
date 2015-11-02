<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Talentos */

$this->title = "Alterar indicação " . $model->id;
?>
<div class="talentos-update">

    <h2><?= Html::encode($this->title) ?></h2>
    <hr/>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
