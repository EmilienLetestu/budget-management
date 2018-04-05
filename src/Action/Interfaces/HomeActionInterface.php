<?php
/**
 * Created by PhpStorm.
 * User: emilien
 * Date: 05/04/2018
 * Time: 11:15
 */



namespace App\Action\Interfaces;
use App\Responder\HomeResponder;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

Interface HomeActionInterface
{
    public function __invoke(Request $request, HomeResponder $responder):Response;
}