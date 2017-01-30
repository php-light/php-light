<?php

namespace PropertiesBundle\Controller;

use PropertiesBundle\Entity\House;
use Romenys\Framework\Controller\Controller;
use PropertiesBundle\Repository\HouseRepository;
use Romenys\Http\Request\Request;
use Romenys\Http\Response\JsonResponse;

/**
* House controller
*/
class HouseController extends Controller
{
    public function newAction(Request $request)
    {
        $houseRepository = new HouseRepository();
        if ($request->getMethod() === $request::REQUEST_METHOD_POST) {
            $houseData = $request->getPost()["house"];
            $house = new House($houseData);

            if ($houseRepository->create($house)) {
                return new JsonResponse([
                    "success" => true,
                    "message" => "La maison a bien été ajouté",
                    "house" => $house->toArray()
                ]);
            } else {
                return new JsonResponse([
                    "success" => false,
                    "message" => "Erreur. La maison n'a pu être ajouter. Vérifier vos droits d'accès ou contacter le support"
                ]);
            }
        }

        return new JsonResponse([
            "success" => true,
            "message" => "Affichage du formulaire"
        ]);
    }
}