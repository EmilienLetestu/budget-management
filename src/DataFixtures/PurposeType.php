<?php
/**
 * Created by PhpStorm.
 * User: emilien
 * Date: 02/04/2018
 * Time: 11:00
 */

namespace App\DataFixtures;


use App\Entity\Purpose;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class PurposeType extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $purposeList = [
            'loisirs',
            'tabac',
            'carburant',
            'course/alimentation'
        ];

        foreach ($purposeList as $value)
        {
            $purpose = new Purpose();
            $purpose->setType($value);
            $manager->persist($purpose);

        }

        $manager->flush();
    }
}
