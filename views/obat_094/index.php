<?php

use app\models\Mahasiswa094;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\mahasiswa_094Search $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Mahasiswa094s';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mahasiswa094-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Mahasiswa094', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'code_obat',
            'harga',
            'stok_obat',
        ],
    ]); ?>


</div>
