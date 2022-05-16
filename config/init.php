<?php /** @noinspection ALL */

define("DEBUG", 1); //режим разработчика
//define("DEBUG", 0); //режим продакшена

define("ROOT", dirname(__DIR__));
define("WWW", ROOT . '/public');
define("APP", ROOT . '/app');
define("CORE", ROOT . '/vendor/vet-grad/core');
define("LIBS", ROOT . '/vendor/vet-grad/core/libs');
define("CACHE", ROOT . '/tmp/cache');
define("CONF", ROOT . '/config');
define("LAYOUT", 'default');

//http://vet-grad39.ru/public/index.php
$app_path = "http://{$_SERVER['HTTP_HOST']}{$_SERVER['PHP_SELF']}";
//http://vet-grad39.ru/public/
$app_path = preg_replace("#[^/]+$#", '', $app_path);
//http://vet-grad39.ru
$app_path = str_replace('/public/', '', $app_path);

define("PATH", $app_path);
define("ADMIN", PATH . '/admin');

require_once ROOT . "/vendor/autoload.php";
