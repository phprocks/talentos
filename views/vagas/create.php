<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Vagas */

$this->title = 'Create Vagas';
$this->params['breadcrumbs'][] = ['label' => 'Vagas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vagas-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
