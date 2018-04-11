<?php
/**
 * Created by PhpStorm.
 * User: emilien
 * Date: 05/04/2018
 * Time: 13:10
 */


namespace App\Handler;

use App\Entity\Operation;
use App\Handler\Interfaces\EditOperationHandlerInterface;
use Symfony\Component\Form\FormInterface;

class EditOperationHandler implements EditOperationHandlerInterface
{

    public function handle(FormInterface $form, Operation $operation):bool
    {
        if($form->isSubmitted() && $form->isValid()){

            return true;
        }

        return false;
    }
}