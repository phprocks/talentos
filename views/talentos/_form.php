<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Talentos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="talentos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'pa_id')->textInput() ?>

    <?= $form->field($model, 'indicado_por')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nome_talento')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cel_talento')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tel_talento')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email_talento')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'empresa_talento')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'salario_talento')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'observacao')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'created')->textInput() ?>

    <?= $form->field($model, 'flag_efetivado')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
