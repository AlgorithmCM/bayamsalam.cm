<?php

namespace Ecommerce\EcommerceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Ecommerce\EcommerceBundle\Entity\UtilisateursAdresses;

class UtilisateursAdressesData extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {
        $adresse1 = new UtilisateursAdresses();
        $adresse1->setUtilisateur($this->getReference('utilisateur1'));
        $adresse1->setNom('Fotsing');
        $adresse1->setPrenom('Dieudonné');
        $adresse1->setTelephone('666666666');
        $adresse1->setAdresse('Village');
        $adresse1->setCp('5050');
        $adresse1->setPays('Cameroun');
        $adresse1->setVille('Douala');
        $adresse1->setComplement('En face de la Station Tradex');
        $manager->persist($adresse1);

        $adresse2 = new UtilisateursAdresses();
        $adresse2->setUtilisateur($this->getReference('utilisateur2'));
        $adresse2->setNom('Client');
        $adresse2->setPrenom('Fidèle');
        $adresse2->setTelephone('677777777');
        $adresse2->setAdresse('Akwa');
        $adresse2->setCp('6060');
        $adresse2->setPays('Cameroun');
        $adresse2->setVille('Douala');
        $adresse2->setComplement('A côté du Carrefour 2 églises');
        $manager->persist($adresse2);

        $adresse3 = new UtilisateursAdresses();
        $adresse3->setUtilisateur($this->getReference('utilisateur3'));
        $adresse3->setNom('Google');
        $adresse3->setPrenom('Cameroun');
        $adresse3->setTelephone('699999999');
        $adresse3->setAdresse('Bonabéri');
        $adresse3->setCp('7070');
        $adresse3->setPays('Cameroun');
        $adresse3->setVille('Douala');
        $adresse3->setComplement('Gare Routière');
        $manager->persist($adresse3);

        $manager->flush();
    }

    public function getOrder() {
        return 6;
    }

}
