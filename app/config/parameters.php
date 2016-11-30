<?php
/**
 * Created by iKNSA.
 * Author: Khalid Sookia <khalidsookia@gmail.com>
 * Date: 28/11/16
 * Time: 18:28
 */

use Bnpparibas\Helpers\GetEnvironmentByHostName;

// Environment check
$environment = new GetEnvironmentByHostName;
$environment = strtolower($environment->getEnv());

include_once "parameters/parameters.php";

if (file_exists(__DIR__ . "/parameters/" . $environment .".php"))
    include_once __DIR__ . "/parameters/" . $environment .".php";

if (isset($$environment)) $globalParameters = array_merge($parameters, $$environment);
else $globalParameters = $parameters;

$router = new Bnpparibas\Router\Util\GetRoutingFiles();
dump($router->getFiles());
dump($router->getRoutes());