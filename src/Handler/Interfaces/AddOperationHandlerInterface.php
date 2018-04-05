<?php
/**
 * Created by PhpStorm.
 * User: emilien
 * Date: 05/04/2018
 * Time: 13:05
 */


namespace App\Handler\Interfaces;

use App\Entity\Operation;
use Symfony\Component\Form\FormInterface;

Interface AddOperationHandlerInterface
{
    public function handle(FormInterface $form, Operation $operation):bool;

}