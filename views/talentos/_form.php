<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Pa;
use yii\widgets\MaskedInput;

?>

<div class="talentos-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-sm-3">
        <?= $form->field($model, 'pa_id')->dropDownList(ArrayHelper::map(Pa::find()->orderBy("sigla_pa ASC")->all(), 'id', 'sigla_pa'),['prompt'=>'-- Selecione --'])  ?>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-3">
        <?= $form->field($model, 'indicado_por')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-3">    
        <?= $form->field($model, 'nome_talento')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-3">      
        <?= $form->field($model, 'cel_talento')->widget(\yii\widgets\MaskedInput::classname(), [
            'mask' => ['(99)9999-9999'],
        ]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-3">
        <?= $form->field($model, 'tel_talento')->widget(\yii\widgets\MaskedInput::classname(), [
            'mask' => ['(99)9999-9999'],
        ]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-3">
        <?= $form->field($model, 'email_talento')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-3">    
        <?= $form->field($model, 'empresa_talento')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-3">    
        <?= $form->field($model, 'salario_talento')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <?= $form->field($model, 'observacao')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Gravar' : 'Gravar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
