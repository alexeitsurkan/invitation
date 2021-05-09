<?php namespace app\assets;

/**
 * Class SiteBundle
 * @package app\assets
 */
class SiteBundle extends AppAsset
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $css = [
        'css/index.css',
        'css/counter_block.css',
        'css/inviting.css'
    ];

    public $js = [
        'js/index.js'
    ];

    public $depends = [
        FullPage::class,
    ];
}
