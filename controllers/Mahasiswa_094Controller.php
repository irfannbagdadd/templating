<?php

namespace app\controllers;
use app\models\Mahasiswa_094;
use yii\data\ActiveDataProvider;

class Mahasiswa_094Controller extends \yii\web\Controller
{
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Mahasiswa_094::find()
        ]);
        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
}

}

?>
