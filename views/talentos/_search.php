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

    <div class="row">
        <div class="col-sm-3">
            <?= $form->field($model, 'flag_efetivado')->radioList([
        '1' => 'Sim', 
        '0' => 'Não',
        ], ['itemOptions' => ['class' =>'radio-inline','labelOptions'=>array('onchange'=>'this.form.submit()','style'=>'padding:5px;')]])->label('Exibir Indicações Contratadas') ?>
        </div>
    </div>    

<!--     <div class="form-group">
        <?= Html::submitButton('Filtrar', ['class' => 'btn btn-success']) ?>
    </div> -->

    <?php ActiveForm::end(); ?>

</div>
