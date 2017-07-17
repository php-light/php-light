<?php
/**
 * Created by iKNSA.
 * Author: Khalid Sookia <khalidsookia@gmail.com>
 * Date: 29/11/16
 * Time: 14:05
 */

namespace PhpLight\app;

use PhpLight\Framework\Components\HandleRequest;

class AppKernel
{
    public function __construct()
    {
        if (!session_start()) throw new \RuntimeException("We were unable to start a session", 403);

        // Hack for Angular POST as PHP does not desirialize json natively
        if (!empty(file_get_contents('php://input')) && json_decode(file_get_contents('php://input'), true)) {
            $_POST = json_decode(file_get_contents('php://input'), true);
        }

        $request = new HandleRequest($_GET, $_POST, $_COOKIE, $_FILES, $_ENV, $_SESSION, $_SERVER);
        $request->handleRequest();
    }
}
