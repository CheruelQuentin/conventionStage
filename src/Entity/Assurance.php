<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Assurance
 *
 * @ORM\Table(name="assurance")
 * @ORM\Entity
 */
class Assurance
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
     * @ORM\Column(type="integer", length=14)
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
