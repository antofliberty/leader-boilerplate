<?php

namespace App;

use Leader\Utils\Router;

define('ROOT_DIR', dirname(__DIR__));


//require '../autoload.php';
require '../vendor/autoload.php';
//require '../settings.php';


session_start();

$router = new Router([
    "index" => ["GET"],
    "example" => ["GET"]
], __NAMESPACE__);
$router->run();
