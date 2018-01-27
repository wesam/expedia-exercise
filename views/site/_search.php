<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model backend\models\CitySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="clearfix city-search margin-buttom20">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'id'     => 'offers-form'
    ]); ?>

    <div class="row">
       <div class="col-md-3">
            <?= $form->field($model, 'destinationName') ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'destinationProvince') ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'destinationCity') ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'lengthOfStay') ?>
        </div>
    </div>
    
    <div class="row">
       <div class="col-md-3">
            <?= $form->field($model, 'minTripStartDate')->widget(DatePicker::classname(), [
                    //'options' => ['placeholder' => 'Enter birth date ...'],
                    'pluginOptions' => [
                        'autoclose'=>true,
                        'format' => 'yyyy-mm-dd'
                    ]
                ]);
            ?>
        </div>
       <div class="col-md-3">
            <?= $form->field($model, 'maxTripStartDate')->widget(DatePicker::classname(), [
                    'pluginOptions' => [
                        'autoclose'=>true,
                        'format' => 'yyyy-mm-dd'
                    ]
                ]);
            ?>
        </div>        
   </div>
   
    <div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'minStarRating')->dropDownList(
                    [1=>'1 Start or More', 2=>'2 Starts or More', 3=>'3 Starts or More', 4=>'4 Starts or More', 5=>'5 Starts'],
                    ['prompt' => 'Show All']
                );
            ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'minGuestRating')->dropDownList(
                    // [1=>1, 1.5=>1.5, 2=>2, 2.5=>2.5, 3=>3, 3.5=>3.5, 4=>4, 4.5=>4.5, 5=>5],
                    [1=>'1 Start or More', 2=>'2 Starts or More', 3=>'3 Starts or More', 4=>'4 Starts or More', 5=>'5 Starts'],
                    ['prompt' => 'Show All']
                );
            ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'minTotalRate') ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'maxTotalRate') ?>
        </div>
    </div>
   
    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Reset', ['index'], ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
