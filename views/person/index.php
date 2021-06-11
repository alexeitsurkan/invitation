<?php

use yii\grid\GridView;
use yii\helpers\Url;

/**
 * @var $dataProvider
 * @var $count
 */

?>


<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],
        'surname',
        'name',
        [
            'attribute' => 'status',
            'format' => 'raw',
            'label' => 'ссылка',
            'value' => function ($model, $key, $index, $column) {
                switch ($model['status']){
                    case null: return '<span class="text-warning">хз</span>';
                    case 1: return '<span class="text-success">принято</span>';
                    case 2: return '<span class="text-danger">отказались</span>';
                }
            }
        ],
        [
            'attribute' => 'key',
            'format' => 'raw',
            'label' => 'ссылка',
            'value' => function ($model, $key, $index, $column) {
                $url =  Url::to(['/', 'key' => $model['key']]);
                return "<a href='$url'>{$model['key']}</a>";
            },
        ],
    ],
]); ?>
<br>
<br>
<div>Прияняло приглашение: <?=$count?></div>
