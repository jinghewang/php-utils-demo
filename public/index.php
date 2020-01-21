<?php

ini_set("display_errors", "On");
error_reporting(E_ERROR);

date_default_timezone_set('Asia/Shanghai');
date_default_timezone_set('PRC');

//include_once('../lib/function.php');

define('ROOT_PATH', dirname(__DIR__));
define('RUN_ENV', 'web');//web task unit

require_once('../vendor/autoload.php');


var_dump(Woodw\Utils\Helpers\ArrayHelper::array_value_exists('123',['123','456']));



