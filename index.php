<?php
require_once 'lib/parameters.php';
require_once 'lib/dictionary.php';
$config = require_once('lib/config.php');

$route = $_SERVER['PATH_INFO'];

switch ($route) {
    case '/':
    case '':
        include_once 'pages/landing.php';
        break;
    case '/thank-you':
    case '/thank-you/':
        include_once 'pages/thanks.php';
        break;
    default:
        http_response_code(404);
}
?>
