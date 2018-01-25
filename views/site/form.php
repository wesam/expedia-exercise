<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\Offers */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

// $this->title = 'Login';
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <!-- <p>Please fill out the following fields to login:</p> -->

    <?php $form = ActiveForm::begin([
        'id' => 'offers-form',
        //'layout' => 'horizontal',
        // 'fieldConfig' => [
            // 'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
            // 'labelOptions' => ['class' => 'col-lg-1 control-label'],
        // ],
    ]); ?>

        <?= $form->field($model, 'lengthOfStay')->textInput(['autofocus' => true]) ?>

        <?php //$form->field($model, 'password')->passwordInput() ?>

        <?php 
            //$form->field($model, 'rememberMe')->checkbox([
                //'template' => "<div class=\"col-lg-offset-1 col-lg-3\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
            //]) 
        ?>

        <div class="form-group">
            <!-- <div class="col-lg-offset-1 col-lg-11"> -->
                <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'offers-button']) ?>
            <!-- </div> -->
        </div>

    <?php ActiveForm::end(); ?>

    <!-- <div class="col-lg-offset-1" style="color:#999;">
        You may login with <strong>admin/admin</strong> or <strong>demo/demo</strong>.<br>
        To modify the username/password, please check out the code <code>app\models\User::$users</code>.
    </div> -->
</div>

<br /><br />