<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Section
 *
 * @ORM\Table(name="section", indexes={@ORM\Index(name="IDX_2D737AEFD1DC61BF", columns={"lycee_id"})})
 * @ORM\Entity
 */
class Section
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
     * @ORM\Column(name="libelle", type="string", length=100, nullable=false)
     */
    private $libelle;

    /**
     * @var \Lycee
     *
     * @ORM\ManyToOne(targetEntity="Lycee")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="lycee_id", referencedColumnName="id")
     * })
     */
    private $lycee;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Enseignant", inversedBy="section")
     * @ORM\JoinTable(name="section_enseignant",
     *   joinColumns={
     *     @ORM\JoinColumn(name="section_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="enseignant_id", referencedColumnName="id")
     *   }
     * )
     */
    private $enseignant;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->enseignant = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getLycee(): ?Lycee
    {
        return $this->lycee;
    }

    public function setLycee(?Lycee $lycee): self
    {
        $this->lycee = $lycee;

        return $this;
    }

    /**
     * @return Collection|Enseignant[]
     */
    public function getEnseignant(): Collection
    {
        return $this->enseignant;
    }

    public function addEnseignant(Enseignant $enseignant): self
    {
        if (!$this->enseignant->contains($enseignant)) {
            $this->enseignant[] = $enseignant;
        }

        return $this;
    }

    public function removeEnseignant(Enseignant $enseignant): self
    {
        $this->enseignant->removeElement($enseignant);

        return $this;
    }


}
