<?php

use yii\helpers\Html;

$this->title = 'Indique um Talento';
?>
<div class="talentos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
