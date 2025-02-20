<?php

declare(strict_types = 1);

use CloudCastle\Core\Api\Common\Config\Config;
use CloudCastle\Core\Api\Common\Config\Env;
use CloudCastle\Core\Api\Common\Lang\Lang;
use CloudCastle\Core\Api\Common\Log\Log;
use CloudCastle\Core\Api\Exceptions\ErrorException;

error_reporting(E_ALL);

define("ROOT_PATH", dirname(__DIR__, 1));
require_once ROOT_PATH . "/vendor/autoload.php";
define('SAPI', sapi_name());

set_error_handler(/**
 * @throws ErrorException
 */ callback : function (int $code, string $message, string $file, int $line){
    throw new ErrorException($code, $message, $file, $line);
});

Env::init(ROOT_PATH . DIRECTORY_SEPARATOR . '.env');
$config = Config::init(ROOT_PATH . DIRECTORY_SEPARATOR . 'config');
date_default_timezone_set($config->app->timezone ?? 'Europe/Moscow');
Log::config((array) $config->logger);
Lang::init(ROOT_PATH . DIRECTORY_SEPARATOR . 'resources' . DIRECTORY_SEPARATOR . 'lang' . DIRECTORY_SEPARATOR . $config->app->lang);
header('Content-type: ' . content_type());