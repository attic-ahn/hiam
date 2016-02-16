<?php

/*
 * This is AHnames realization of HIAM
 *
 * @link      https://github.com/ahnames/hiam
 * @package   hiam
 * @license   No license
 * @copyright Copyright (c) 2015-2016, AHnames (https://ahnames.com/)
 */

return array_merge(
    require(Yii::getAlias('@project/vendor/ahnames/yii2-asset-ahnames/src/config/params.php')),
    [
        'passwordResetPage' => 'https://ahnames.com/login/remind',
    ]
);
