<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use ApiPlatform\Core\Validator\ValidatorInterface;
use App\Entity\Agence;
use App\Entity\Compte;
use App\Entity\Profil;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Serializer\SerializerInterface;

class UserController extends AbstractController
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
    //create user
    /**
     * @Route("/api/admin/users", name="create_users",methods={"POST"})
     * @IsGranted("ROLE_AdminSysteme")
     */
    public function addUser(Request $request, SerializerInterface $serializer, UserPasswordEncoderInterface $encoder,ValidatorInterface $validator)
    {

        $userReq = $request->request->all();

        $uploadfile = $request->files->get("avatar");
        $manager=$this->getDoctrine()->getManager();
        $profil=$manager->getRepository(Profil::class)->findOneBy(['libelle' => $userReq['profils']]);

        $user = $serializer->denormalize($userReq,User::class,true);
//        dd($user);
        $file = $uploadfile->getRealPath();
        $avatar = fopen($file,'r+');
        $user->setAvatar($avatar);
        $password = $userReq['password'];
//        dd($password);
        $user->setPassword($encoder->encodePassword($user,$password));
        $user->setProfil($profil);
        $this->validator->validate($user);
        $this->em->persist($user);
        $this->em->flush();
        fclose($avatar);
        return $this->json("success",201);
    }

    /**
     * @Route("/api/admin/users", name="create_users",methods={"POST"})
     * @IsGranted("ROLE_AdminAgence")
     */
    public function addUserAgence(Request $request, SerializerInterface $serializer, UserPasswordEncoderInterface $encoder,ValidatorInterface $validator)
    {

        $userReq = $request->request->all();

        $uploadfile = $request->files->get("avatar");
        $manager=$this->getDoctrine()->getManager();
        $profil=$manager->getRepository(Profil::class)->findOneBy(['libelle' => ['userAgence']]);

        $user = $serializer->denormalize($userReq,User::class,true);
//        dd($user);
        $file = $uploadfile->getRealPath();
        $avatar = fopen($file,'r+');
        $user->setAvatar($avatar);
        $password = $userReq['password'];
//        dd($password);
        $user->setPassword($encoder->encodePassword($user,$password));
        $user->setProfil($profil);
        $this->validator->validate($user);
        $this->em->persist($user);
        $this->em->flush();
        fclose($avatar);
        return $this->json("success",201);
    }
    /**
     * @Route("/api/admin/users/connected", name="connected",methods={"GET"})
     */
    public function connected(TokenStorageInterface $token){
        $Isconnect = $token->getToken()->getUser();
        return $this->json($Isconnect);
    }
}
