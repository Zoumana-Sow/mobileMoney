<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\TransactionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=TransactionRepository::class)
 * @ApiResource (
 *     denormalizationContext={"groups"={"transc:write", "retrait:edit"}},
 *
 * )
 */
class Transaction
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     * @Groups ({"transc:write"})
     */
    private $montant;

    /**
     * @ORM\Column(type="date")
     * @Groups ({"transc:write"})
     */
    private $dateDepot;

    /**
     * @ORM\Column(type="date", nullable=true)
     * @Groups ({"transc:write"})
     */
    private $dateRetrait;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dateAnnulation;

    /**
     * @ORM\Column(type="integer", nullable=false)
     * @Groups ({"transc:write"})
     */
    private $fraisEnvoie;

    /**
     * @ORM\Column(type="integer")
     * @Groups ({"transc:write"})
     */
    private $fraisRetrait;

    /**
     * @ORM\Column(type="integer")
     * @Groups ({"user:read", "transc:write"})
     */
    private $fraisEtat;

    /**
     * @ORM\Column(type="integer")
     * @Groups ({"transc:write"})
     */
    private $fraisSysteme;

    /**
     * @ORM\Column(type="string")
     * @Groups ({"transc:write"})
     */
    private $codeTransaction;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="userDepot", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $userDepot;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="retraits", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $userRetrait;

    /**
     * @ORM\ManyToOne(targetEntity=Compte::class, inversedBy="depots")
     * @ORM\JoinColumn(nullable=false)
     */
    private $compteDepot;

    /**
     * @ORM\ManyToOne(targetEntity=Compte::class, inversedBy="retraits")
     * @ORM\JoinColumn(nullable=true)
     */
    private $compteRetrait;

    /**
     * @ORM\ManyToOne(targetEntity=Client::class, inversedBy="depots", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     * @Groups ({"transc:write"})
     */
    private $clientDepot;

    /**
     * @ORM\ManyToOne(targetEntity=Client::class, inversedBy="retraits", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     * @Groups ({"transc:write"})
     */
    private $clientRetrait;

    /**
     * @ORM\Column(type="integer")
     * @Groups ({"transc:write"})
     */
    private $frais;



    public function __construct()
    {

    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMontant(): ?int
    {
        return $this->montant;
    }

    public function setMontant(int $montant): self
    {
        $this->montant = $montant;

        return $this;
    }

    public function getDateDepot(): ?\DateTimeInterface
    {
        return $this->dateDepot;
    }

    public function setDateDepot(\DateTimeInterface $dateDepot): self
    {
        $this->dateDepot = $dateDepot;

        return $this;
    }

    public function getDateRetrait(): ?\DateTimeInterface
    {
        return $this->dateRetrait;
    }

    public function setDateRetrait(\DateTimeInterface $dateRetrait): self
    {
        $this->dateRetrait = $dateRetrait;

        return $this;
    }

    public function getDateAnnulation(): ?\DateTimeInterface
    {
        return $this->dateAnnulation;
    }

    public function setDateAnnulation(?\DateTimeInterface $dateAnnulation): self
    {
        $this->dateAnnulation = $dateAnnulation;

        return $this;
    }

    public function getFraisEnvoie(): ?int
    {
        return $this->fraisEnvoie;
    }

    public function setFraisEnvoie(int $fraisEnvoie): self
    {
        $this->fraisEnvoie = $fraisEnvoie;

        return $this;
    }

    public function getFraisRetrait(): ?int
    {
        return $this->fraisRetrait;
    }

    public function setFraisRetrait(int $fraisRetrait): self
    {
        $this->fraisRetrait = $fraisRetrait;

        return $this;
    }

    public function getFraisEtat(): ?int
    {
        return $this->fraisEtat;
    }

    public function setFraisEtat(int $fraisEtat): self
    {
        $this->fraisEtat = $fraisEtat;

        return $this;
    }

    public function getFraisSysteme(): ?int
    {
        return $this->fraisSysteme;
    }

    public function setFraisSysteme(int $fraisSysteme): self
    {
        $this->fraisSysteme = $fraisSysteme;

        return $this;
    }

    public function getCodeTransaction(): ?string
    {
        return $this->codeTransaction;
    }

    public function setCodeTransaction(string $codeTransaction): self
    {
        $this->codeTransaction = $codeTransaction;

        return $this;
    }

    public function getUserDepot(): ?User
    {
        return $this->userDepot;
    }

    public function setUserDepot(?User $userDepot): self
    {
        $this->userDepot = $userDepot;

        return $this;
    }

    public function getUserRetrait(): ?User
    {
        return $this->userRetrait;
    }

    public function setUserRetrait(?User $userRetrait): self
    {
        $this->userRetrait = $userRetrait;

        return $this;
    }

    public function getCompteDepot(): ?Compte
    {
        return $this->compteDepot;
    }

    public function setCompteDepot(?Compte $compteDepot): self
    {
        $this->compteDepot = $compteDepot;

        return $this;
    }

    public function getCompteRetrait(): ?Compte
    {
        return $this->compteRetrait;
    }

    public function setCompteRetrait(?Compte $compteRetrait): self
    {
        $this->compteRetrait = $compteRetrait;

        return $this;
    }

    public function getClientDepot(): ?Client
    {
        return $this->clientDepot;
    }

    public function setClientDepot(?Client $clientDepot): self
    {
        $this->clientDepot = $clientDepot;

        return $this;
    }

    public function getClientRetrait(): ?Client
    {
        return $this->clientRetrait;
    }

    public function setClientRetrait(?Client $clientRetrait): self
    {
        $this->clientRetrait = $clientRetrait;

        return $this;
    }

    public function calculCommision($pourcentag)
    {
        return ($pourcentag * $this->frais) / 100;
    }

    public function init($user_depot)
    {
        $this->totalCommission();
        $this->fraisEtat = $this->calculCommision(40);
        $this->fraisEnvoie = $this->calculCommision(10);
        $this->fraisRetrait = $this->calculCommision(20);
        $this->fraisSysteme = $this->calculCommision(30);
        $this->generateCode();
        $this->dateDepot = new \DateTime();
        $this->userDepot = $user_depot;
    }

    public function generateCode($long = 8)
    {
        $cont = '0123456789aazertyuiopqsdfghjklmwxcvbnAZERTYUIOPQSDFGHJKLMWXCVBN';
        $longueur = strlen($cont);
        $aleatoire = '';
        for ($i = 0; $i < $long; $i++){
            $aleatoire .= $cont[rand(0, $longueur - 1)];
        }
        $this->codeTransaction = $aleatoire;
    }

    public function totalCommission ()
    {
        switch (true){
            case ($this->montant <= 5000);
            $this-> frais = 425;
            break;
            case ($this->montant <=10000 && $this->montant > 5000);
                $this-> frais = 850;
                break;
            case ($this->montant <=15000 && $this->montant > 10000);
                $this-> frais = 1270;
                break;
            case ($this->montant <=20000 && $this->montant > 15000);
                $this-> frais = 1695;
                break;
            case ($this->montant <=50000 && $this->montant > 20000);
                $this-> frais = 2500;
                break;
            case ($this->montant <=60000 && $this->montant > 50000);
                $this-> frais = 3000;
                break;
            case ($this->montant <=75000 && $this->montant > 60000);
                $this-> frais = 4000;
                break;
            case ($this->montant <=120000 && $this->montant > 75000);
                $this-> frais = 5000;
                break;
            case ($this->montant <=150000 && $this->montant > 120000);
                $this-> frais = 6000;
                break;
            case ($this->montant <=200000 && $this->montant > 150000);
                $this-> frais = 7000;
                break;
            case ($this->montant <=250000 && $this->montant > 200000);
                $this-> frais = 8000;
                break;
            case ($this->montant <=300000 && $this->montant > 250000);
                $this-> frais = 9000;
                break;
            case ($this->montant <= 400000 && $this->montant > 300000);
                $this-> frais = 12000;
                break;
            case ($this->montant <=750000 && $this->montant > 400000);
                $this-> frais = 15000;
                break;
            case ($this->montant <=900000 && $this->montant > 750000);
                $this-> frais = 22000;
                break;
            case ($this->montant <=1000000 && $this->montant > 900000);
                $this-> frais = 25000;
                break;
            case ($this->montant <=1125000 && $this->montant > 1000000);
                $this-> frais = 27000;
                break;
            case ($this->montant <=1400000 && $this->montant > 1125000);
                $this-> frais = 30000;
                break;
            case ($this->montant <=2000000 && $this->montant > 1400000);
                $this-> frais = 40000;
                break;
            case ($this->montant  > 2000000);
                $this-> frais = (2 * $this->montant) / 100;
                break;

        }
    }

    public function getFrais(): ?int
    {
        return $this->frais;
    }

    public function setFrais(int $frais): self
    {
        $this->frais = $frais;

        return $this;
    }

}
