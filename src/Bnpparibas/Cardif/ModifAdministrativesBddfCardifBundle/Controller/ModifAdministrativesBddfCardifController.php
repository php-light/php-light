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

class ModifAdministrativesBddfCardifController extends Controller
{
    private $urlGenerator;

    public function __construct()
    {
    }

    public function homepageAction($request)
    {
        $this->urlGenerator = new UrlGenerator($request);
        dump($request);
        dump($this->urlGenerator->relative("homepage"));
        dump($this->urlGenerator->absolute("form"));
    }
}