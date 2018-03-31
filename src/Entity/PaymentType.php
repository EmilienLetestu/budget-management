<?php
/**
 * Created by PhpStorm.
 * User: emilien
 * Date: 31/03/2018
 * Time: 19:48
 */

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
     * @return mixed
     */
    public function getId():PaymentType
    {
        return $this->id;
    }

    /**
     * @param mixed $type
     */
    public function setType(string $type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getType():PaymentType
    {
        return $this->type;
    }
}
