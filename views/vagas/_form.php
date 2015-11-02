<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Vagas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vagas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'texto_completo')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'data')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Gravar' : 'Gravar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
