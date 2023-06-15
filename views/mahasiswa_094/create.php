<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Mahasiswa094 $model */

$this->title = 'Create Mahasiswa094';
$this->params['breadcrumbs'][] = ['label' => 'Mahasiswa094s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mahasiswa094-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
