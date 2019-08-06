<?php

namespace Ecommerce\EcommerceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Ecommerce\EcommerceBundle\Entity\Produits;

class ProduitsData extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {
        $produit1 = new Produits();
        $produit1->setCategorie($this->getReference('categorie1'));
        $produit1->setDescription('Télévision HD, Marque Samsung, 32 pouces');
        $produit1->setDisponible('1');
        $produit1->setImage($this->getReference('media1'));
        $produit1->setNom('TV');
        $produit1->setPrix('56525');
        $produit1->setTva($this->getReference('tva'));
        $manager->persist($produit1);

        $produit2 = new Produits();
        $produit2->setCategorie($this->getReference('categorie2'));
        $produit2->setDescription('Réfrigérateur 2 portes, Marque Bosch, Capacité : 250 Litres');
        $produit2->setDisponible('1');
        $produit2->setImage($this->getReference('media2'));
        $produit2->setNom('Réfrigérateur');
        $produit2->setPrix('161500');
        $produit2->setTva($this->getReference('tva'));
        $manager->persist($produit2);

        $produit3 = new Produits();
        $produit3->setCategorie($this->getReference('categorie3'));
        $produit3->setDescription('Cuisinière à Gaz 4 foyers + Four');
        $produit3->setDisponible('1');
        $produit3->setImage($this->getReference('media3'));
        $produit3->setNom('Cuisinière');
        $produit3->setPrix('121125');
        $produit3->setTva($this->getReference('tva'));
        $manager->persist($produit3);

        $produit4 = new Produits();
        $produit4->setCategorie($this->getReference('categorie4'));
        $produit4->setDescription('Téléphonne Infinix X512, 32Go ROM, 3Go RAM');
        $produit4->setDisponible('1');
        $produit4->setImage($this->getReference('media4'));
        $produit4->setNom('Téléphone');
        $produit4->setPrix('84787.5');
        $produit4->setTva($this->getReference('tva'));
        $manager->persist($produit4);

        $produit5 = new Produits();
        $produit5->setCategorie($this->getReference('categorie5'));
        $produit5->setDescription('Ensemble Veste Homme + Cravate, Taille 32, Couleur Bleu-nuit');
        $produit5->setDisponible('1');
        $produit5->setImage($this->getReference('media5'));
        $produit5->setNom('Veste');
        $produit5->setPrix('17765');
        $produit5->setTva($this->getReference('tva'));
        $manager->persist($produit5);

        $produit6 = new Produits();
        $produit6->setCategorie($this->getReference('categorie6'));
        $produit6->setDescription('Boite à pharmacie complète pour Premiers Secours. Idéal aussi bien en Voiture qu\'en Avion');
        $produit6->setDisponible('1');
        $produit6->setImage($this->getReference('media6'));
        $produit6->setNom('Boite à pharmacie');
        $produit6->setPrix('40375');
        $produit6->setTva($this->getReference('tva'));
        $manager->persist($produit6);

        $produit7 = new Produits();
        $produit7->setCategorie($this->getReference('categorie7'));
        $produit7->setDescription('Pack de 10 litres de miel du Nord, contenant encore les abeilles');
        $produit7->setDisponible('1');
        $produit7->setImage($this->getReference('media7'));
        $produit7->setNom('Pack de miel');
        $produit7->setPrix('20187.5');
        $produit7->setTva($this->getReference('tva'));
        $manager->persist($produit7);

        $produit8 = new Produits();
        $produit8->setCategorie($this->getReference('categorie8'));
        $produit8->setDescription('Père Riche, Père Pauvre, le Best-Seller de Robert Kiyosaki');
        $produit8->setDisponible('1');
        $produit8->setImage($this->getReference('media8'));
        $produit8->setNom('Père Riche, Père Pauvre');
        $produit8->setPrix('2018.75');
        $produit8->setTva($this->getReference('tva'));
        $manager->persist($produit8);

        $produit9 = new Produits();
        $produit9->setCategorie($this->getReference('categorie9'));
        $produit9->setDescription('Prenez le Pouvoir, le Best-Seller de Dieudonné Fotsing (DFK)');
        $produit9->setDisponible('1');
        $produit9->setImage($this->getReference('media9'));
        $produit9->setNom('Prenez le Pouvoir');
        $produit9->setPrix('2826.25');
        $produit9->setTva($this->getReference('tva'));
        $manager->persist($produit9);
        $manager->flush();
    }

    public function getOrder() {
        return 4;
    }

}
