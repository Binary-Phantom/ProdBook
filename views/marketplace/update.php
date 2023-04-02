<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\marketplace $model */

$this->title = 'Update Marketplace: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Marketplaces', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="marketplace-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
