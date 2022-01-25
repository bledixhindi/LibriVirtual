<?php
date_default_timezone_set('Asia/Shanghai');

define('DEBUG_MODE', false);

define('SALT', 'AuthorIsLinCanbin');
define('PREFIX', 'carbon_');
define('InternalAccess', true);

define('ForumLanguage', 'en');
define('EnableMemcache', false);
define('MemCacheHost', 'localhost');
define('MemCachePort', 11211);
define('MemCachePrefix', 'carbon_');
//Database
define('DBHost', 'localhost');
define('DBPort', '3306');
define('DBName', 'librivir_2021');
define('DBUser', 'librivir_bledi');
define('DBPassword', 'xhindi2020');
define('SearchServer', '');
define('SearchPort', '');

define('LanguagePath', __DIR__ . '/language/' . ForumLanguage . '/');
define('LibraryPath', __DIR__ . '/library/');
define('ServicePath', __DIR__ . '/service/');


$APISignature = array();
$APISignature['12450'] = 'b40484df0ad979d8ba7708d24c301c38';

if (DEBUG_MODE) {
	error_reporting(E_ALL); 
	ini_set('display_errors', 'On');
} else {
	ini_set('display_errors', 'Off');
}