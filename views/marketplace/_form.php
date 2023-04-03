<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\localidade;
use yii\helpers\ArrayHelper;

/** @var yii\web\View $this */
/** @var app\models\marketplace $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="marketplace-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'produtor_id')->textInput() ?>

    <?= $form->field($model, 'imagem')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mensagem')->textInput(['maxlength' => true]) ?>

    
    <?= $form->field($model, 'localidade_id')->
        dropDownList(ArrayHelper::map(Localidade::find()
            ->orderBy('nome')
            ->all(),'id','nome'),
            ['prompt' => 'Selecione uma Localidade.'] )
    ?>

   <!-- <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'created_by')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <?= $form->field($model, 'updated_by')->textInput() ?>
   !-->
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
