<?php
/**
 * @link http://www.tintsoft.com/
 * @copyright Copyright (c) 2012 TintSoft Technology Co. Ltd.
 * @license http://www.tintsoft.com/license/
 */
namespace xutl\echarts;

use yii\web\AssetBundle;

/**
 * Class EchartsAsset
 * @package xutl\echarts
 */
class EchartsAsset extends AssetBundle
{
    public $sourcePath = '@vendor/xutl/yii2-echarts-widget/assets';

    public $js = [
        'echarts-all.js',
    ];
}