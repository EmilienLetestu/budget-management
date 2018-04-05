<?php
/**
 * Created by PhpStorm.
 * User: emilien
 * Date: 31/03/2018
 * Time: 19:25
 */


namespace App\Entity;


class Operation
{
    /**
     * @var
     */
    private $id;

    /**
     * @var
     */
    private $madeOn;

    /**
     * @var
     */
    private $amount;

    /**
     * @var
     */
    private $comment;

    /**
     * @var
     */
    private $paymentType;

    /**
     * @var
     */
    private $purpose;


    /** setters and getters */

    public function getId()
    {
        return $this->id;
    }

    /**
     * @param $madeOn
     * @return Operation
     */
    public function setMadeOn($madeOn):Operation
    {
        $this->madeOn = $madeOn;

        return $this;
    }

    /**
     * @return Operation
     */
    public function getMadeOn()
    {
        return $this->madeOn;
    }


    /**
     * @param int $amount
     * @return Operation
     */
    public function setAmount(int $amount):Operation
    {
        $this->amount = $amount;

        return $this;
    }


    /**
     * @return mixed
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param string $comment
     * @return Operation
     */
    public function setComment(string $comment):Operation
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getComment()
    {
        return $this->comment;
    }


    /**
     * @return PaymentType
     */
    public function getPaymentType()
    {
        return $this->paymentType;
    }

    /**
     * @param PaymentType $paymentType
     * @return Operation
     */
    public function setPaymentType(PaymentType $paymentType):Operation
    {
        $this->paymentType = $paymentType;

        return $this;
    }

    /**
     * @return Purpose
     */
    public function getPurpose()
    {
        return $this->purpose;
    }

    /**
     * @param Purpose $purpose
     * @return Operation
     */
    public function setPurpose(Purpose $purpose):Operation
    {
        $this->purpose = $purpose;

        return $this;
    }


}