<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\AgenceRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=AgenceRepository::class)
 * @ApiResource(
 *     collectionOperations={
 *     "get"={
 *     "path"="/admin/agences",
 *                "security"="is_granted('ROLE_AdminSysteme')",
 *               "securityMessage"="Accès refusé !",
 *     },
 *     "post"={ "path"="/admin/agences",
 *               "denormalization_context"={"groups"={"agence:write"}},
 *                "security"="is_granted('ROLE_AdminSysteme')",
 *               "securityMessage"="Accès refusé !",
 *         },
 *
 *     },
 *     itemOperations={
 *          "get"={"path"="/admin/agences/{id}",
 *             "security"="is_granted('ROLE_AdminSysteme')",
 *               "securityMessage"="Accès refusé !",
 * },
 *          "put"={"path"="/adminAgence/agences/{id}",
 *            "denormalization_context"={"groups"={"agence:edit"}},
 *             "security"="is_granted('ROLE_AdminSysteme') or is_granted('ROLE_AdminAgence')",
 *               "securityMessage"="Accès refusé !"}
 *     }
 * )
 * @UniqueEntity(fields="nomAgence", message="ce nom {{ value }} existe déjà !")
 */
class Agence
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups ({"agence:write", "compte:read"})
     */
    private $nomAgence;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups ({"agence:write", "compte:read"})
     */
    private $adresseAgence;

    /**
     * @ORM\Column(type="boolean")
     */
    private $archivage=false;

    /**
     * @ORM\OneToMany(targetEntity=User::class, mappedBy="agenceUser", cascade={"persist", "remove"})
     * @Groups ({"agence:write", "agence:edit"})
     */
    private $userAgence;

    /**
     * @ORM\OneToOne(targetEntity=Compte::class, mappedBy="agence", cascade={"persist", "remove"})
     * @Groups ({"agence:write"})
     */
    private $compte;


    public function __construct()
    {
        $this->userAgence = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomAgence(): ?string
    {
        return $this->nomAgence;
    }

    public function setNomAgence(string $nomAgence): self
    {
        $this->nomAgence = $nomAgence;

        return $this;
    }

    public function getAdresseAgence(): ?string
    {
        return $this->adresseAgence;
    }

    public function setAdresseAgence(string $adresseAgence): self
    {
        $this->adresseAgence = $adresseAgence;

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

    /**
     * @return Collection|User[]
     */
    public function getUserAgence(): Collection
    {
        return $this->userAgence;
    }

    public function addUserAgence(User $userAgence): self
    {
        if (!$this->userAgence->contains($userAgence)) {
            $this->userAgence[] = $userAgence;
            $userAgence->setAgenceUser($this);
        }

        return $this;
    }

    public function removeUserAgence(User $userAgence): self
    {
        if ($this->userAgence->removeElement($userAgence)) {
            // set the owning side to null (unless already changed)
            if ($userAgence->getAgenceUser() === $this) {
                $userAgence->setAgenceUser(null);
            }
        }

        return $this;
    }

    public function getCompte(): ?Compte
    {
        return $this->compte;
    }

    public function setCompte(?Compte $compte): self
    {
        // unset the owning side of the relation if necessary
        if ($compte === null && $this->compte !== null) {
            $this->compte->setAgence(null);
        }

        // set the owning side of the relation if necessary
        if ($compte !== null && $compte->getAgence() !== $this) {
            $compte->setAgence($this);
        }

        $this->compte = $compte;

        return $this;
    }

}
