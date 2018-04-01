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

    public function getId():Operation
    {
        return $this->id;
    }

    /**
     * @param mixed $madeOn
     */
    public function setMadeOn(\DateTime $madeOn)
    {
        $this->madeOn = $madeOn;
    }

    /**
     * @return Operation
     */
    public function getMadeOn(): Operation
    {
        return $this->madeOn;
    }


    /**
     * @param $amount
     */
    public function setAmount(int $amount)
    {
        $this->amount = $amount;
    }


    /**
     * @return mixed
     */
    public function getAmount(): Operation
    {
        return $this->amount;
    }

    /**
     * @param mixed $comment
     */
    public function setComment(string $comment)
    {
        $this->comment = $comment;
    }

    /**
     * @return mixed
     */
    public function getComment(): Operation
    {
        return $this->comment;
    }


    /**
     * @return PaymentType
     */
    public function getPaymentType(): PaymentType
    {
        return $this->paymentType;
    }

    /**
     * @param PaymentType $paymentType
     */
    public function setPaymentType(PaymentType $paymentType)
    {
        $this->paymentType = $paymentType;
    }

    /**
     * @return Purpose
     */
    public function getPurpose(): Purpose
    {
        return $this->purpose;
    }

    /**
     * @param Purpose $purpose
     */
    public function setPurpose(Purpose $purpose)
    {
        $this->purpose = $purpose;
    }


}