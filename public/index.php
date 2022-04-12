<?php declare(strict_types=1);
error_reporting(E_ALL);
ini_set("display_errors", 1);




require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../start/bootstrap.php';

use App\factory\AppFactory;


    
$app = AppFactory::create();

$container = $app::getContainer();
$container->get('Session')->start();




$app::run();



