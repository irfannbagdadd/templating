<?php
/** @var yii\web\View $this */
    use yii\grid\SerialColumn;
    use yii\grid\ActiveColumn;
    use yii\grid\GridView;
?>
<?=
GridView::widget([
    'dataProvider'=>$dataprovider,
    'columns'=>[
        ['class'=>SerialColumn::ClassName()], 'className' is deprecated,
        'id'
        'kode_buku',
        'judul',
        'jml_item'
        ['class'=>ActionColumn::className()] 'className' is deprecated
            
        ]
    ])
// <h1>buku/index</h1>

// <p>
//     You may change the content of this page by modifying
//     the file <code><?= __FILE__; ?></code>.
// </p>
