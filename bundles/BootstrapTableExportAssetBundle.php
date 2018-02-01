<?php

namespace itexia\bootstraptable\bundles;


use yii\web\AssetBundle;

/**
 * Class BootstrapTableExportAssetBundle
 *
 * @package itexia\bootstraptable\bundles
 */
class BootstrapTableExportAssetBundle extends AssetBundle
{

    /**
     * @var string
     */
    public $sourcePath = '@vendor/kayalshri/tableExport.jquery.plugin';

    /**
     * @var array js assets
     */
    public $js = [
      'tableExport.js',
      'jquery.base64.js',
      'html2canvas.js',
    ];

    /**
     * @var array
     */
    public $depends = [
      'dlds\metronic\bundles\CoreAsset',
    ];
}