<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Stage
 *
 * @ORM\Table(name="stage", indexes={@ORM\Index(name="IDX_C27C9369B897366B", columns={"date_id"}), @ORM\Index(name="IDX_C27C936958C54515", columns={"horaire_id"}), @ORM\Index(name="IDX_C27C936986EC68D8", columns={"tuteur_id"})})
 * @ORM\Entity
 */
class Stage
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
     * @ORM\Column(name="libelle", type="string", length=255, nullable=false)
     */
    private $libelle;

    /**
     * @var \Horaire
     *
     * @ORM\ManyToOne(targetEntity="Horaire")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="horaire_id", referencedColumnName="id")
     * })
     */
    private $horaire;

    /**
     * @var \Tuteur
     *
     * @ORM\ManyToOne(targetEntity="Tuteur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tuteur_id", referencedColumnName="id")
     * })
     */
    private $tuteur;

    /**
     * @var \Date
     *
     * @ORM\ManyToOne(targetEntity="Date")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="date_id", referencedColumnName="id")
     * })
     */
    private $date;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Etudiant", inversedBy="stage")
     * @ORM\JoinTable(name="stage_etudiant",
     *   joinColumns={
     *     @ORM\JoinColumn(name="stage_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="etudiant_id", referencedColumnName="id")
     *   }
     * )
     */
    private $etudiant;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->etudiant = new \Doctrine\Common\Collections\ArrayCollection();
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

    public function getHoraire(): ?Horaire
    {
        return $this->horaire;
    }

    public function setHoraire(?Horaire $horaire): self
    {
        $this->horaire = $horaire;

        return $this;
    }

    public function getTuteur(): ?Tuteur
    {
        return $this->tuteur;
    }

    public function setTuteur(?Tuteur $tuteur): self
    {
        $this->tuteur = $tuteur;

        return $this;
    }

    public function getDate(): ?Date
    {
        return $this->date;
    }

    public function setDate(?Date $date): self
    {
        $this->date = $date;

        return $this;
    }

    /**
     * @return Collection|Etudiant[]
     */
    public function getEtudiant(): Collection
    {
        return $this->etudiant;
    }

    public function addEtudiant(Etudiant $etudiant): self
    {
        if (!$this->etudiant->contains($etudiant)) {
            $this->etudiant[] = $etudiant;
        }

        return $this;
    }

    public function removeEtudiant(Etudiant $etudiant): self
    {
        $this->etudiant->removeElement($etudiant);

        return $this;
    }

}
