<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Mahasiswa094 $model */

$this->title = 'Update Mahasiswa094: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Mahasiswa094s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mahasiswa094-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
