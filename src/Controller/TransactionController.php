<?php

namespace App\Controller;

use ApiPlatform\Core\Validator\ValidatorInterface;
use App\Repository\TransactionRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Serializer\SerializerInterface;

class TransactionController extends AbstractController
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
     * @Route("/api/transaction/depots", name="depot", methods={"POST"})
     */
    public function depotUser(Request $request, SerializerInterface $serializer, EntityManagerInterface $em)
    {
//          return $this->json($this->getUser());
        $compte = $this->getUser()->getAgenceUser()->getCompte();

        $data = \json_decode($request->getContent(), true);

        if (($compte->getSolde() < 5000) || ($compte->getSolde() <$data['montant'])) {
            return $this->json([
                'message' => 'Votre compte est insuffisant',
            ]);
        }

        $compte->setSolde($compte->getSolde()-$data['montant']);

        $transaction = $serializer->denormalize($data, "App\Entity\Transaction");

        $transaction->setCompteDepot($compte);



        $transaction->init($this->getUser());
//        dd($transaction);

        $em->persist($transaction);
        $em->flush();
        return $this->json([
            'message' => 'succès',
            'date' => $transaction
       ]);

    }
    /**
     * @Route("/api/transaction/retraits", name="retrait", methods={"PUT"})
     */
    public function retraitUser(Request $request, SerializerInterface $serializer, EntityManagerInterface $em, TransactionRepository $repo)
    {

        $compte = $this->getUser()->getAgenceUser()->getCompte();

        $data = \json_decode($request->getContent(), true);
        $transaction=$repo->findOneBy(['codeTransaction'=>$data['codeTransaction']]);
        if ($transaction){
           if ($transaction->getDateRetrait() === null){
               $transaction->setDateRetrait(new \DateTime);
               $transaction->setUserRetrait($this->getUser());
               $transaction->getClientRetrait()->setCNI($data['CNI']);

               $compte->setSolde($compte->getSolde()+$transaction->getMontant()+$transaction->getFraisRetrait());

//        $transaction = $serializer->denormalize($data, "App\Entity\Transaction", true);

               $transaction->setCompteRetrait($compte);

               $em->persist($transaction);
           }else{
               return $this->json(
                   [
                       'message' => 'L\'argent est déjà retirer',
                   ]);
           }
        }else{
            return $this->json([
                'message' => 'Votre code est invalide',
            ]);
        }
//        if (!$transaction) {
//            return $this->json([
//                'message' => 'Votre code est invalide',
//            ]);
//        }
//        if ($transaction->getDateRetrait()){
//        }
//        if ($transaction->getDateAnnulation()){
//            return $this->json([
//                'message' => 'La transaction a été annuler',
//                ]);
//        }
        $em->flush();
        return $this->json([
            'message' => 'succès',
        ]);

    }
    /**
     * @Route("/api/transaction/{code}", name="code", methods={"GET"})
     */
    public function codeTransaction($code, TransactionRepository $resp){
        return $this->json($resp->findOneBy(['codeTransaction'=>$code]));
    }
}
