<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Organisme
 *
 * @ORM\Table(name="organisme")
 * @ORM\Entity
 */
class Organisme
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
     * @var int
     *
     * @ORM\Column(name="siret", type="integer", nullable=false)
     */
    private $siret;

    /**
     * @var string
     *
     * @ORM\Column(name="ape", type="string", length=10, nullable=false)
     */
    private $ape;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=100, nullable=false)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=100, nullable=false)
     */
    private $ville;

    /**
     * @var int
     *
     * @ORM\Column(name="code_postal", type="integer", nullable=false)
     */
    private $codePostal;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_representant", type="string", length=100, nullable=false)
     */
    private $nomRepresentant;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_representant", type="string", length=100, nullable=false)
     */
    private $prenomRepresentant;

    /**
     * @var string
     *
     * @ORM\Column(name="qualite_representant", type="string", length=255, nullable=false)
     */
    private $qualiteRepresentant;

    /**
     * @var string
     *
     * @ORM\Column(name="service", type="string", length=100, nullable=false)
     */
    private $service;

    /**
     * @var int
     *
     * @ORM\Column(name="tel", type="integer", nullable=false)
     */
    private $tel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fax", type="string", length=255, nullable=true)
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=100, nullable=false)
     */
    private $mail;

    /**
     * @var string
     *
     * @ORM\Column(name="siege_social", type="string", length=255, nullable=false)
     */
    private $siegeSocial;

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

    public function getSiret(): ?int
    {
        return $this->siret;
    }

    public function setSiret(int $siret): self
    {
        $this->siret = $siret;

        return $this;
    }

    public function getApe(): ?string
    {
        return $this->ape;
    }

    public function setApe(string $ape): self
    {
        $this->ape = $ape;

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

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): self
    {
        $this->ville = $ville;

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

    public function getNomRepresentant(): ?string
    {
        return $this->nomRepresentant;
    }

    public function setNomRepresentant(string $nomRepresentant): self
    {
        $this->nomRepresentant = $nomRepresentant;

        return $this;
    }

    public function getPrenomRepresentant(): ?string
    {
        return $this->prenomRepresentant;
    }

    public function setPrenomRepresentant(string $prenomRepresentant): self
    {
        $this->prenomRepresentant = $prenomRepresentant;

        return $this;
    }

    public function getQualiteRepresentant(): ?string
    {
        return $this->qualiteRepresentant;
    }

    public function setQualiteRepresentant(string $qualiteRepresentant): self
    {
        $this->qualiteRepresentant = $qualiteRepresentant;

        return $this;
    }

    public function getService(): ?string
    {
        return $this->service;
    }

    public function setService(string $service): self
    {
        $this->service = $service;

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

    public function getFax(): ?string
    {
        return $this->fax;
    }

    public function setFax(?string $fax): self
    {
        $this->fax = $fax;

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

    public function getSiegeSocial(): ?string
    {
        return $this->siegeSocial;
    }

    public function setSiegeSocial(string $siegeSocial): self
    {
        $this->siegeSocial = $siegeSocial;

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
