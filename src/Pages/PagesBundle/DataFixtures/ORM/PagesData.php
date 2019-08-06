<?php

namespace Pages\PagesBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Pages\PagesBundle\Entity\Pages;

class PagesData implements FixtureInterface {

    public function load(ObjectManager $manager) {
        $page1 = new Pages();
        $page1->setTitre('CGV');
        $page1->setContenu('
            <div class="row">
                <h4>Article 1</h4>
                <h5>Objet</h5>
                <p>Les présentes conditions de vente visent à définir les relations contractuelles entre bayamsalam.cm et l’acheteur et les conditions applicables à tout achat effectué par le biais du site internet bayamsalam.cm. L’acquisition d’un produit à travers le présent site implique une acceptation sans réserve par l’acheteur des présentes conditions de vente dont l’acheteur reconnaît avoir pris connaissance préalablement à sa commande. Avant toute transaction, l’acheteur déclare d’une part que l’achat de produits sur le site bayamsalam.cm est sans rapport direct avec son activité professionnelle et est limité à une utilisation strictement personnelle et d’autre part avoir la pleine capacité juridique, lui permettant de s’engager au titre des présentes conditions générales de ventes.</p>
                </br>
                <p>La société bayamsalam.cm conserve la possibilité de modifier à tout moment ces conditions de ventes, afin de respecter toute nouvelle réglementation ou dans le but d\'améliorer l\'utilisation de son site. De ce fait, les conditions applicables seront celles en vigueur à la date de la commande par l’acheteur.</p>
            </div>
            <div class="row">
                <h4>Article 2</h4>
                <h5>Produits</h5>
                <p>Les produits proposés sont ceux qui figurent sur le site bayamsalam.cm de la société bayamsalam.cm dans la limite des stocks disponibles. La société bayamsalam.cm se réserve le droit de modifier à tout moment l’assortiment de produits. Chaque produit est présenté sur le site internet sous forme d’un descriptif reprenant ses principales caractéristiques techniques (contenance, utilisation, composition…). Les photographies sont les plus fidèles possibles mais n’engagent en rien le Vendeur. La vente des produits présentés dans le site bayamsalam.cm est destinée à tous les acheteurs résidants dans les pays qui autorisent pleinement l’entrée sur leur territoire de ces produits.</p>
            </div>
            <div class="row">
                <h4>Commande et modalités de paiement </h4>
                <h5>Paiement sécurisé par Mobile Money</h5>
                <p>Avant toute commande, l’acheteur doit créer un compte sur le site bayamsalam.cm. La rubrique de création de compte est accessible directement depuis la barre de menu latérale. A chaque visite, l’acheteur, s’il souhaite commander ou consulter son compte (état des commandes, profil…), devra s’identifier à l’aide de ces informations. La société bayamsalam.cm propose à l’acheteur de commander et régler ses produits par 2 moyens au choix : MTN Mobile Money et Orange Money.</p>
            </div>');
        $manager->persist($page1);

        $page2 = new Pages();
        $page2->setTitre('Mentions légales');
        $page2->setContenu('<div class="row">
                <h4>Dénomination sociale</h4>
                <h5>bayamsalam SA</h5>
                <p>bayamsalam.cm est une entreprise camerounaise créee en 2018 pour servir le Cameroun et le Cameroun d\'abord, en leur procurant des produits de qualité moins chers qu\'au marché; à l\'image de nos mamans bayamsalam dans nos nombreux marchés.</p>
            </div>
            <div class="row">
                <h4>Siège social</h4>
                <h5>Adresse</h5>
                <p>Nos bureau et entrepôt sont situés dans la ville de Douala au Cameroun, dans la localité appélée Yassa.</p>
            </div>
            <div class="row">
                <h4>Contacts</h4>
                <h5>Adresse mail et Numéro de téléphone</h5>
                <p>Vous pouvez aisement et à tout moment nous contacter par email : contact@bayamsalam.cm, ou au numéro de téléphone : 697 82 68 99.</p>
            </div>');

        $manager->persist($page2);

        $manager->flush();
    }

}
