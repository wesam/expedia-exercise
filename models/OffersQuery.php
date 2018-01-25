<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Offers]].
 *
 * @see City
 */
class OffersQuery extends \hiqdev\hiart\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/
    
    // public function buildDefaultAPI()
    // {
        // return $this->andWhere(['scenario' => 'deal-finder', 'page' => 'foo', 'uid' => 'foo', 'productType' => 'Hotel']);
    // }

    /**
     * @inheritdoc
     * @return Offers[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Offers|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
