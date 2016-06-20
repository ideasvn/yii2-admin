<?php
namespace ideasvn\admin;

use yii\web\AssetBundle;
/**
 * @author Nguyen Tuan Sieu <tuan@sieulog.com>
 * @since 1.0
 */
class AdminAssets extends AssetBundle
{
    public $sourcePath = __DIR__.'/assets';
    public $js = [
        'js/slimscroll/jquery.slimscroll.min.js',
        'js/beyond.js',
    ];
    public $css = [
        '//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300',
        'css/typicons.min.css',
        'css/animate.min.css',
        'css/beyond.css',
        'css/skins/deepblue.min.css'
    ];
    public $depends = [];
}