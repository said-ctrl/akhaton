<?php

namespace App\Controller;

use App\Entity\Produits;
use App\Form\ProduitsType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{

    #[Route('/contact', name: 'app_contact')]
    public function contact(): Response
    {
        return $this->render('main/contact.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }

    #[Route('/', name: 'app_main')]
    public function produit(EntityManagerInterface $entity): Response
    {
        $produits = $entity->getRepository(Produits::class)->findAll();

        return $this->render('main/index.html.twig', [
            'produits' => $produits
        ]);
    }
    #[Route('/lesproduits', name: 'app_lesproduits')]
    public function lesproduits(EntityManagerInterface $entity): Response
    {
        $lesproduits = $entity->getRepository(Produits::class)->findAll();

        return $this->render('main/lesproduits.html.twig', [
            'lesproduits' => $lesproduits
        ]);
    }
    #[Route('/newproduits', name: 'app_newproduits')]
    public function newproduits(Request $request): Response
    {
        $products= new Produits();
        $form = $this->createForm(ProduitsType::class, $products);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            dd($form);
        }

        

        return $this->render('main/newproduits.html.twig', [
           'controller_name' => 'MainController',
           'form'=>$form->createView()
        ]);
    }
}
