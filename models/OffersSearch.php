<?php

namespace app\models;

use Yii;
use yii\base\Model;
use hiqdev\hiart\ActiveDataProvider;
use app\models\Offers;

/**
 * OffersSearch represents the model behind the search form about `app\models\Offers`.
 */
class OffersSearch extends Offers
{
    
    public function rules()
    {
        return [
            [['lengthOfStay', 'minTotalRate', 'maxTotalRate', 'minTripStartDate', 'maxTripStartDate', 'destinationName', 'destinationCity', 'destinationProvince', 'minStarRating', 'minGuestRating', 'maxGuestRating'], 'trim'],
            ['lengthOfStay', 'integer', 'min' => 1],
            [['minTotalRate','maxTotalRate'] , 'integer', 'min' => 1],
            [['minTripStartDate', 'maxTripStartDate'], 'date', 'format' => 'php:Y-m-d'],
            [['destinationName', 'destinationCity', 'destinationProvince'], 'string', 'min' => 2, 'max' => 32],
            [['minStarRating', 'minGuestRating', 'maxGuestRating'], 'number', 'numberPattern' => '/^\d+(.\d{1,2})?$/'],
        ];
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Offers::find();
        $defaultParams = ['scenario' => 'deal-finder', 'page' => 'foo', 'uid' => 'foo', 'productType' => 'Hotel'];
        
        $this->load($params);
        
        if( $this->lengthOfStay ) {
            $defaultParams['lengthOfStay'] = $this->lengthOfStay;
        }

        if( $this->minStarRating ) {
            if( $this->minStarRating == 5 ) {
                $defaultParams['minStarRating'] = $this->minStarRating;
            } else {
                $defaultParams['minStarRating'] = $this->minStarRating;
                $defaultParams['maxStarRating'] = (int) $this->minStarRating + 0.5;
            }
        }

        if( $this->minGuestRating ) {
            if( $this->minGuestRating == 5 ) {
                $defaultParams['minGuestRating'] = $this->minGuestRating;
            } else {
                $defaultParams['minGuestRating'] = $this->minGuestRating;
                $defaultParams['maxGuestRating'] = (int) $this->minGuestRating + 0.99;
            }
        }

        if( $this->minTotalRate ) {
            $defaultParams['minTotalRate'] = $this->minTotalRate;
        }
        
        if( $this->maxTotalRate ) {
            $defaultParams['maxTotalRate'] = $this->maxTotalRate;
        }
        
        if( $this->minTripStartDate ) {
            $defaultParams['minTripStartDate'] = $this->minTripStartDate;
        }

        if( $this->maxTripStartDate ) {
            $defaultParams['maxTripStartDate'] = $this->maxTripStartDate;
        }
        
        if( $this->destinationName ) {
            $defaultParams['destinationName'] = $this->destinationName;
        }

        if( $this->destinationProvince ) {
            $defaultParams['destinationProvince'] = $this->destinationProvince;
        }

        if( $this->destinationCity ) {
            $defaultParams['destinationCity'] = $this->destinationCity;
        }
        
        $query->where($defaultParams);
        return $query->all();
    }
}
