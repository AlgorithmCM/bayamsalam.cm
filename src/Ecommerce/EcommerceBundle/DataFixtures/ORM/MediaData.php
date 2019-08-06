<?php

namespace Ecommerce\EcommerceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Ecommerce\EcommerceBundle\Entity\Media;

class MediaData extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {
        $media1 = new Media();
        $media1->setAlt('TV');
        $media1->setPath('http://devanclick.com/tv.png');
        $manager->persist($media1);

        $media2 = new Media();
        $media2->setAlt('Réfrigérateur');
        $media2->setPath('http://devanclick.com/refrigerateur.png');
        $manager->persist($media2);

        $media3 = new Media();
        $media3->setAlt('Cuisinière');
        $media3->setPath('http://devanclick.com/cuisiniere.png');
        $manager->persist($media3);

        $media4 = new Media();
        $media4->setAlt('Téléphone');
        $media4->setPath('http://devanclick.com/telephone.png');
        $manager->persist($media4);

        $media5 = new Media();
        $media5->setAlt('Veste');
        $media5->setPath('http://devanclick.com/veste.png');
        $manager->persist($media5);

        $media6 = new Media();
        $media6->setAlt('Boite à pharmacie');
        $media6->setPath('http://devanclick.com/boite-a-pharmacie.png');
        $manager->persist($media6);

        $media7 = new Media();
        $media7->setAlt('Pack de miel');
        $media7->setPath('http://devanclick.com/pack-de-miel.png');
        $manager->persist($media7);

        $media8 = new Media();
        $media8->setAlt('Père Riche, Père Pauvre');
        $media8->setPath('http://devanclick.com/pere-riche-pere-pauvre.png');
        $manager->persist($media8);

        $media9 = new Media();
        $media9->setAlt('Prenez le Pouvoir');
        $media9->setPath('http://devanclick.com/prenez-le-pouvoir.png');
        $manager->persist($media9);

        $manager->flush();

        $this->addReference('media1', $media1);
        $this->addReference('media2', $media2);
        $this->addReference('media3', $media3);
        $this->addReference('media4', $media4);
        $this->addReference('media5', $media5);
        $this->addReference('media6', $media6);
        $this->addReference('media7', $media7);
        $this->addReference('media8', $media8);
        $this->addReference('media9', $media9);
    }

    public function getOrder() {
        return 1;
    }

}
