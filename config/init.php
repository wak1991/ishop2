<?php

// константа продакшн-0 / разработка-1
define("DEBUG", 1);
// корень сайта
define("ROOT", dirname(__DIR__));
// публичная папка
define("WWW", ROOT . '/public');
// папка приложения
define("APP", ROOT . '/app');
// папка ядра приложения
define("CORE", ROOT . '/vendor/ishop/core');
// папка библиотек
define("LIBS", ROOT . '/vendor/ishop/core/libs');
// папка кэша
define("CACHE", ROOT . '/tmp/cache');
// папка конфигураций
define("CONF", ROOT . '/config');
// шаблон сайта по умолчанию
define("LAYOUT", 'default');
// http://ishop2/public/index.php
$app_path = "http://{$_SERVER['HTTP_HOST']}{$_SERVER['PHP_SELF']}";
// http://ishop2/public/
$app_path = preg_replace("#[^/]+$#", '', $app_path);
// http://ishop2
$app_path = str_replace('/public/', '', $app_path);
// главная страница
define("PATH", $app_path);
// админка сайта
define("ADMIN", PATH . '/admin');

// подключение автозагрузчика composer
require_once ROOT . '/vendor/autoload.php';