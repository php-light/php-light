<?php

namespace AcmeBundle\Controller;

use PhpLight\Framework\Controller\Controller;
use PhpLight\Http\Request\Request;
use PhpLight\Http\Response\JsonResponse;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
         return new JsonResponse([
             [
                 "name" => "Khalid",
                 "age" => 25
             ],
             [
                 "name" => "Moussa",
                 "age" => 30
             ],
             [
                 "name" => "Abdou",
                 "age" => 50
             ]
         ]);
    }
}
