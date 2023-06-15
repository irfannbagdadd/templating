<?php

namespace app\controllers;
use app\models\Profil_44;
use yii\data\ActiveDataProvider;

class Profil_44Controller extends \yii\web\Controller
{
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Profil_44::find()
        ]);
        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
}

}
