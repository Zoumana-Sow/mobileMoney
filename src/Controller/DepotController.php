<?php

namespace App\Controller;

use ApiPlatform\Core\Validator\ValidatorInterface;
use App\Entity\Depot;
use App\Repository\CompteRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Serializer\SerializerInterface;

class DepotController extends AbstractController
{
    private $serializer;
    private $security;
    private $em;
    private $validator;


    public function __construct(SerializerInterface $serializer,Security $security,EntityManagerInterface $em, ValidatorInterface $validator)
    {
        $this->serializer=$serializer;
        $this->security = $security;
        $this->em =  $em;
        $this->validator= $validator;

    }
    /**
     * @Route("/api/caissier/depot", name="rechargement", methods={"POST"})
     */
    public function depotCompte( Request $request, UserRepository $repository, CompteRepository $compteRepository)
    {
        //all data from postman
        $data =  json_decode($request->getContent());
        // dd($dataPostman);$

        $montant = $data->montantDepot; //get montant
        $utilisateur = $this->getUser()->getId() ; //get utilisateur

        // Validate negatif number
        if($montant < 0) {
            // return new JsonResponse("Can be negative number!" ,400) ;
            return $this->json("le montant ne peut pas être négatif!",400);
        }
        $dateday=new \DateTime();
        $newDepot = new Depot(); //Instancier Depot
        $userConnect = $repository->find((int)$utilisateur);

        $newDepot->setMontantDepot($data->montantDepot);
        $newDepot->setDateDate($dateday);
        $newDepot->setUser($userConnect);
        $compte = $compteRepository->find((int)$data->compte);

        $newDepot->setCompte($compte);
        $this->em->persist($newDepot);

        $compte->setSolde($compte->getSolde() + $montant);

        $this->em->persist($compte);
        $this->em->flush();

        return $this->json($data);
    }
}
