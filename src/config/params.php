<?php

/*
 * HIAM for AHnames
 *
 * @link      https://github.com/ahnames/hiam
 * @package   hiam
 * @license   proprietary
 * @copyright Copyright (c) 2015-2016, AHnames (https://ahnames.com/)
 */

return array_merge(
    require(Yii::getAlias('@vendor/ahnames/yii2-asset-ahnames/src/config/params.php')),
    [
        'passwordResetPage' => 'https://ahnames.com/login/remind',
        'signupPage'        => 'https://ahnames.com/registration',
    ]
);