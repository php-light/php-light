<?php
/**
 * Created by iKNSA.
 * Author: Khalid Sookia <khalidsookia@gmail.com>
 * Date: 29/11/16
 * Time: 14:05
 */

namespace Romenys\app;

use Romenys\Http\Request\Request;

class AppKernel
{
    private $request;

    public function __construct($get, $post, $cookie, $files, $env, $session, $server)
    {
        $this->request = new Request($get, $post, $cookie, $files, $env, $session, $server);
    }

    public function getRequest()
    {
        return $this->request;
    }
}
