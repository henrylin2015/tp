<?php
//文件入口
ini_set("display_errors", "On");
error_reporting(E_ALL | E_STRICT);

//verify version php
if( version_compare( PHP_VERSION,'5.3.0','<' ) ) die( 'require PHP > 5.3.0!' );

//引入框架入口文件
require './Code/Tp.php';