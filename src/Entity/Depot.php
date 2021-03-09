<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\DepotRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=DepotRepository::class)
 * @ApiResource(
 *     attributes={
 *      "security" = "is_granted('ROLE_AdminSysteme') or is_granted('ROLE_Caissier')",
 *      "security_message" = "vous n'avez pas accès a cette page",
 *     "denormalization_context"={"groups"={"depot:write"}}
 *   },
 *    routePrefix="/admin",
 * )
 */
class Depot
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     * @Groups ({"depot:write"})
     */
    private $montantDepot;

    /**
     * @ORM\Column(type="date")
     * @Groups ({"depot:write"})
     */
    private $dateDate;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="depot", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     * @Groups ({"depot:write"})
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity=Compte::class, inversedBy="rechargments", cascade={"persist", "remove"})
     * @Groups ({"depot:write"})
     *
     */
    private $compte;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMontantDepot(): ?int
    {
        return $this->montantDepot;
    }

    public function setMontantDepot(int $montantDepot): self
    {
        $this->montantDepot = $montantDepot;

        return $this;
    }

    public function getDateDate(): ?\DateTimeInterface
    {
        return $this->dateDate;
    }

    public function setDateDate(\DateTimeInterface $dateDate): self
    {
        $this->dateDate = $dateDate;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getCompte(): ?Compte
    {
        return $this->compte;
    }

    public function setCompte(?Compte $compte): self
    {
        $this->compte = $compte;

        return $this;
    }

}
