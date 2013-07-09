<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
set_time_limit(60);
ini_set('memory_limit', '128M');
define('DEAFULT_TIMEZONE', 'America/New_York');
date_default_timezone_set(DEAFULT_TIMEZONE);

$root = __DIR__ . "/../..";

$vendorAutoload = $root . DIRECTORY_SEPARATOR . 'vendor/autoload.php';
if (file_exists($vendorAutoload)) {
    $loader = include $vendorAutoload;
}

$src = $root . DIRECTORY_SEPARATOR . 'src';
$path = array(
    $root, $src
);
set_include_path(implode(PATH_SEPARATOR, $path) . PATH_SEPARATOR . get_include_path());

unset($root, $src);
