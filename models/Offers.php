<?php

namespace app\models;

class Offers extends \hiqdev\hiart\ActiveRecord
{
    
    public function attributes() {
        return [
             'offers', 'Hotel', 
             'lengthOfStay', 'minStarRating', 'maxStarRating', 'minGuestRating', 'maxGuestRating', 'minTotalRate', 'maxTotalRate',
             'minTripStartDate', 'maxTripStartDate', 'destinationName', 'destinationProvince', 'destinationCity',
        ];
    }
    
    public function attributeLabels()
    {
        return [
            'lengthOfStay' => 'Length Of Stay',
            'destinationName' => 'Destination',
            'destinationProvince' => 'Province',
            'destinationCity' => 'City',
            'minStarRating' => 'Hotel Class',
            'minGuestRating' => 'Guest Rating',
            'minTripStartDate' => 'Check-in',
            'maxTripStartDate' => 'Check-out',
        ];
    }
    
    public static function tableName()
    {
        return 'Offers';
    }
    
    public static function find()
    {
        return new \app\models\OffersQuery(get_called_class());
    }
 
}