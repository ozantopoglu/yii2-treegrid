<?php

namespace ozantopoglu\widgets;

use yii\web\AssetBundle;

class TreeGridAsset extends AssetBundle
{
    public $sourcePath = '@bower/jquery-treegrid/';

    public $css = [
        'css/jquery.treegrid.css',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];

    public function init()
    {
        parent::init();

        $this->js = [
            'js/jquery.treegrid' . (YII_DEBUG ? '' : '.min') . '.js',
            'js/jquery.cookie.js',
        ];
    }

}
