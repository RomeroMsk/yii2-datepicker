<?php
/**
 * @copyright Copyright (c) 2015 Roman Ovchinnikov
 * @link https://github.com/RomeroMsk
 * @version 1.0.0
 */
namespace nex\datepicker;

use yii\web\AssetBundle;

/**
 * DatePickerAsset
 *
 * @author Roman Ovchinnikov <nex.software@gmail.com>
 * @link https://github.com/RomeroMsk/yii2-datepicker
 */
class DatePickerAsset extends AssetBundle
{
    public $sourcePath = '@bower';

    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset'
    ];

    public function init() {
        if (YII_DEBUG) {
            $this->css[] = 'eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css';
            $this->js[] = 'moment/min/moment-with-locales.js';
            $this->js[] = 'eonasdan-bootstrap-datetimepicker/src/js/bootstrap-datetimepicker.js';
        } else {
            $this->css[] = 'eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css';
            $this->js[] = 'moment/min/moment-with-locales.min.js';
            $this->js[] = 'eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js';
        }
    }
}
