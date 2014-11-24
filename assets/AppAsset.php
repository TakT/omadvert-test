<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'assets/css/site.css',
        'assets/css/template.css',
        'assets/js/nouislider/jquery.nouislider.min.css'
    ];
    public $js = [
        '//ajax.googleapis.com/ajax/libs/angularjs/1.3.2/angular.min.js',
        '//ajax.googleapis.com/ajax/libs/angularjs/1.3.2/angular-sanitize.min.js',

        'assets/js/jquery.inputmask.min.js',
        'assets/js/nouislider/jquery.nouislider.min.js',
        'assets/js/nouislider/nouislider.min.js',

        'assets/js/app.js',

        'assets/js/directives/select-calendar.js',
        'assets/js/directives/input-mask.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
