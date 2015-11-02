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
        <div class="col-md-6">
      <?= $form->field($model, 'flag_efetivado')->radioList([
        '1' => 'Sim', 
        '0' => 'Não',
        ], ['itemOptions' => ['class' =>'radio-inline','labelOptions'=>array('style'=>'padding:5px;')]])->label('Marcar como contratado?') ?>
    </div>
    </div>
    <hr/>
    <div class="row">

      <div class="col-md-6">
      <!-- Left col -->

        <?= $form->field($model, 'pa_id')->dropDownList(ArrayHelper::map(Pa::find()->orderBy("sigla_pa ASC")->all(), 'id', 'sigla_pa'),['prompt'=>'-- PA --','style'=>'width:100px'])  ?>

        <?= $form->field($model, 'indicado_por')->textInput(['maxlength' => true,'style'=>'width:300px']) ?>

        <?= $form->field($model, 'nome_talento')->textInput(['maxlength' => true,'style'=>'width:300px']) ?>

        <?= $form->field($model, 'cel_talento')->widget(\yii\widgets\MaskedInput::classname(), [
            'mask' => ['(99)9999-9999'],
            'options' => ['class'=>'form-control','style'=>'width:130px'],
        ]) ?>

        <?= $form->field($model, 'tel_talento')->widget(\yii\widgets\MaskedInput::classname(), [
            'mask' => ['(99)9999-9999'],
            'options' => ['class'=>'form-control','style'=>'width:130px'],
        ]) ?>

        <?= $form->field($model, 'email_talento')->textInput(['maxlength' => true,'style'=>'width:300px']) ?>

      </div>
      <div class="col-md-6">
      <!-- Right col -->
   
        <?= $form->field($model, 'empresa_talento')->textInput(['maxlength' => true,'style'=>'width:300px']) ?>
   
        <?= $form->field($model, 'salario_talento')->textInput(['maxlength' => true,'style'=>'width:100px']) ?>

        <?= $form->field($model, 'observacao')->textarea(['rows' => 6]) ?>

        <?= Html::activeHiddenInput($model, 'created', ['value' => date("Y-m-d H:i:s")]) ?>
      </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Gravar' : 'Gravar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
