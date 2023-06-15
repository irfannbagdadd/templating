<?php
    use yii\grid\GridView;
?>

<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        'id',
        'code_obat',
        'harga',
        'stok_obat'
    ],
]) ?>
