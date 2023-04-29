<?php
error_reporting(0);

require_once(dirname(__FILE__, 2) . '/src/config/config.php');

$uri = urldecode(parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH));

if($uri === '/' or $uri === '' or $uri === '/index.php') {
    $uri = '/day_records.php';
}
require(CONTROLLER_PATH . "/{$uri}");

