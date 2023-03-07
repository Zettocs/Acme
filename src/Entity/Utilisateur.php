<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Utilisateur
 *
 * @ORM\Table(name="utilisateur")
 * @ORM\Entity
 */
class Utilisateur implements PasswordAuthenticatedUserInterface, UserInterface
{
    /**
     * @var int
     *
     * @ORM\Column(name="IdUser", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iduser = 0;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email", type="string", length=200, nullable=true)
     */
    private $email;

    /**
     * @var string|null
     *
     * @ORM\Column(name="username", type="string", length=150, nullable=true)
     */
    private $username;

    /**
     * @var string|null
     *
     * @ORM\Column(name="firstname", type="string", length=150, nullable=true)
     */
    private $firstname;




    /**
     * @var string|null
     *
     * @ORM\Column(name="password", type="string", length=300, nullable=true)
     */
    private $password;

    /**
     * @var string
     */
    private $passwordVerification;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Adresse", type="string", length=200, nullable=true)
     */
    private $adresse;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ville", type="string", length=150, nullable=true)
     */
    private $ville;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Pays", type="string", length=150, nullable=true)
     */
    private $pays;

    public function getIdUser(): ?int
    {
        return $this->iduser;
    }

    public function setIdUser(int $IdUser): self
    {
        $this->iduser = $IdUser;

        return $this;
    }


    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $Adresse): self
    {
        $this->adresse = $Adresse;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $Ville): self
    {
        $this->ville = $Ville;

        return $this;
    }

    public function getPays(): ?string
    {
        return $this->pays;
    }

    public function setPays(string $Pays): self
    {
        $this->pays = $Pays;

        return $this;
    }




    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $Email): self
    {
        $this->email = $Email;

        return $this;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $Password): self
    {
        $this->password = $Password;

        return $this;
    }
    public function eraseCredentials()
    {
    }

    public function getSalt()
    {
    }

    public function getRoles(): array
    {
        return ['ROLE_USER'];
    }
    public function getUserIdentifier(): string
    {
        return $this->email;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(?string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * @return string
     */
    public function getPasswordVerification(): string
    {
        return $this->passwordVerification;
    }

    /**
     * @param string $passwordVerification
     *
     * @return Utilisateur
     */
    public function setPasswordVerification(string $passwordVerification): self
    {
        $this->passwordVerification = $passwordVerification;

        return $this;
    }
}