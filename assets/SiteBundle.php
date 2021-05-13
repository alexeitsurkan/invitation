<?php namespace app\assets;

use yii\web\AssetBundle;

/**
 * Class SiteBundle
 * @package app\assets
 */
class SiteBundle extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $css = [
        'css/site.css',
        'css/index.css',
        'css/counter_block.css',
        'css/inviting.css',
        'css/info.css',
        'css/plan.css',
    ];

    public $js = [
        'js/index.js'
    ];

    public $depends = [
        AppAsset::class,
        FullPage::class,
    ];
}
