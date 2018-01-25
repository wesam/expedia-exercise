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
        // $admins = Hotel::find()->where(['type' => User::ADMIN_TYPE])->all();
        // $offers = Hotel::find()->where(['scenario' => 'deal-finder', 'page' => 'foo', 'uid' => 'foo', 'productType' => 'Hotel'])->all();
        
        // $offers = Offers::find()->where(['scenario' => 'deal-finder', 'page' => 'foo', 'uid' => 'foo', 'productType' => 'Hotel'])->all();
        
        //$hotels = Offers::find()->buildDefaultAPI()->all();
        
        // $admins = Hotel::find()->all();
        
        // foreach ($offers as $key => $offer) {
            // print_r($offer->getAttributes());
            // print_r( $offer->offers );
        // }
        
        // print_r( $offers );
        // print_r( $offers[2]['Hotel'] );
        // print_r( $offers[2]->Hotel );
        // die;
        
        
        $searchModel = new OffersSearch();
        $hotels = $searchModel->search(Yii::$app->request->queryParams);
        $hotels = $hotels[2];
        $hotels = $hotels->Hotel;
        
        // print_r( $hotels[2]->Hotel );
        
        $hotels = new \yii\data\ArrayDataProvider([
            // 'allModels' => $hotels[2]->Hotel, //$this->getFakedModels(),
            'allModels' => $hotels, //$this->getFakedModels(),
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
