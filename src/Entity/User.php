<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiSubresource;
use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 * @ORM\Table(name="`user`")
 * @ApiResource(
 *    routePrefix="/admin",
 *     collectionOperations={
 *     "get"={
 *     "method"= "GET",
 *     "path" = "/users",
 *     "normalization_context"={"groups"={"usersall:read"}},
 *     },
 *     "create_users"={
 *     "security" = "is_granted('ROLE_AdminSysteme')",
 *      "security_message" = "vous n'avez pas accès a cette page",
 *          "method"= "POST",
 *          "path" = "/users",
 *          "route_name"="create_users",}
 *     },
 *
 *     itemOperations={
 *     "connect"={
 *          "method"= "GET",
 *     "normalization_context"={"groups"={"usersall:read"}},
 *     "route_name"="connected",
 *     },
 *     "get"={
 *     "method"= "GET",
 *     "path" = "/users/{id}",
 *     "normalization_context"={"groups"={"user:read"}},
 *     },"put","delete",
 *     })
 * )
 */
class User implements UserInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups ({"usersall:read"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     * @Groups ({"agence:write", "profil:read", "transc:write", "usersall:read"})
     */
    private $email;

    private $roles = [];

    /**
     * @var string The hashed password
     * @ORM\Column(type="string")
     * @Groups ({"agence:write"})
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups ({"agence:write", "profil:read", "transc:write", "usersall:read"})
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups ({"agence:write", "profil:read", "transc:write", "usersall:read"})
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups ({"agence:write", "profil:read", "transc:write","usersall:read"})
     */
    private $numero;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups ({"agence:write",  "profil:read", "transc:write"})
     */
    private $CNI;

    /**
     * @ORM\Column(type="blob", nullable=true)
     * @Groups ({"compte:read","usersall:read"})
     */
    private $avatar;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups ({"agence:write", "profil:read", "transc:write", "users:read"})
     */
    private $adresse;

    /**
     * @ORM\Column(type="boolean")
     */
    private $archivage=false;

    /**
     * @ORM\OneToMany(targetEntity=Transaction::class, mappedBy="userDepot")
     * @Groups ({"transc:write"})
     * @ApiSubresource()
     */
    private $depots;

    /**
     * @ORM\OneToMany(targetEntity=Transaction::class, mappedBy="userRetrait")
     * @Groups ({"transc:write"})
     * @ApiSubresource()
     */
    private $retraits;


    /**
     * @ORM\ManyToOne(targetEntity=Profil::class, inversedBy="users")
     * @ORM\JoinColumn(nullable=false)
     * @Groups ({"agence:write", "transc:write"})
     */
    private $profil;

    /**
     * @ORM\ManyToOne(targetEntity=Agence::class, inversedBy="userAgence")
     * @Groups ({"usersall:read"})
     * @ApiSubresource ()
     */
    private $agenceUser;

    /**
     * @ORM\OneToMany(targetEntity=Compte::class, mappedBy="adminSyst")
     * @Groups ({"usersall:read"})
     */
    private $comptes;


    public function __construct()
    {
        $this->depots = new ArrayCollection();
        $this->retraits = new ArrayCollection();
        $this->comptes = new ArrayCollection();

    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUsername(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_'.$this->profil->getLibelle();

        return array_unique($roles);
    }

    public function setRoles(string $roles): self
    {
        $this->roles[] = $roles;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getPassword(): string
    {
        return (string) $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = password_hash($password,PASSWORD_ARGON2ID);

        return $this;

    }

    /**
     * Returning a salt is only needed, if you are not using a modern
     * hashing algorithm (e.g. bcrypt or sodium) in your security.yaml.
     *
     * @see UserInterface
     */
    public function getSalt(): ?string
    {
        return null;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getNumero(): ?string
    {
        return $this->numero;
    }

    public function setNumero(string $numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    public function getCNI(): ?string
    {
        return $this->CNI;
    }

    public function setCNI(string $CNI): self
    {
        $this->CNI = $CNI;

        return $this;
    }

    public function getAvatar()
    {
        $avatar = $this->avatar;
        if ($avatar) {
            return (base64_encode(stream_get_contents($this->avatar)));
        }
        return $avatar;
    }

    public function setAvatar($avatar): self
    {
        $this->avatar = $avatar;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

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
     * @return Collection|Transaction[]
     */
    public function getDepots(): Collection
    {
        return $this->depots;
    }

    public function addDepot(Transaction $depots): self
    {
        if (!$this->depots->contains($depots)) {
            $this->depots[] = $depots;
            $depots->setDepot($this);
        }

        return $this;
    }

    public function removDepot(Transaction $depots): self
    {
        if ($this->depots->removeElement($depots)) {
            // set the owning side to null (unless already changed)
            if ($depots->getDepots() === $this) {
                $depots->setDepot(null);
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
            $retrait->setUserRetrait($this);
        }

        return $this;
    }

    public function removeRetrait(Transaction $retrait): self
    {
        if ($this->retraits->removeElement($retrait)) {
            // set the owning side to null (unless already changed)
            if ($retrait->getUserRetrait() === $this) {
                $retrait->setUserRetrait(null);
            }
        }

        return $this;
    }


    public function getProfil(): ?Profil
    {
        return $this->profil;
    }

    public function setProfil(?Profil $profil): self
    {
        $this->profil = $profil;

        return $this;
    }

    public function getAgenceUser(): ?Agence
    {
        return $this->agenceUser;
    }

    public function setAgenceUser(?Agence $agenceUser): self
    {
        $this->agenceUser = $agenceUser;

        return $this;
    }

    /**
     * @return Collection|Compte[]
     */
    public function getComptes(): Collection
    {
        return $this->comptes;
    }

    public function addCompte(Compte $compte): self
    {
        if (!$this->comptes->contains($compte)) {
            $this->comptes[] = $compte;
            $compte->setAdminSyst($this);
        }

        return $this;
    }

    public function removeCompte(Compte $compte): self
    {
        if ($this->comptes->removeElement($compte)) {
            // set the owning side to null (unless already changed)
            if ($compte->getAdminSyst() === $this) {
                $compte->setAdminSyst(null);
            }
        }

        return $this;
    }


}
