<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lycee
 *
 * @ORM\Table(name="lycee")
 * @ORM\Entity
 */
class Lycee
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=100, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=100, nullable=false)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="rue", type="string", length=100, nullable=false)
     */
    private $rue;

    /**
     * @var int
     *
     * @ORM\Column(name="code_postal", type="integer", nullable=false)
     */
    private $codePostal;

    /**
     * @var int
     *
     * @ORM\Column(name="tel", type="integer", nullable=false)
     */
    private $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=100, nullable=false)
     */
    private $mail;

    /**
     * @var string
     *
     * @ORM\Column(name="proviseur_nom", type="string", length=100, nullable=false)
     */
    private $proviseurNom;

    /**
     * @var string
     *
     * @ORM\Column(name="proviseur_prenom", type="string", length=100, nullable=false)
     */
    private $proviseurPrenom;

    /**
     * @var string
     *
     * @ORM\Column(name="proviseur_mail", type="string", length=100, nullable=false)
     */
    private $proviseurMail;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomAssurance;

    /**
     * @ORM\Column(type="integer")
     */
    private $numeroContrat;

    
    public function getId(): ?int
    {
        return $this->id;
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

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getRue(): ?string
    {
        return $this->rue;
    }

    public function setRue(string $rue): self
    {
        $this->rue = $rue;

        return $this;
    }

    public function getCodePostal(): ?int
    {
        return $this->codePostal;
    }

    public function setCodePostal(int $codePostal): self
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    public function getTel(): ?int
    {
        return $this->tel;
    }

    public function setTel(int $tel): self
    {
        $this->tel = $tel;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(string $mail): self
    {
        $this->mail = $mail;

        return $this;
    }

    public function getProviseurNom(): ?string
    {
        return $this->proviseurNom;
    }

    public function setProviseurNom(string $proviseurNom): self
    {
        $this->proviseurNom = $proviseurNom;

        return $this;
    }

    public function getProviseurPrenom(): ?string
    {
        return $this->proviseurPrenom;
    }

    public function setProviseurPrenom(string $proviseurPrenom): self
    {
        $this->proviseurPrenom = $proviseurPrenom;

        return $this;
    }

    public function getProviseurMail(): ?string
    {
        return $this->proviseurMail;
    }

    public function setProviseurMail(string $proviseurMail): self
    {
        $this->proviseurMail = $proviseurMail;

        return $this;
    }

    public function getNomAssurance(): ?string
    {
        return $this->nomAssurance;
    }

    public function setNomAssurance(string $nomAssurance): self
    {
        $this->nomAssurance = $nomAssurance;

        return $this;
    }

    public function getNumeroContrat(): ?int
    {
        return $this->numeroContrat;
    }

    public function setNumeroContrat(int $numeroContrat): self
    {
        $this->numeroContrat = $numeroContrat;

        return $this;
    }


}
