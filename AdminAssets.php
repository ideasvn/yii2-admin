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
    public $js = [];
    public $css = [
        'css/ionicons.min.css',
    ];
    public $depends = [];
}