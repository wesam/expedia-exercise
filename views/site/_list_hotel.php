<?php
use yii\helpers\Html;
use kartik\widgets\StarRating;
?>

<div class="col-sm-4" data-key="<?= $model['hotelInfo']['hotelId'] ?>">
    <div class="card-container">
         <div class="card">
             <div class="front">
                 <div class="cover">
                     <img src="images/rotating_card_thumb<?= rand(1, 4) ?>.png" />
                 </div>
                 <div class="user">
                     <img class="img-circle" src="<?= $model['hotelInfo']['hotelImageUrl'] ?>"/>
                 </div>
                 <div class="content">
                    <div class="main">
                        <h3 class="name"><?= Html::encode($model['hotelInfo']['hotelName']); ?></h3>
                        <div class="profession">
                             <?=
                                StarRating::widget([
                                    'name' => 'rating_35',
                                    'value' => $model['hotelInfo']['hotelStarRating'],
                                    'pluginOptions' => ['displayOnly' => true, 'size' => 's',]
                                ]);
                             ?>
                        </div>
                        <div class="text-center">
                            <strike class="motto">$<?= $model['hotelPricingInfo']['originalPricePerNight'] ?></strike> becomes
                                <b>$<?= $model['hotelPricingInfo']['averagePriceValue'] ?></b> per night
                        </div>
                        <div class="text-center">
                            save <span class="text-danger alert-danger"><b><?= $model['hotelPricingInfo']['percentSavings'] ?> %</b></span>
                            <br />
                            <?= date( 'D, M j', strtotime(implode('-', $model['offerDateRange']['travelStartDate']))) . ' - ' . date( 'D, M j', strtotime(implode('-', $model['offerDateRange']['travelEndDate']))) ?>
                        </div>
                    </div>
                    
                     <div class="footer">
                         <div class="rating">
                             <i class="fa fa-mail-forward"></i> 
                             <?= ($model['hotelInfo']['hotelStreetAddress']) ? $model['hotelInfo']['hotelStreetAddress'] . ', ' : '' ?>
                             <?= ($model['hotelInfo']['hotelCity']) ? $model['hotelInfo']['hotelCity'] . ', ' : '' ?>
                             <?= ($model['hotelInfo']['hotelProvince']) ? $model['hotelInfo']['hotelProvince'] : '' ?>
                         </div>
                     </div>
                 </div>
             </div> <!-- end front panel -->
             <div class="back">
                 <div class="header">
                     <h5 class="motto">
                        <?= (!empty($model['destination']['province']) ? $model['destination']['province'] . ', ' : '') ?>
                        <?= (!empty($model['destination']['city']) ? $model['destination']['city'] : '') ?>
                     </h5>
                 </div>
                 <div class="content">
                     <div class="main">
                         <h4 class="text-center">Full details check bellow</h4>
                         <p class="text-center"><a href="<?= urldecode($model['hotelUrls']['hotelSearchResultUrl']) ?>">Hotel Site</a></p>
    
                         <div class="stats-container">
                             <div class="stats">
                                 <h4><?= $model['hotelInfo']['hotelGuestReviewRating'] ?></h4>
                                 <p>Guest Rating</p>
                             </div>
                             <div class="stats">
                                 <h4 style="color: red"><?= $model['hotelPricingInfo']['percentSavings'] ?> %</h4>
                                 <p>Saving</p>
                             </div>
                             <div class="stats">
                                 <h4><?= $model['hotelInfo']['hotelReviewTotal'] ?></h4>
                                 <p>Reviews</p>
                             </div>
                         </div>
    
                     </div>
                 </div>
                 
                 <div class="footer">
                     <a href="<?= urldecode($model['hotelUrls']['hotelSearchResultUrl']) ?>">See more like this</a>
                 </div>
                 
             </div> <!-- end back panel -->
         </div> <!-- end card -->
    </div> <!-- end card-container -->
</div>