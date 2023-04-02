<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\produtor $model */

$this->title = 'Create Produtor';
$this->params['breadcrumbs'][] = ['label' => 'Produtors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="produtor-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
