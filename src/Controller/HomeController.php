<?php

namespace App\Controller;

use App\Entity\Produits;
use App\Repository\ProduitsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="app_home")
     */
    public function index(ProduitsRepository $getproduits): Response
    {

        $produits = $getproduits->findAll();

        return $this->render('home/index.html.twig', [
            'produits' => $produits
        ]);
    }

    /**
     * @Route("/produit/{id}", name="single_produit" )
     */
    public function read(Produits $produit, $id): Response
    {

        return $this->render('home/single-produit.html.twig', [
            'produit' => $produit
        ]);
    }
}
