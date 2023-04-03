<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\localidade;
use yii\helpers\ArrayHelper;

/** @var yii\web\View $this */
/** @var app\models\produtor $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="produtor-form">

    <?php $form = ActiveForm::begin(); ?>

    
    <?= $form->field($model, 'localidade_id')->
        dropDownList(ArrayHelper::map(Localidade::find()
            ->orderBy('nome')
            ->all(),'id','nome'),
            ['prompt' => 'Selecione uma Localidade.'] )
    ?>

    <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'senha')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
