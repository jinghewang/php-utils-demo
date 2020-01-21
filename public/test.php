<?php

use Woodw\Utils\Helpers\ArrayHelper;
use Woodw\Utils\Helpers\StringHelper;

require_once "index.php";

var_dump(ArrayHelper::array_value_exists('123',['123','456']));
var_dump(StringHelper::hello('wjh'));


