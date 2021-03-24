<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\CompteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=CompteRepository::class)
 * @ApiResource (
 *    routePrefix="/admin",
 *     collectionOperations={
 *     "get"={
 *       "security" = "is_granted('ROLE_AdminSysteme')",
 *      "security_message" = "vous n'avez pas accès a cette page",
 *     },
 *     },
 *     itemOperations={
 *     "get",
 *     }
 * )
 */
class Compte
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"usersall:read", "transc:write", "agence:write", "depot:write", "allagences:read"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups ({"allagences:read", "depot:write"})
     */
    private $numCompte;

    /**
     * @ORM\Column(type="integer")
     * @Groups({"agence:write", "usersall:read"})
     */
    private $solde;

    /**
     * @ORM\OneToMany(targetEntity=Transaction::class, mappedBy="compteDepot")
     * @Groups ({"mestransac:read"})
     */
    private $depots;

    /**
     * @ORM\OneToMany(targetEntity=Transaction::class, mappedBy="compteRetrait")
     * @Groups ({"mestransac:read"})
     */
    private $retraits;


    private $rechargments;

    /**
     * @ORM\OneToOne(targetEntity=Agence::class, inversedBy="compte", cascade={"persist", "remove"})
     * @Groups({"compte:read", "transc:write"})
     */
    private $agence;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="comptes")
     * @Groups({"compte:read"})
     */
    private $adminSyst;

    /**
     * @ORM\Column(type="boolean")
     * @Groups ({"compte:write"})
     */
    private $archivage=false;


    public function __construct()
    {
        $this->depots = new ArrayCollection();
        $this->retraits = new ArrayCollection();
        $this->rechargments = new ArrayCollection();
        $this->numCompte = substr(str_shuffle(str_repeat($x='0123456789ABC', ceil(14/strlen($x)) )),1,6);
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumCompte(): ?string
    {
        return $this->numCompte;
    }

    public function setNumCompte(string $numCompte): self
    {
        $this->numCompte = $numCompte;

        return $this;
    }

    public function getSolde(): ?int
    {
        return $this->solde;
    }

    public function setSolde(int $solde): self
    {
        $this->solde = $solde;

        return $this;
    }

    /**
     * @return Collection|Transaction[]
     */
    public function getDepots(): Collection
    {
        return $this->depots;
    }

    public function addDepot(Transaction $depot): self
    {
        if (!$this->depots->contains($depot)) {
            $this->depots[] = $depot;
            $depot->setCompteDepot($this);
        }

        return $this;
    }

    public function removeDepot(Transaction $depot): self
    {
        if ($this->depots->removeElement($depot)) {
            // set the owning side to null (unless already changed)
            if ($depot->getCompteDepot() === $this) {
                $depot->setCompteDepot(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Transaction[]
     */
    public function getRetraits(): Collection
    {
        return $this->retraits;
    }

    public function addRetrait(Transaction $retrait): self
    {
        if (!$this->retraits->contains($retrait)) {
            $this->retraits[] = $retrait;
            $retrait->setCompteRetrait($this);
        }

        return $this;
    }

    public function removeRetrait(Transaction $retrait): self
    {
        if ($this->retraits->removeElement($retrait)) {
            // set the owning side to null (unless already changed)
            if ($retrait->getCompteRetrait() === $this) {
                $retrait->setCompteRetrait(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Depot[]
     */
    public function getRechargments(): Collection
    {
        return $this->rechargments;
    }

    public function addRechargment(Depot $rechargment): self
    {
        if (!$this->rechargments->contains($rechargment)) {
            $this->rechargments[] = $rechargment;
            $rechargment->setCompte($this);
        }

        return $this;
    }

    public function removeRechargment(Depot $rechargment): self
    {
        if ($this->rechargments->removeElement($rechargment)) {
            // set the owning side to null (unless already changed)
            if ($rechargment->getCompte() === $this) {
                $rechargment->setCompte(null);
            }
        }

        return $this;
    }

    public function getAgence(): ?Agence
    {
        return $this->agence;
    }

    public function setAgence(?Agence $agence): self
    {
        $this->agence = $agence;

        return $this;
    }

    public function getAdminSyst(): ?User
    {
        return $this->adminSyst;
    }

    public function setAdminSyst(?User $adminSyst): self
    {
        $this->adminSyst = $adminSyst;

        return $this;
    }

    public function getArchivage(): ?bool
    {
        return $this->archivage;
    }

    public function setArchivage(bool $archivage): self
    {
        $this->archivage = $archivage;

        return $this;
    }


}
