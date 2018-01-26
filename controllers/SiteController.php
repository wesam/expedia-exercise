<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\OffersSearch;

class SiteController extends Controller
{
    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $hotels = [];
        $searchModel = new OffersSearch();
        $hotels = $searchModel->search(Yii::$app->request->queryParams);
        $hotels = $hotels[2];
        $hotels = $hotels->Hotel;
        
        $hotels = new \yii\data\ArrayDataProvider([
            'allModels' => $hotels,
            'pagination' => [
                'pageSize' => 15
            ],
        ]);

        return $this->render('offers', [
            'searchModel' => $searchModel,
            'dataProvider' => $hotels,
        ]);
    }
}