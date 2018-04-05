<?php
/**
 * Created by PhpStorm.
 * User: emilien
 * Date: 05/04/2018
 * Time: 11:20
 */

namespace App\Responder\Interfaces;


use Symfony\Component\Form\FormView;
use Symfony\Component\HttpFoundation\Response;

Interface HomeResponderInterface
{
    public function __invoke(FormView $formView):Response;
}