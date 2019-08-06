<?php

namespace Ecommerce\EcommerceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Ecommerce\EcommerceBundle\Entity\Tva;

class TvaData extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {
        $tva = new Tva();
        $tva->setMultiplicate('0.8075');
        $tva->setNom('TVA');
        $tva->setValeur('19.25');
        $manager->persist($tva);

        $manager->flush();

        $this->addReference('tva', $tva);
    }

    public function getOrder() {
        return 3;
    }

}
