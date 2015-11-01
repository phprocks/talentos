<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TalentosSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="talentos-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'pa_id') ?>

    <?= $form->field($model, 'indicado_por') ?>

    <?= $form->field($model, 'nome_talento') ?>

    <?= $form->field($model, 'cel_talento') ?>

    <?php // echo $form->field($model, 'tel_talento') ?>

    <?php // echo $form->field($model, 'email_talento') ?>

    <?php // echo $form->field($model, 'empresa_talento') ?>

    <?php // echo $form->field($model, 'salario_talento') ?>

    <?php // echo $form->field($model, 'observacao') ?>

    <?php // echo $form->field($model, 'created') ?>

    <?php // echo $form->field($model, 'flag_efetivado') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
