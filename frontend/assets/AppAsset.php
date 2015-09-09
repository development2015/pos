<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

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
        //'css/site.css',

  
'http://fonts.googleapis.com/css?family=Oswald:400,300,700',
'http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all',
'metronic/admin/pages/css/login.css',

'metronic/global/plugins/font-awesome/css/font-awesome.min.css',
'metronic/global/plugins/simple-line-icons/simple-line-icons.min.css',
'metronic/global/plugins/bootstrap/css/bootstrap.min.css',
'metronic/global/plugins/uniform/css/uniform.default.css',
'metronic/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css',
'metronic/admin/pages/css/tasks.css',
'metronic/global/css/components-md.css',
'metronic/global/css/plugins.css',
'metronic/admin/layout6/css/layout.css',
'metronic/admin/layout6/css/custom.css',


    ];
    public $js = [
    'js/modal.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
