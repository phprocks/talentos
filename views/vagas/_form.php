<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Vagas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vagas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'texto_completo')->widget(\yii\redactor\widgets\Redactor::className(), [
        'clientOptions' => [
            // 'imageManagerJson' => ['/redactor/upload/image-json'],
            // 'imageUpload' => ['/redactor/upload/image'],
            // 'fileUpload' => ['/redactor/upload/file'],
            'lang' => 'pt_br',
            'buttons'=> ['bold', 'italic', 'deleted','unorderedlist', 'orderedlist', 'link', 'alignment'],
            // 'plugins' => ['fontcolor','imagemanager']
        ]
    ])?>

    <?= Html::activeHiddenInput($model, 'data', ['value' => date("Y-m-d H:i:s")]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Gravar' : 'Gravar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
