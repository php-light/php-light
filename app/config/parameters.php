<?php
/**
 * Created by iKNSA.
 * Author: Khalid Sookia <khalidsookia@gmail.com>
 * Date: 28/11/16
 * Time: 18:28
 */

use Bnp\Helpers\GetEnvironmentByHostName;

// Environment check
$environment = new GetEnvironmentByHostName;
$environment = $environment->getEnv();