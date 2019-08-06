<?php

namespace Ecommerce\EcommerceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Ecommerce\EcommerceBundle\Entity\Categories;

class CategoriesData extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {

        $categorie1 = new Categories();
        $categorie1->setNom('Electronique');
        $categorie1->setImage($this->getReference('media1'));
        $manager->persist($categorie1);

        $categorie2 = new Categories();
        $categorie2->setNom('Electroménager');
        $categorie2->setImage($this->getReference('media2'));
        $manager->persist($categorie2);

        $categorie3 = new Categories();
        $categorie3->setNom('Ustensile de Cuisine');
        $categorie3->setImage($this->getReference('media3'));
        $manager->persist($categorie3);

        $categorie4 = new Categories();
        $categorie4->setNom('Informatique');
        $categorie4->setImage($this->getReference('media4'));
        $manager->persist($categorie4);

        $categorie5 = new Categories();
        $categorie5->setNom('Habillement');
        $categorie5->setImage($this->getReference('media5'));
        $manager->persist($categorie5);

        $categorie6 = new Categories();
        $categorie6->setNom('Pharmacie');
        $categorie6->setImage($this->getReference('media6'));
        $manager->persist($categorie6);

        $categorie7 = new Categories();
        $categorie7->setNom('Produits Locaux');
        $categorie7->setImage($this->getReference('media7'));
        $manager->persist($categorie7);

        $categorie8 = new Categories();
        $categorie8->setNom('Librairie du monde');
        $categorie8->setImage($this->getReference('media8'));
        $manager->persist($categorie8);

        $categorie9 = new Categories();
        $categorie9->setNom('Librairie du Cameroun');
        $categorie9->setImage($this->getReference('media9'));
        $manager->persist($categorie9);

        $manager->flush();

        $this->addReference('categorie1', $categorie1);
        $this->addReference('categorie2', $categorie2);
        $this->addReference('categorie3', $categorie3);
        $this->addReference('categorie4', $categorie4);
        $this->addReference('categorie5', $categorie5);
        $this->addReference('categorie6', $categorie6);
        $this->addReference('categorie7', $categorie7);
        $this->addReference('categorie8', $categorie8);
        $this->addReference('categorie9', $categorie9);
    }

    public function getOrder() {
        return 2;
    }

}
