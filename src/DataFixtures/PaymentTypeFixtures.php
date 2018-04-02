<?php
/**
 * Created by PhpStorm.
 * User: emilien
 * Date: 02/04/2018
 * Time: 10:00
 */
namespace App\DataFixtures;


use App\Entity\PaymentType;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class PaymentTypeFixtures extends Fixture
{

    /**
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $typeList = [
            'liquide',
            'cb',
            'chèque'
        ];

        foreach ($typeList as $value)
        {

            $payment = new PaymentType();
            $payment->setType($value);
            $manager->persist($payment);

        }

        $manager->flush();
    }
}
