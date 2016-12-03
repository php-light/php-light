<?php
/**
 * Created by iKNSA.
 * Author: Khalid Sookia <khalidsookia@gmail.com>
 * Date: 04/12/16
 * Time: 00:08
 */

namespace Examples\Controller;

use Bnpparibas\Cardif\ModifAdministrativesBddfCardifBundle\Entity\User;
use Romenys\Framework\Components\DB\DB;
use Romenys\Framework\Components\UrlGenerator;
use Romenys\Framework\Controller\Controller;
use Romenys\Http\Request\Request;
use Romenys\Http\Response\JsonResponse;

class ExamplesController extends Controller
{
    public function listAction()
    {
        $db = new DB();
        $db = $db->get();

        $request = $db->query("SELECT * FROM `user`");
        $users = $request->fetchAll($db::FETCH_ASSOC);

        return new JsonResponse(["users" => $users]);
    }

    public function newAction(Request $request)
    {
        $user = new User($request->getPost());

        $db = new DB();
        $db = $db->get();
        $db->exec("INSERT INTO `modifcardif`.`user` (name, email) VALUES ($user->getName(), $user->getEmail())");

        return new JsonResponse([
            "user" => [
                "name" => $user->getName(),
                "email" => $user->getEmail()
            ]
        ]);
    }

    public function formAction(Request $request)
    {
        $request->uploadFiles();

        return new JsonResponse([
            'uploadedFiles' => $request->getUploadedFiles(),
            'post' => $request->getPost(),
            'get' => $request->getGet(),
            'file' => $request->getOneFile('user', 'avatar'),
            'files' => $request->getFiles(),
            'session' => $request->getSession()
        ]);
    }

    public function defaultAction(Request $request)
    {
        $urlGenerator = new UrlGenerator($request);

        return new JsonResponse(['form' => $urlGenerator->absolute("form")], [JSON_UNESCAPED_SLASHES]);
    }
}