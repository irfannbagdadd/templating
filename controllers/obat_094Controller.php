<?php

namespace app\controllers;
use app\models\obat_094;
use yii\data\ActiveDataProvider;

class Obat_094Controller extends \yii\web\Controller
{
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => obat_094::find()
        ]);
        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
}

}

?>
