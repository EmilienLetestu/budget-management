<?php
/**
 * Created by PhpStorm.
 * User: emilien
 * Date: 01/04/2018
 * Time: 02:54
 */


namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;

class Purpose
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
     * @return mixed
     */
    public function getId():Purpose
    {
        return $this->id;
    }

    /**
     * @param string $type
     * @return Purpose
     */
    public function setType(string $type):Purpose
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return Purpose
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Purpose constructor.
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