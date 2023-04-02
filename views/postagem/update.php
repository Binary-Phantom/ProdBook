<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\postagem $model */

$this->title = 'Update Postagem: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Postagems', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="postagem-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
