<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class CovidAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        //'css/site.css',
        'css/bootstrap.min.css',
        'css/font-awesome.min.css',
        'css/animate.min.css', 
        'css/lightbox.css', 
        'css/main.css',
        'css/responsive.css',
        'covidcss/main.css'
    ];
    public $js = [
        //'js/jquery.js',
        'js/bootstrap.min.js',
        'js/lightbox.min.js',
        'js/wow.min.js',
        'js/jquery.countTo.js',
        'js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
