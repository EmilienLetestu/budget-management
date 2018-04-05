<?php
/**
 * Created by PhpStorm.
 * User: emilien
 * Date: 31/03/2018
 * Time: 19:48
 */



namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;

class PaymentType
{
    /**
     * @var
     */
    private $id;

    /**
     * @var
     */
    private $type;

    /**
     * @var ArrayCollection
     */
    private $operations;


    /**
     * @return PaymentType
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $type
     * @return PaymentType
     */
    public function setType(string $type):PaymentType
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return PaymentType
     */
    public function getType()
    {
        return $this->type;
    }


    /**
     * PaymentType constructor.
     */
    public function __construct()
    {
        $this->operations = new ArrayCollection();
    }

    /**
     * @param Operation $operation
     * @return $this
     */
    public function addOperation(Operation $operation)
    {
        $this->operations[] = $operation;

        return $this;
    }

    /**
     * @param Operation $operation
     */
    public function removeOperation(Operation $operation)
    {
        $this->operations->removeElement($operation);
    }
}
