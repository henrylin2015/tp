<?php
//begin start time
$GLOBALS[ '_beginTime' ] = microtime( TRUE );


//yourself version
const TP_VERSION = '0.1';

//文件后缀名
const EXT = '.class.php';

//定义系统常量
defined( 'TP_PATH' ) OR define( 'TP_PATH',__DIR__.'/' );

defined( 'APP_PATH' ) OR define( 'APP_PATH', dirname($_SERVER['SCRIPT_FILENAME']).'/');

t
echo APP_PATH;