<?php
/**
 * Created by iKNSA.
 * Author: Khalid Sookia <khalidsookia@gmail.com>
 * Date: 28/11/16
 * Time: 18:28
 */

require 'vendor/autoload.php';

require_once "app/AppKernel.php";
use Romenys\app\AppKernel;


if (!session_start()) throw new RuntimeException("We were unable to start a session", 403);

$app = new AppKernel($_GET, $_POST, $_COOKIE, $_FILES, $_ENV, $_SESSION, $_SERVER);

dump($app->getRequest());