<?php
/**
 * Created by iKNSA.
 * Author: Khalid Sookia <khalidsookia@gmail.com>
 * Date: 08/12/16
 * Time: 13:50
 */

namespace Examples\Controller;

use Examples\Entity\User;
use Romenys\Framework\Components\DB\DB;
use Romenys\Framework\Controller\Controller;
use Romenys\Http\Request\Request;
use Romenys\Http\Response\JsonResponse;

class PdfController extends Controller
{
    public function newAction(Request $request)
    {
        $db = new DB();
        $db = $db->connect();

        $userData = $db->query("SELECT * FROM `user` WHERE `id` = " . 20)->fetch($db::FETCH_ASSOC);

        $user = new User($userData);

        $template =  $this->render(__DIR__ . '/../Resources/views/pdf/', 'pdf.twig', ["user" => $user]);

//        $this->getSnappy()->generateFromHtml($template, 'tmp/somefile6.pdf');

        header("Content-type:application/pdf");
        header("Content-Disposition:attachment;filename='downloaded.pdf'");

        readfile("tmp/somefile6.pdf");
    }
}
