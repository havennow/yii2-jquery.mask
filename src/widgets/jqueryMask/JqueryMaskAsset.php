<?php

namespace havennow\widgets;

use yii\web\AssetBundle;

class JqueryMaskAsset extends AssetBundle {

    public $sourcePath = '@vendor/igorescobar/jquery-mask-plugin/dist';
    public $css = [];
    public $js = ['jquery.mask.min.js'];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
