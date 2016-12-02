<?php
/**
 * Created by iKNSA.
 * Author: Khalid Sookia <khalidsookia@gmail.com>
 * Date: 29/11/16
 * Time: 23:32
 */

namespace Bnpparibas\Cardif\ModifAdministrativesBddfCardifBundle\Controller;


use Romenys\Framework\Components\UrlGenerator;
use Romenys\Framework\Controller\Controller;
use Romenys\Http\Request\Request;
use Romenys\Http\Response\JsonResponse;

class ModifAdministrativesBddfCardifController extends Controller
{
    private $urlGenerator;

    public function __construct()
    {
    }

    public function homepageAction(Request $request)
    {
        $this->urlGenerator = new UrlGenerator($request);

        return new JsonResponse(['form' => $this->urlGenerator->absolute("form")], [JSON_UNESCAPED_SLASHES]);
    }

    public function formAction(Request $request)
    {
        return new JsonResponse([
            'post' => $request->getPost(),
            'get' => $request->getGet(),
            'session' => $request->getSession()
        ]);
    }

    public function defaultAction(Request $request)
    {
        $this->urlGenerator = new UrlGenerator($request);

        return new JsonResponse(['form' => $request->getGet()]);
    }
}