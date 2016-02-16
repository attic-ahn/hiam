<?php

/*
 * AHnames HIAM
 *
 * @link      https://ahnames.com/
 * @package   hiam
 * @license   No license
 * @copyright Copyright (c) 2015, AHnames (https://ahnames.com/)
 */

return array_merge(
    require(Yii::getAlias('@project/vendor/ahnames/yii2-asset-ahnames/src/config/params.php')),
    [
        'passwordResetPage' => 'https://ahnames.com/login/remind',
    ]
);
