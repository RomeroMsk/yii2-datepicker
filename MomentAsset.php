<?php
/**
 * @copyright Copyright (c) 2015 Roman Ovchinnikov
 * @link https://github.com/RomeroMsk
 * @version 1.0.0
 */
namespace nex\datepicker;

use yii\web\AssetBundle;

/**
 * Moment.js asset
 *
 * @author Roman Ovchinnikov <nex.software@gmail.com>
 * @link https://github.com/RomeroMsk/yii2-datepicker
 */
class MomentAsset extends AssetBundle
{
    public $sourcePath = '@bower/moment';

    public function init() {
        if (YII_DEBUG) {
            $this->js[] = 'min/moment-with-locales.js';
        } else {
            $this->js[] = 'min/moment-with-locales.min.js';
        }
    }
}
