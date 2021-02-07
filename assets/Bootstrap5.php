<?php namespace app\assets;

use yii\web\AssetBundle;

/**
 * Class Bootstrap5
 * @package app\assets
 */
class Bootstrap5 extends AssetBundle
{
    public $sourcePath = '@app/node_modules/bootstrap/dist';

    public $css = [
        'css/bootstrap.css',
        'css/bootstrap.rtl.css',
        'css/bootstrap-grid.css',
        'css/bootstrap-grid.rtl.css',
        'css/bootstrap-reboot.css',
        'css/bootstrap-reboot.rtl.css',
        'css/bootstrap-utilities.css',
        'css/bootstrap-utilities.rtl.css',
    ];

    public $js = [
        'js/bootstrap.bundle.js',
        'js/bootstrap.esm.js',
        'js/bootstrap.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
    ];
}
