<?php
/**
 * 主题 Adminlte2
 */

namespace app\themes\adminlte2;
use yii\web\AssetBundle;

/**
 * @author chuan xiong <xiongchuan86@gmail.com>
 */
class ThemeAsset extends AssetBundle
{

    const  name = 'adminlte2';
    const  themeId = 'adminlte2';

    public $sourcePath = '@app/themes/'.self::themeId.'/assets';
    public $css = [
        'css/openadm.css'
    ];
    public $js = [
    ];
    public $jsOptions = ['position' => \yii\web\View::POS_END];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'app\themes\adminlte2\AdminltePluginsAsset'
    ];
}
