<?php

use app\models\produtor;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\localidade;
use yii\helpers\ArrayHelpers;

/** @var yii\web\View $this */
/** @var app\models\ProdutorSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Produtors';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="produtor-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Produtor', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            //'localidade_id',
            [
                'attribute'=> 'localidade.nome',
                'label'=>'Localidade',
                
                   
            ],
            'nome',
            'email:email',
            
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, produtor $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
