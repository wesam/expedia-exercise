<?php

/* @var $this yii\web\View */

use yii\widgets\ListView;

$this->title = Yii::$app->name;
?>

<h3>Always we have deals!, Just Book!</h3>

<?php echo $this->render('_search', ['model' => $searchModel]); ?>
    
<div class="row">
    <div class="col-sm-12 col-sm-offest-1">
        <?= ListView::widget([
            'options' => [
                'tag' => 'div',
            ],
            'dataProvider' => $dataProvider,
            'itemView' => function ($model, $key, $index, $widget) {
                $itemContent = $this->render('_list_hotel',['model' => $model]);
    
                return $itemContent;
            },
            'itemOptions' => [
                'tag' => false,
            ],
            'summary' => '',
            
            /* do not display {summary} */
            'layout' => '{items} {pager}',
    
            'pager' => [
                'firstPageLabel' => 'First',
                'lastPageLabel' => 'Last',
                'maxButtonCount' => 4,
                'options' => [
                    'class' => 'pagination col-xs-12'
                ]
            ],
    
        ]);
        ?>
    </div>
</div>

