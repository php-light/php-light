<?php
/**
 * Created by iKNSA.
 * Author: Khalid Sookia <khalidsookia@gmail.com>
 * Date: 29/11/16
 * Time: 14:05
 */

class AppKernel
{
}

$params = new \Romenys\Components\Parameters();
dump($params->getParameters());

$routes = new \Romenys\Router\Util\Router();
dump($routes->getFiles());
dump($routes->getRoutes());