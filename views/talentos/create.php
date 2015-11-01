<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Talentos */

$this->title = 'Create Talentos';
$this->params['breadcrumbs'][] = ['label' => 'Talentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="talentos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
