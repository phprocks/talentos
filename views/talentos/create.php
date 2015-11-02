<?php

use yii\helpers\Html;

$this->title = 'Indique um Talento';
?>
<div class="talentos-create">

    <h2><?= Html::encode($this->title) ?></h2>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
