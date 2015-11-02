<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Pa;

?>

<div class="talentos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'pa_id')->dropDownList(ArrayHelper::map(Pa::find()->orderBy("sigla_pa ASC")->all(), 'id', 'sigla_pa'),['prompt'=>'-- Selecione --'])  ?>

    <?= $form->field($model, 'indicado_por')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nome_talento')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cel_talento')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tel_talento')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email_talento')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'empresa_talento')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'salario_talento')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'observacao')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Gravar' : 'Gravar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
