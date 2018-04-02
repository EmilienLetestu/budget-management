<?php
/**
 * Created by PhpStorm.
 * User: emilien
 * Date: 31/03/2018
 * Time: 18:48
 */
namespace App\Action;



use App\Responder\HomeResponder;
use Symfony\Component\Routing\Annotation\Route;

class HomeAction
{
    /**
     *
     * @Route("/", name="home")
     *
     * @param HomeResponder $responder
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function __invoke(HomeResponder $responder)
    {
        return $responder();
    }
}