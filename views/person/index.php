<?php

use yii\grid\GridView;
use yii\helpers\Url;

/**
 * @var $dataProvider
 */

?>


<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],
        'surname',
        'name',
        [
            'attribute' => 'key',
            'format' => 'raw',
            'label' => 'ссылка',
            'value' => function ($model, $key, $index, $column) {
                $url =  Url::to(['site/index', 'key' => $model['key']]);
                return "<a href='$url'>{$model['key']}</a>";
            },
        ],
    ],
]); ?>