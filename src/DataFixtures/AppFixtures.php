<?php

namespace App\DataFixtures;

use App\Entity\Produits;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $produits = new Produits();

        //J'insère des données dans la base de données
        $produits->setTitre('Nutella pâte à tartiner aux noisettes et au cacao 1kg - Ferrero - 1 kg')
                ->setPhotoUrl('https://fr.openfoodfacts.org/images/products/301/762/042/5035/front_fr.372.400.jpg')
                ->setIngredients(['Sucre', 'huile de palme', 'NOISETTES 13%', 'LAIT écrémé en poudre 8.7%'])
                ->setEan('3017620425035')
                ->setKcal(539)
                ->setKj(2252)
                ->setMatieresGrasses(30.9)
                ->setAcidesGrasSatures(10.6)
                ->setGlucides(57.5)
                ->setSucres(56.3)
                ->setFibres(0)
                ->setProteines(6.3)
                ->setSel(0.107)
                ;

        $manager->persist($produits);
        $manager->flush();
    }
}
