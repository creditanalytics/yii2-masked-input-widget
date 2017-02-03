<?php

namespace creditanalytics\widgets\masked;

use yii\web\AssetBundle;

/**
 * DaData Suggestions Asset AssetBundle
 */
class JqueryMaskedInputAsset extends AssetBundle
{
    public $sourcePath = '@vendor/igorescobar/jquery-mask-plugin/dist';

    public $js = [
        'jquery.mask.min.js'
    ];
}
