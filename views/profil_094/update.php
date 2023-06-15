<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Profil094 $model */

$this->title = 'Update Profil094: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Profil094s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="profil094-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
