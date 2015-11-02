<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Vagas */

$this->title = 'Create Vagas';

?>
<div class="vagas-create">

    <h2><?= Html::encode($this->title) ?></h2>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
