<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Profil094 $model */

$this->title = 'Create Profil094';
$this->params['breadcrumbs'][] = ['label' => 'Profil094s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="profil094-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
